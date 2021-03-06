<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"D:\fastadmin\public/../application/index\view\user\login.html";i:1556545924;s:52:"D:\fastadmin\application\index\view\common\meta.html";i:1554886802;s:54:"D:\fastadmin\application\index\view\common\script.html";i:1554886386;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
<title>Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>
<meta name="author" content="FastAdmin">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--忘记密码的js-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
    <link href="/assets/css/user.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/img/min-logo.png"/>
    
    <link rel="stylesheet" href="/assets/css/index/login.css">
    <title>Document</title>
</head>

<body>

    <div id="content-container" class="container">
        <div class="user-section login-section">
            <div class="logon-tab clearfix"> <a class="active">登录</a> <a href="<?php echo url('user/register'); ?>">注册</a> </div>
            <div class="login-main">
                <form name="form" id="login-form" class="form-vertical" method="POST" action="<?php echo url('user/login'); ?>">
                    <input type="hidden" name="url" value="<?php echo $url; ?>" />
                    <?php echo token(); ?>
                    <div class="form-group">
                        <label class="control-label" for="account">账号</label>
                        <div class="controls">
                            <input class="form-control input-lg" id="account" type="text" name="account" value=""
                                data-rule="required" placeholder="<?php echo __('Email/Mobile/Username'); ?>" autocomplete="off">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">密码</label>
                        <div class="controls">
                            <input class="form-control input-lg" id="password" type="password" name="password"
                                data-rule="required;password" placeholder="<?php echo __('Password'); ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="checkbox" name="keeplogin" checked="checked" value="1">保持会话
                            <div class="pull-right"><a href="javascript:;" class="btn-forgot">忘记密码</a></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/html" id="resetpwdtpl">
        <form id="resetpwd-form" class="form-horizontal form-layer" method="POST" action="<?php echo url('api/user/resetpwd'); ?>">
            <div class="form-body">
                <input type="hidden" name="action" value="resetpwd" />
                <div class="form-group">
                    <label for="" class="control-label col-xs-12 col-sm-3"><?php echo __('Type'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <div class="radio">
                            <label for="type-email"><input id="type-email" checked="checked" name="type"
                                    data-send-url="<?php echo url('api/ems/send'); ?>"
                                    data-check-url="<?php echo url('api/validate/check_ems_correct'); ?>" type="radio"
                                    value="email"> <?php echo __('Reset password by email'); ?></label>
                            <label for="type-mobile"><input id="type-mobile" name="type" type="radio"
                                    data-send-url="<?php echo url('api/sms/send'); ?>"
                                    data-check-url="<?php echo url('api/validate/check_sms_correct'); ?>" value="mobile">
                                <?php echo __('Reset password by mobile'); ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-type="email">
                    <label for="email" class="control-label col-xs-12 col-sm-3"><?php echo __('Email'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" value=""
                            data-rule="required(#type-email:checked);email;remote(<?php echo url('api/validate/check_email_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)"
                            placeholder="">
                        <span class="msg-box"></span>
                    </div>
                </div>
                <div class="form-group hide" data-type="mobile">
                    <label for="mobile" class="control-label col-xs-12 col-sm-3"><?php echo __('Mobile'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input type="text" class="form-control" id="mobile" name="mobile" value=""
                            data-rule="required(#type-mobile:checked);mobile;remote(<?php echo url('api/validate/check_mobile_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)"
                            placeholder="">
                        <span class="msg-box"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="captcha" class="control-label col-xs-12 col-sm-3"><?php echo __('Captcha'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <div class="input-group">
                            <input type="text" name="captcha" class="form-control"
                                data-rule="required;length(4);integer[+];remote(<?php echo url('api/validate/check_ems_correct'); ?>, event=resetpwd, email:#email)" />
                            <span class="input-group-btn" style="padding:0;border:none;">
                                <a href="javascript:;" class="btn btn-info btn-captcha"
                                    data-url="<?php echo url('api/ems/send'); ?>" data-type="email" data-event="resetpwd"><?php echo __('Send verification code'); ?></a>
                            </span>
                        </div>
                        <span class="msg-box"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="newpassword" class="control-label col-xs-12 col-sm-3"><?php echo __('New password'); ?>:</label>
                    <div class="col-xs-12 col-sm-8">
                        <input type="password" class="form-control" id="newpassword" name="newpassword" value=""
                            data-rule="required;password" placeholder="">
                        <span class="msg-box"></span>
                    </div>
                </div>
            </div>
            <div class="form-group form-footer">
                <label class="control-label col-xs-12 col-sm-3"></label>
                <div class="col-xs-12 col-sm-8">
                    <button type="submit" class="btn btn-md btn-info"><?php echo __('Ok'); ?></button>
                </div>
            </div>
        </form>
    </script>



    <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>

</body>

</html>