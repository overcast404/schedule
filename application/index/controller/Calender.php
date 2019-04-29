<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\Pbevent as PbeventModel;
use app\index\model\Teamevent as TeameventModel;

class Calender extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function main()
    {
        //获得个人日程
        $user = $this->auth->getUser();
        $userevent = db('userevent')->where('author', $user['id'])->select();

        //获得团队日程
        if ($user['team']) {
            $teams = $user['team'];
            $team = new TeameventModel();
            $teamevent = $team->where("teamid IN($teams)")->select();
        } else {
            $teamevent = '0';
        }

        //获得公众号日程
        if ($user['pb']) {
            $pbs = $user['pb'];
            $pb = new PbeventModel();
            $pbevent = $pb->where("pbid IN($pbs)")->select();
        } else {
            $pbevent = '0';
        }

        $this->assign(array(
            'userevent' => $userevent,
            'teamevent' => $teamevent,
            'pbevent' => $pbevent,
        ));
        return view();
    }

    public function team()
    {

        return view();
    }
    public function pb()
    {

        return view();
    }
    public function labelwall()
    {
        return view();
    }
}
