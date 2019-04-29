<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Personality extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function index()
    {
        return view();
    }

}
