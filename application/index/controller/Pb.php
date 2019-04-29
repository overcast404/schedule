<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\Cate as CateModel;
use app\index\model\College as CollegeModel;
use app\index\model\Pb as PbModel;
use app\index\model\Pbnews as PbnewsModel;
use think\Db;
use think\db\where;

class Pb extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
        $cate = new CateModel();
        $cateres = $cate->select();
        $this->assign('cateres', $cateres);

        $college = new CollegeModel();
        $collegeres = $college->select();
        $this->assign('collegeres', $collegeres);
    }
    public function article()
    {
        $event = db('pbevent')->where('id', input('eventid'))->find();
        $event['author'] = db('user')->where('id', $event['author'])->value('nickname');
        db('pbevent')->where('id', input('eventid'))->setInc('click');
        $this->assign('event', $event);
        return view();
    }
    public function board()
    {
        $user = $this->auth->getUser();
        $pbs = $user['pb'];
        $pb = new PbModel();
        $pbres = $pb->where("id IN($pbs)")->paginate(3);
        $users = db('user')->select();
        foreach ($users as $k => $v) {
            foreach ($pbres as $k1 => $v1) {
                if ($v1['admin'] == $v['id']) {
                    $v1['admin'] = $v['nickname'];
                }
            }
        }
        foreach ($pbres as $k => $v) {
            $cate = db('cate')->where('id', $v['cateid'])->value('catename');
            $v['cateid'] = $cate;
        }
        $pbnews = new PbnewsModel();
        foreach ($pbres as $k => $v) {
            $pbnew = $pbnews->where('pbid', $v['id'])->order('time desc')->select();
            $v['news'] = count($pbnew);
        }

        $this->assign('pbres', $pbres);
        return view();
    }
    public function signout()
    {

    }
    public function myboard()
    {
        $user = $this->auth->getUser();
        $pb = new PbModel();
        $pbres = $pb->where('admin', $user['id'])->paginate(3);
        foreach ($pbres as $k1 => $v1) {
            $v1['admin'] = $user['nickname'];
        }
        foreach ($pbres as $k => $v) {
            $cate = db('cate')->where('id', $v['cateid'])->value('catename');
            $v['cateid'] = $cate;
        }
        $pbnews = new PbnewsModel();
        foreach ($pbres as $k => $v) {
            $pbnew = $pbnews->where('pbid', $v['id'])->order('time desc')->select();
            $v['news'] = count($pbnew);
        }

        $this->assign('pbres', $pbres);
        return view();
    }
    public function details()
    {
        $pbnews = new PbnewsModel();
        if (request()->isPost()) {
            $data = [
                'author' => input('id'),
                'content' => input('content'),
                'time' => time(),
                'pbid' => input('pbid'),
            ];
            $save = $pbnews->save($data);
            if ($save) {

            } else {
                $this->error('发表评价失败');
            }
        }
        $pbid = input('pbid');
        //获得团队评价信息
        $pbnew = $pbnews->where('pbid', $pbid)->order('time desc')->select();
        foreach ($pbnew as $k3 => $v3) {
            $author = db('user')->where('id', $v3['author'])->value('nickname');
            $v3['author'] = $author;
        }
        $users = db('user')->select();
        $pb = new PbModel();
        static $member = array();
        $pbres = $pb->where('id', $pbid)->find();
        //获得管理员信息
        foreach ($users as $k => $v) {
            if ($pbres['admin'] == $v['id']) {
                $pbres['admin'] = $v['nickname'];
            }
        }
        //获得该团队的日程信息
        static $eventuser = array();
        $pbevent = db('pbevent')->where('pbid', $pbres['id'])->order('time desc')->select();
        //获得最新日程的时间
        $newtime = db('pbevent')->where('pbid', $pbres['id'])->order('time desc')->column('uptime');
        if ($newtime) {
            $pbres['newtime'] = $newtime['0'];
        } else {
            $pbres['newtime'] = '暂无';
        }
        //获得发布人的名字
        for ($i = 0; $i < count($pbevent); $i++) {
            $pbevent[$i]['author'] = db('user')->where('id', $pbevent[$i]['author'])->value('nickname');
        }
        $this->assign(array(
            'pbevent' => $pbevent,
            'pbres' => $pbres,
            'pbnew' => $pbnew,
        ));
        return view();
    }
    public function found()
    {
        if (request()->isPost()) {
            $data = [
                'name' => input('name'),
                'mobile' => input('mobile'),
                'desc' => input('desc'),
                'admin' => input('id'),
                'cateid' => input('cateid'),
                'time' => time(),
                'memberid' => input('id'),
            ];
            $data['number'] = rand(10000000, 99999999);
            $pb = new PbModel();
            $save1 = $pb->save($data);
            //同时更新user表中的team字段
            $pbs = $pb->where('admin', input('id'))->column('id');
            $pbres = implode(',', $pbs);
            $save2 = db('user')->where('id', input('id'))->setField('pb', $pbres);
            if ($save1 || $save2) {

            } else {
                $this->error('创建订阅号失败');
            }
        }
        return view();
    }
    public function join()
    {
        $pb = new PbModel();
        $pbres = $pb->paginate(3);
        $users = db('user')->select();
        //在找到该订阅号找到管理员
        foreach ($pbres as $k1 => $v1) {
            foreach ($users as $k2 => $v2) {
                if ($v1['admin'] == $v2['id']) {
                    $v1['admin'] = $v2;

                }
            }
        }
        $this->assign('pbres', $pbres);
        return view();
    }
    public function modify()
    {
        $pb = new PbModel();
        $user = $this->auth->getUser();
        if (request()->isPost()) {
            if (input('status') == 1) {
                $save = $pb->where('id', input('id'))->delete();
                $map['memberid'] = ['like', '%' . $user['id'] . '%'];
                $pbs = $pb->where($map)->column('id');
                $pbres = implode(',', $pbs);
                $save2 = db('user')->where('id', $user['id'])->setField('pb', $pbres);
                $save3 = db('pbevent')->where('pbid', input('id'))->delete();
                $save4 = db('pbnews')->where('pbid', input('id'))->delete();
                if ($save2) {
                    url('pb/myboard');
                } else {
                    $this->error('解散失败!');
                }
            }
            $data = input('post.');
            $save = $pb->update($data);
            if ($save) {
                url('pb/modify', array('pbid' => input('id')));
            } else {
                $this->error('修改失败!');
            }
        }
        $pbres = $pb->where('id', input('pbid'))->find();
        $this->assign('pbres', $pbres);
        return view();
    }
    public function search()
    {
        $pb = new PbModel();
        $pbres = db('pb')->where('number', input('number'))->find();
        $cateid = db('cate')->where('catename', input('number'))->value('id');
        if ($pbres) {
            $user = db('user')->where('id', $pbres['admin'])->find();
            $pbres['admin'] = $user;
            $this->assign('pbres', $pbres);
            return view();
        } else if ($cateid) {
            $pbres = $pb->where('cateid', $cateid)->select();
            foreach ($pbres as $k => $v) {
                $user = db('user')->where('id', $v['admin'])->find();
                $v['admin'] = $user;
            }
            $this->assign('pbres', $pbres);
            return view('catesearch');
        } else {
            return view('empty');
        }
    }
    public function apply()
    {
        //将user表中的pb字段改掉
        $userpb = db('user')->where('id', input('userid'))->find();
        $pbid = explode(',', $userpb['pb']);
        $count1 = count($pbid) + 1;
        $pbid[$count1] = input('pbid');
        $pb = implode(',', $pbid);
        //将pb表中的memberid字段更新
        $member = db('pb')->where('id', input('pbid'))->find();
        $userid = explode(',', $member['memberid']);
        $count2 = count($userid) + 1;
        $userid[$count2] = input('userid');
        $memberid = implode(',', $userid);
        $save1 = db('user')->where('id', input('userid'))->update(['pb' => $pb]);
        $save2 = db('pb')->where('id', input('pbid'))->update(['memberid' => $memberid]);
        if ($save1 && $save2) {
            url('pb/join');
        } else {
            $this->error('关注失败请稍后重试');
        }

    }

}
