<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\index\model\College as CollegeModel;
use app\index\model\User as UserModel;
use think\Cookie;
use think\Hook;
use think\Validate;

/**
 * 用户中心
 */
class User extends Frontend
{

    protected $layout = '*';
    protected $noNeedLogin = ['login', 'register', 'third'];
    protected $noNeedRight = ['*'];

    public function _initialize()
    {
        parent::_initialize();
        $auth = $this->auth;
        $college = new CollegeModel();
        $collegeres = $college->select();
        $this->assign('collegeres', $collegeres);

        //监听注册登录注销的事件
        Hook::add('user_login_successed', function ($user) use ($auth) {
            $expire = input('post.keeplogin') ? 30 * 86400 : 0;
            Cookie::set('uid', $user->id, $expire);
            Cookie::set('token', $auth->getToken(), $expire);
        });
        Hook::add('user_register_successed', function ($user) use ($auth) {
            Cookie::set('uid', $user->id);
            Cookie::set('token', $auth->getToken());
        });
        Hook::add('user_delete_successed', function ($user) use ($auth) {
            Cookie::delete('uid');
            Cookie::delete('token');
        });
        Hook::add('user_logout_successed', function ($user) use ($auth) {
            Cookie::delete('uid');
            Cookie::delete('token');
        });
    }

    /**
     * 空的请求
     * @param $name
     * @return mixed
     */
    public function _empty($name)
    {
        $data = Hook::listen("user_request_empty", $name);
        foreach ($data as $index => $datum) {
            $this->view->assign($datum);
        }
        return $this->view->fetch('user/' . $name);
    }

    /**
     * 用户中心
     */
    public function index()
    {
        $this->view->assign('title', __('User center'));
        return view();
    }

    /**
     * 注册
     */
    public function register()
    {
        $url = $this->request->request('url');
        if ($this->auth->id) {
            $this->success(__('You\'ve logged in, do not login again'), $url ? $url : url('user/index'));
        }

        if ($this->request->isPost()) {
            $username = $this->request->post('username');
            $password = $this->request->post('password');
            $email = $this->request->post('email');
            $mobile = $this->request->post('mobile', '');
            $captcha = $this->request->post('captcha');
            $token = $this->request->post('__token__');
            $rule = [
                'username' => 'require|length:3,30',
                'password' => 'require|length:6,30',
                'email' => 'require|email',
                'mobile' => 'regex:/^1\d{10}$/',
                'captcha' => 'require|captcha',
                '__token__' => 'token',
            ];

            $msg = [
                'username.require' => 'Username can not be empty',
                'username.length' => 'Username must be 3 to 30 characters',
                'password.require' => 'Password can not be empty',
                'password.length' => 'Password must be 6 to 30 characters',
                'captcha.require' => 'Captcha can not be empty',
                'captcha.captcha' => 'Captcha is incorrect',
                'email' => 'Email is incorrect',
                'mobile' => 'Mobile is incorrect',
            ];
            $data = [
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'mobile' => $mobile,
                'captcha' => $captcha,
                '__token__' => $token,
            ];
            $validate = new Validate($rule, $msg);
            $result = $validate->check($data);
            if (!$result) {
                $this->error(__($validate->getError()), null, ['token' => $this->request->token()]);
            }
            if ($this->auth->register($username, $password, $email, $mobile)) {
                $synchtml = '';
                ////////////////同步到Ucenter////////////////
                if (defined('UC_STATUS') && UC_STATUS) {
                    $uc = new \addons\ucenter\library\client\Client();
                    $synchtml = $uc->uc_user_synregister($this->auth->id, $password);
                }
                $this->success(__('Sign up successful') . $synchtml, $url ? $url : url('user/index'));
            } else {
                $this->error($this->auth->getError(), null, ['token' => $this->request->token()]);
            }
        }
        //判断来源
        $referer = $this->request->server('HTTP_REFERER');
        if (!$url && (strtolower(parse_url($referer, PHP_URL_HOST)) == strtolower($this->request->host()))
            && !preg_match("/(user\/login|user\/register)/i", $referer)) {
            $url = $referer;
        }
        $this->view->assign('url', $url);
        $this->view->assign('title', __('Register'));
        return $this->view->fetch();
    }

    /**
     * 登录
     */
    public function login()
    {
        $url = $this->request->request('url');
        if ($this->auth->id) {
            $this->success(__('You\'ve logged in, do not login again'), $url ? $url : url('user/index'));
        }

        if ($this->request->isPost()) {
            $account = $this->request->post('account');
            $password = $this->request->post('password');
            $keeplogin = (int) $this->request->post('keeplogin');
            $token = $this->request->post('__token__');
            $rule = [
                'account' => 'require|length:3,50',
                'password' => 'require|length:6,30',
                '__token__' => 'token',
            ];

            $msg = [
                'account.require' => 'Account can not be empty',
                'account.length' => 'Account must be 3 to 50 characters',
                'password.require' => 'Password can not be empty',
                'password.length' => 'Password must be 6 to 30 characters',
            ];
            $data = [
                'account' => $account,
                'password' => $password,
                '__token__' => $token,
            ];
            $validate = new Validate($rule, $msg);
            $result = $validate->check($data);
            if (!$result) {
                $this->error(__($validate->getError()), null, ['token' => $this->request->token()]);
                return false;
            }
            if ($this->auth->login($account, $password)) {
                $this->success(__('Logged in successful'), url('user/index'));
            } else {
                $this->error($this->auth->getError(), null, ['token' => $this->request->token()]);
            }
        }
        //判断来源
        $referer = $this->request->server('HTTP_REFERER');
        if (!$url && (strtolower(parse_url($referer, PHP_URL_HOST)) == strtolower($this->request->host()))
            && !preg_match("/(user\/login|user\/register)/i", $referer)) {
            $url = $referer;
        }
        $this->view->assign('url', $url);
        $this->view->assign('title', __('Login'));
        return $this->view->fetch();
    }

    /**
     * 注销登录
     */
    public function logout()
    {
        //注销本站
        $this->auth->logout();
        $this->success(__('Logout successful'), url('index/index'));
    }

    /**
     * 个人信息
     */
    public function profile()
    {
        $this->view->assign('title', __('Profile'));
        return $this->view->fetch();
    }

    public function user()
    {
        //获取个人信息，并对特长的存储数据进行处理
        $data = $this->auth->getUser();
        $forte = explode(',', $data['forte']);
        $this->assign('forte', $forte);
        return view();
    }
    /**
     * 修改密码
     */

    public function revise()
    {

        if ($this->request->isPost()) {
            $data = input('post.');
            if (!empty($data['oldpassword'])) {
                $oldpassword = $this->request->post("oldpassword");
                $newpassword = $this->request->post("newpassword");
                $renewpassword = $this->request->post("renewpassword");
                $token = $this->request->post('__token__');
                $rule = [
                    'oldpassword' => 'require|length:6,30',
                    'newpassword' => 'require|length:6,30',
                    'renewpassword' => 'require|length:6,30|confirm:newpassword',
                    '__token__' => 'token',
                ];

                $msg = [
                ];
                $data = [
                    'oldpassword' => $oldpassword,
                    'newpassword' => $newpassword,
                    'renewpassword' => $renewpassword,
                    '__token__' => $token,
                ];
                $field = [
                    'oldpassword' => __('Old password'),
                    'newpassword' => __('New password'),
                    'renewpassword' => __('Renew password'),
                ];
                $validate = new Validate($rule, $msg, $field);
                $result = $validate->check($data);
                if (!$result) {
                    $this->error(__($validate->getError()), null, ['token' => $this->request->token()]);
                    return false;
                }

                $ret = $this->auth->changepwd($newpassword, $oldpassword);
                if ($ret) {
                    $synchtml = '';
                    ////////////////同步到Ucenter////////////////
                    if (defined('UC_STATUS') && UC_STATUS) {
                        $uc = new \addons\ucenter\library\client\Client();
                        $synchtml = $uc->uc_user_synlogout();
                    }
                    $this->success(__('Reset password successful') . $synchtml, url('user/index'));
                } else {
                    $this->error($this->auth->getError(), null, ['token' => $this->request->token()]);
                }
            } else {
                $data = input('post.');
                $users = new UserModel();
                //无需验证
                // $validate = \think\Loader::validate('User');
                // if (!$validate->scene('edit')->check($data)) {
                //     $this->error($validate->getError());
                // }
                $save = $users->update($data);
                if ($save) {
                    $this->success('修改个人信息成功!', url('user/revise'));
                } else {
                    $this->error('修改个人信息失败');
                }
            }

        }
        //获取个人信息
        //$data = $this->auth->getUser();
        //dump($data);die;
        return view();
    }
}
