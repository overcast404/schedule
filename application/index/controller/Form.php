<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\Pb as PbModel;
use app\index\model\Pbevent as PbeventModel;
use app\index\model\Team as TeamModel;
use app\index\model\Teamevent as TeameventModel;
use app\index\model\Userevent as UsereventModel;

class Form extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
    }
    public function user()
    {
        //添加个人日程
        if (request()->isPost()) {
            $data = [
                'title' => input('title'),
                'content' => input('content'),
            ];
            $data['author'] = input('id');
            $data['time'] = time();
            $event = new UsereventModel();
            $save = $event->save($data);
            if ($save) {
                $this->success('添加个人日程成功!', url('form/user'));
            } else {
                $this->error('添加个人日程失败');
            }
        }
        return view();
    }

    public function team()
    {
        if (request()->isPost()) {
            //获得团队日程添加请求并添加
            $data = [
                'title' => input('title'),
                'author' => input('id'),
                'time' => input('time'),
                'content' => input('content'),
                'teamid' => input('team'),
            ];
            $data['uptime'] = time();
            db('team')->where('id', input('team'))->setInc('count');
            $teamevent = new TeameventModel();
            $save = $teamevent->save($data);
            if ($save) {
                $this->success('添加团队日程成功!', url('form/team'));
            } else {
                $this->error('添加团队日程失败');
            }
        }
        //查询user表中的team字段，查询到用户加入的团队
        $user = $this->auth->getUser();
        //获得加入团队的字符串，并转化为数组
        $teams = explode(',', $user['team']);
        $team = new TeamModel();
        static $teamres = array();
        foreach ($teams as $k => $v) {
            $teamres[] = $team->where('id', $v)->find();
        }
        $this->assign('teamres', $teamres);
        //添加团队日程`
        return view();
    }
    public function pb()
    {
        if (request()->isPost()) {
            $data = [
                'title' => input('title'),
                'author' => input('id'),
                'time' => input('time'),
                'content' => input('content'),
                'pbid' => input('pb'),
            ];
            $data['uptime'] = time();
            db('pb')->where('id', input('pb'))->setInc('count');
            $pbevent = new PbeventModel();
            $save = $pbevent->save($data);
            if ($save) {
                $this->success('发布订阅号日程成功!', url('form/team'));
            } else {
                $this->error('发布订阅号日程失败');
            }
        }
        //查询user表中的pb字段，查询到用户管理的订阅号
        $user = $this->auth->getUser();
        $pbs = explode(',', $user['pb']);
        $pb = new PbModel();
        $data = $pb->select();
        static $pbres = array();
        foreach ($pbs as $k => $v) {
            $pbres[] = $pb->where('id', $v)->find();
        }
        $this->assign('pbres', $pbres);
        return view();
    }
}
