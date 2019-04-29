<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\College as CollegeModel;
use app\index\model\Teamapply as TeamapplyModel;
use app\index\model\Team as TeamModel;
use app\index\model\Teamnews as TeamnewsModel;

class Team extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
        $college = new CollegeModel();
        $collegeres = $college->select();
        $this->assign('collegeres', $collegeres);
    }
    public function board()
    {

        //先找到用户属于的团队
        $user = $this->auth->getUser();
        $users = db('user')->select();
        $teams = $user['team'];
        $team = new TeamModel();
        static $member = array();
        $teamres = $team->where("id IN($teams)")->paginate(3);
        $i = 0;
        //在找到该团队的其他成员
        foreach ($teamres as $k1 => $v1) {
            foreach ($users as $k2 => $v2) {
                $userteam = explode(',', $v2['team']);
                foreach ($userteam as $k3 => $v3) {
                    if ($v1['id'] == $v3) {
                        $member[$i][] = $v2;
                    }
                }
            }
            $i++;
        }
        //计算该队伍的人员数量
        foreach ($teamres as $k3 => $v3) {
            $memberid = explode(',', $v3['memberid']);
            $amount = count($memberid);
            $v3['amount'] = $amount;
        }
        $i = 0;
        //获得成员信息
        foreach ($teamres as $k4 => $v4) {
            $v4['member'] = $member[$i];
            $i++;
        }
        //$member是成员信息 teamres是团队信息
        $this->assign(array(
            'teamres' => $teamres,
        ));
        return view();
    }
    public function myboard()
    {
        //根据id去查负责人
        $user = $this->auth->getUser();
        $users = db('user')->select();
        $teams = $user['team'];
        $team = new TeamModel();
        static $member = array();
        static $teamer = array();
        $teamer = $team->where('author', $user['id'])->order('time desc')->paginate(3);
        $i = 0;
        //在找到该团队的其他成员
        foreach ($teamer as $k1 => $v1) {
            foreach ($users as $k2 => $v2) {
                $userteam = explode(',', $v2['team']);
                foreach ($userteam as $k3 => $v3) {
                    if ($v1['id'] == $v3) {
                        $member[$i][] = $v2;
                    }
                }
            }
            $i++;
        }
        //计算该队伍的人员数量
        foreach ($teamer as $k3 => $v3) {
            $memberid = explode(',', $v3['memberid']);
            $amount = count($memberid);
            $v3['amount'] = $amount;
        }
        $i = 0;
        foreach ($teamer as $k4 => $v4) {
            $v4['member'] = $member[$i];
            $i++;
        }
        //$member是成员信息 teamres是团队信息
        $this->assign(array(
            'teamer' => $teamer,
        ));
        return view();
    }
    public function details()
    {
        $teamnews = new TeamnewsModel();
        if (request()->isPost()) {
            $data = [
                'author' => input('id'),
                'content' => input('content'),
                'time' => time(),
                'teamid' => input('teamid'),
            ];
            $save = $teamnews->save($data);
            if ($save) {

            } else {
                $this->error('发表评价失败');
            }
        }
        $teamid = input('teamid');
        //获得团队评价信息
        $teamnew = $teamnews->where('teamid', $teamid)->order('time desc')->select();
        foreach ($teamnew as $k3 => $v3) {
            $author = db('user')->where('id', $v3['author'])->value('nickname');
            $v3['author'] = $author;
        }
        //
        $users = db('user')->select();
        $team = new TeamModel();
        static $member = array();
        $teamres = $team->where('id', $teamid)->find();
        //获得团队成员数量
        $memberid = explode(',', $teamres['memberid']);
        $amount = count($memberid);
        $teamres['amount'] = $amount;
        //获得组员信息
        $i = 0;
        foreach ($users as $k => $v) {
            foreach ($memberid as $k1 => $v1) {
                if ($v1 == $v['id']) {
                    $member[$i] = $v;
                }
                //获得组织人信息
                if ($teamres['author'] == $v['id']) {
                    $teamres['author'] = $v['nickname'];
                }
            }
            $i++;
        }
        $teamres['member'] = $member;
        //获得该团队的日程信息
        static $eventuser = array();
        $teamevent = db('teamevent')->where('teamid', $teamres['id'])->order('time desc')->select();
        //获得最新日程的时间
        $newtime = db('teamevent')->where('teamid', $teamres['id'])->order('time desc')->column('uptime');
        if ($newtime) {
            $teamres['newtime'] = $newtime['0'];
        } else {
            $teamres['newtime'] = '暂无';
        }
        foreach ($teamevent as $k2 => $v2) {
            $eventuser[] = db('user')->where('id', $v2['author'])->value('nickname');
        }
        for ($i = 0; $i < count($teamevent); $i++) {
            $teamevent[$i]['author'] = $eventuser[$i];
        }
        $this->assign(array(
            'teamevent' => $teamevent,
            'teamres' => $teamres,
            'teamnew' => $teamnew,
        ));
        return view();
    }

    public function found()
    {
        if (request()->isPost()) {
            $data = [
                'name' => input('name'),
                'time' => input('time'),
                'mobile' => input('mobile'),
                'status' => input('status'),
                'desc' => input('desc'),
                'author' => input('id'),
                'memberid' => input('id'),
            ];
            $data['number'] = rand(10000000, 99999999);
            $data['uptime'] = time();
            //存入将团队信息team数据表
            $team = new TeamModel();
            $save1 = $team->save($data);
            //同时更新user表中的team字段
            $map['memberid'] = ['like', '%' . input('id') . '%'];
            $teams = $team->where($map)->column('id');
            $teamres = implode(',', $teams);
            $save2 = db('user')->where('id', input('id'))->setField('team', $teamres);
            if ($save1 && $save2) {
            } else {
                $this->error('创建团队失败');
            }
        }
        return view();
    }
    public function join()
    {

        $team = new TeamModel();
        $teamres = $team->paginate(5);
        $users = db('user')->select();
        $i = 0;
        //在找到该团队的其他成员
        foreach ($teamres as $k1 => $v1) {
            foreach ($users as $k2 => $v2) {
                $userteam = explode(',', $v2['team']);
                foreach ($userteam as $k3 => $v3) {
                    if ($v1['id'] == $v3) {
                        $member[$i][] = $v2;
                    }
                }
            }
            $i++;
        }
        $i = 0;
        foreach ($teamres as $k4 => $v4) {
            $v4['member'] = $member[$i];
            $i++;
        }
        $this->assign('teamres', $teamres);
        return view();
    }
    public function modify()
    {
        $team = new TeamModel();
        $teamapp = new TeamapplyModel();
        //修改
        if (request()->isPost()) {
            if (input('jiesan')) {
                $save = db('team')->where('id', input('id'))->delete();
                if ($save) {
                    $map['memberid'] = ['like', '%' . input('userid') . '%'];
                    $teams = $team->where($map)->column('id');
                    $teamres = implode(',', $teams);
                    $save2 = db('user')->where('id', input('userid'))->setField('team', $teamres);
                    $save3 = db('teamevent')->where('teamid', input('id'))->delete();
                    $save4 = db('teamnews')->where('teamid', input('id'))->delete();
                    if ($save2) {
                        $this->success('解散成功!', url('team/myboard', array('id' => input('id'))));
                    }
                } else {
                    $this->error('解散失败!');
                }
            }
            $data = [
                'name' => input('name'),
                'time' => input('time'),
                'mobile' => input('mobile'),
                'desc' => input('desc'),
            ];
            $save = $team->where('id', input('id'))->update($data);
            if ($save) {
                url('team/modify', array('id' => input('id')));
            } else {
                $this->error('修改失败!');
            }
        }
        $teamid = input('id');
        //获得审核情况
        $teamapply = $teamapp->where('teamid', $teamid)->select();
        foreach ($teamapply as $k => $v) {
            $user = db('user')->where('id', $v['userid'])->find();
            $v['user'] = $user;
        }
        //获得团队信息
        $users = db('user')->select();
        static $member = array();
        $teamres = $team->where('id', $teamid)->find();
        //获得组员信息
        $memberid = explode(',', $teamres['memberid']);
        $i = 0;
        foreach ($users as $k => $v) {
            foreach ($memberid as $k1 => $v1) {
                if ($v1 == $v['id']) {
                    $member[$i] = $v;
                }
                //获得组织人信息
                if ($teamres['author'] == $v['id']) {
                    $teamres['author'] = $v['nickname'];
                }
            }
            $i++;
        }
        $teamres['member'] = $member;
        $this->assign(array(
            'teamres' => $teamres,
            'teamapply' => $teamapply,
        ));
        return view();
    }
    public function search()
    {

        $teamres = db('team')->where('number', input('number'))->find();
        if ($teamres) {
            $teamres['number'] = input('number');
            $users = db('user')->select();
            foreach ($users as $k2 => $v2) {
                $userteam = explode(',', $v2['team']);
                foreach ($userteam as $k3 => $v3) {
                    if ($teamres['id'] == $v3) {
                        $member[] = $v2;
                    }
                }
            }
            $teamres['member'] = $member;
            $this->assign('teamres', $teamres);
            return view();
        } else {
            return view('empty');
        }
    }
    public function apply()
    {
        $application = new TeamapplyModel();
        $data = [
            'userid' => input('userid'),
            'teamid' => input('teamid'),
            'reason' => input('reason'),
        ];
        $team = db("user")->where('id', input('userid'))->value('team');
        $teamid = explode(',', $team);
        foreach ($teamid as $k => $v) {
            if ($v == input('teamid')) {
                $this->success('你已加入该团队，现在为你跳转', url('team/details', array('teamid' => input('teamid'))));
            }
        }
        $save = $application->save($data);
        if ($save) {
            $this->success('申请成功，请等待回复', url('team/join'));
        } else {
            $this->error('申请失败，请稍后重试');
        }

    }
    public function examine()
    {
        $teamapp = new TeamapplyModel();
        $teamapp->where('id', input('teamapplyid'))->update(['status' => '1']);
        $teamapply = $teamapp->where('id', input('teamapplyid'))->find();
        //将user表中的team字段变化
        $user = db('user')->where('id', $teamapply['userid'])->find();
        $teamid = explode(',', $user['team']);
        $count1 = count($teamid) + 1;
        $teamid[$count1] = $teamapply['teamid'];
        $team = implode(',', $teamid);
        $save1 = db('user')->where('id', $teamapply['userid'])->update(['team' => $team]);
        //将team表中的memberid变化
        $teamres = db('team')->where('id', $teamapply['teamid'])->find();
        $memberid = explode(',', $teamres['memberid']);
        $count2 = count($memberid) + 1;
        $memberid[$count2] = $teamapply['userid'];
        $member = implode(',', $memberid);
        $save2 = db('team')->where('id', $teamapply['teamid'])->update(['memberid' => $member]);
        if ($save1 && $save2) {
            $this->success('审核成功', url('team/modify', array('id' => $teamapply['teamid'])));
        } else {
            $this->error('审核失败，请重试');
        }
    }
    public function administration()
    {

    }
}
