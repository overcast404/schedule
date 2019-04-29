<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\Receipt as ReceiptModel;

//use app\index\model\Dustbin as DustbinModel;

class Mailbox extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
    }
    public function board()
    {

        return view();
    }
    public function detail()
    {
        return view();
    }

    public function trash()
    {
        return view();
    }
    public function write()
    {
        if (input('userid')) {
            $email = db('user')->where('id', input('userid'))->value('email');
            $this->assign('email', $email);
            return view();
        }
        if (request()->isPost()) {
            $receipt = new ReceiptModel();
            $data = input('post.');
            $user = $this->auth->getUser();
            $data['time'] = time();
            $data['useremail'] = db('user')->where('id', $user['id'])->value('email');
            $save = $receipt->save($data);
            if ($save) {
                echo '发送成功';
            } else {
                echo '发送失败，请稍后重试';
            }

        }
        $email = null;
        $this->assign('email', $email);
        return view();
    }
}
