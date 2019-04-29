<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\fastadmin\public/../application/index\view\index\about.html";i:1556351498;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/libs/index/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="/assets/css/index/main.css" />
    <link rel="stylesheet" href="/assets/libs/index/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/assets/libs/index/uikit/js/uikit.min.js"></script>
    <script src="/assets/libs/index/uikit/js/uikit-icons.min.js"></script>
    
    <title>联系我们</title>
</head>

<body>

        <header>
                <nav class="uk-navbar-container">
                    <div class="uk-container uk-container-expand">
                        <div uk-navbar>
                            <div class="uk-navbar-left">
                                <a class="uk-navbar-item uk-link-muted" href="<?php echo url('index/index/index'); ?>"><img alt="logo"
                                        class="uk-margin uk-margin-remove" width="50" height="50" src="/assets/img/min-logo.png" />
                                    <h2>首页</h2>
                                </a>
            
                                <div class="uk-navbar-center uk-visible@m">
                                    <ul class="uk-navbar-nav ">
                                        <li><a href="<?php echo url('index/user/login'); ?>" >登录</a></li>
                                        <li><a href="<?php echo url('index/user/register'); ?>">注册</a></li>
                                        <li><a href="<?php echo url('index/user/teach'); ?>">教程</a></li>
                                        <li><a href="<?php echo url('index/index/about'); ?>">联系我们</a></li>
                                    </ul>
                                </div>
            
                                <div class="uk-navbar-right">
                                    <div class="uk-navbar-item">
                                        <ul class="uk-grid-small" uk-grid>
                                            <li class="uk-hidden@m"><a class="uk-icon-button" href="#side-nav"
                                                    uk-icon="icon: menu" uk-toggle></a></li>
                                        </ul>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                </nav>
            </header>


    <div class="about3 uk-background-cover uk-flex uk-flex-center uk-flex-middle">
        <div class="uk-container  uk-container-small uk-container-center uk-text-center"
            uk-scrollspy="cls: uk-animation-scale-up; target: >; delay: 600">
            <img class="block-tit uk-responsive-height" src="">
            <h1 class="uk-margin-large-bottom" style="font-size:50px;">欢迎联系我们</h1>
            <p class="uk-margin-large-top">您可以通过以下方式联系到我们:</p>
            <div class="uk-grid">
                <div class="uk-width-1-3 uk-margin-medium-top">

                    <a href="https://github.com/HelloAny/404pro"><img src="/assets/img/GitHub.svg" alt=""></a>
                </div>
                <div class="uk-width-1-3">

                    <a href=""><img src="/assets/img/qq.svg" alt="" style="height:80%;"></a>
                </div>
                <div class="uk-width-1-3">

                    <a href=""><img src="/assets/img/vx.svg" alt="" style="height:80%;"></a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>