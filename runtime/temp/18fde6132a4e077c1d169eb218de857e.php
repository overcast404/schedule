<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\fastadmin\public/../application/index\view\index\home.html";i:1554861758;s:51:"D:\fastadmin\application\index\view\public\top.html";i:1554859915;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TimeForYou</title>
    <link rel="stylesheet" href="/assets/libs/index/uikit/css/uikit.min.css" />
    <link rel="stylesheet" href="/assets/css/index/main.css" />
    <link rel="stylesheet" href="/assets/libs/index/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/assets/libs/index/uikit/js/uikit.min.js"></script>
    <script src="/assets/libs/index/uikit/js/uikit-icons.min.js"></script>
</head>

<body>
    <header>
    <nav class="uk-navbar-container">
        <div class="uk-container uk-container-expand">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-link-muted" href="<?php echo url('index/index/home'); ?>"><img alt="logo"
                            class="uk-margin uk-margin-remove" width="50" height="50" src="/assets/img/min-logo.png" />
                        <h2>首页</h2>
                    </a>

                    <div class="uk-navbar-center uk-visible@m">
                        <ul class="uk-navbar-nav ">
                            <li><a href="<?php echo url('admin/index/login'); ?>" class="btn btn-warning btn-xl page-scroll">登录</a></li>
                            <li><a href="">注册</a></li>
                            <li><a href="">教程</a></li>
                            <li><a href="">联系我们</a></li>
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



    <div id="side-nav" class="side" uk-offcanvas>
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-nav-default">
                <li class="uk-nav-header c-5">主导航</li>
                <li><br></li>
                <li><a href="">
                        <h4>登录</h4>
                    </a></li>
                <li><a href="">
                        <h4>注册</h4>
                    </a></li>
                <li><a href="">
                        <h4>教程</h4>
                    </a></li>
                <li><a href="">
                        <h4>关于我们</h4>
                    </a></li>
                <li><a href="">
                        <h4>服务与支持</h4>
                    </a></li>
            </ul>
        </div>
    </div>


    <div class="wrap">
        <!-- banner -->

        <div class="js-slideshow-animation" uk-slideshow="ratio: 7:3; min-height: 300; max-height: 800; autoplay: true">

            <div class="uk-position-relative uk-visible-toggle uk-light">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="/assets/img/3.jpg" alt="" uk-cover>
                        <div class="uk-position-center uk-position-medium uk-text-center">
                            <h1 class="uk-heading-primary big" uk-slideshow-parallax="y: -100,0,0; opacity: 1,1,0">
                                时间管理系统
                            </h1>
                            <p class="uk-text-lead big-s" uk-slideshow-parallax="y: 100,0,0; opacity: 1,1,0"> 帮助您更好地管理时间
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/img/4.jpg" alt="" uk-cover>
                        <div class="uk-position-center uk-position-medium uk-text-center">
                            <h1 class="uk-heading-primary big" uk-slideshow-parallax="x: 200,-200">团队管理</h1>
                            <p class="h2 uk-text-lead big-s" uk-slideshow-parallax="x: 400,-400">增强团队协作能力</p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/img/5.jpg" alt="" uk-cover>
                        <div class="uk-position-center uk-position-medium uk-text-center">
                            <h1 class="uk-heading-primary big" uk-slideshow-parallax="x: 200,-200">团子</h1>
                            <h2 uk-slideshow-parallax="x: 300,-300">Time For You</h2>
                            <p class="uk-text-lead big-s" uk-slideshow-parallax="x: 400,-400">带给您更好地生活学习体验</p>
                        </div>
                    </li>
                </ul>

                <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover"
                    uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" uk-slidenav-next
                    uk-slideshow-item="next"></a>

                <div class="uk-position-bottom-center uk-position-medium">
                    <ul class="uk-dotnav ">
                        <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                        <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                        <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                    </ul>
                </div>

            </div>

        </div>
        <!--这段代码-->
        <div class="about uk-background-cover uk-flex uk-flex-center uk-flex-middle" >
            <div class="uk-container  uk-container-small uk-container-center uk-text-center"
                uk-scrollspy="cls: uk-animation-scale-up; target: >h3 ,h2, p; delay: 600">
                <img class="block-tit uk-responsive-height" src="/assets/img/aboutus.svg">
                <h3>由404NF团队打造 给您带来更好地时间管理工具</h3>
                <h2>精准控制时间 填补时间空隙</h2>
                <p>更棒的团队管理体验 更好的视图界面</p>
                <p><a href="<?php echo url('index/index/about'); ?>" class="uk-button uk-button-primary uk-button-large">查看详细</a></p>
            </div>
        </div>






        <div class="about1 uk-background-cover uk-flex uk-flex-center uk-flex-middle">
            <div class=" uk-container uk-text-center"
                uk-scrollspy="cls: uk-animation-scale-up; target: > h1, p,div; delay: 300">
                <h1 class="uk-heading-primary uk-margin-xlarge-top" uk-slideshow-parallax="x: 200,-200">掌控自己的每分每秒
                    <p class="uk-text-lead big-s uk-margin-xlarge">整理时间 规划自己</p>
                    <div class="uk-grid ">

                    </div>

                </h1>

                <div class="uk-margin-xlarge-left uk-margin-xlarge-bottom">
                    <div class="uk-margin-xlarge-left big-s">
                        <img src="/assets/img/" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- customer -->
        <div class="customer uk-container uk-container-center uk-text-center uk-padding-large"
            uk-scrollspy="cls: uk-animation-scale-up; target: > p; delay: 800">
            <p><img class="block-tit" src="/assets/img/logo-b.png"></p>
            <p><img src="/assets/img/about-bg1.jpg"></p>
        </div>






        <!-- footer -->
        <div class="footer uk-background-secondary uk-light uk-padding uk-panel">
            <div class="uk-container uk-container-center uk-text-center uk-padding-large">
                <div class="uk-first-column">

                    <div class="uk-grid-small uk-child-width-1-4@m uk-grid" uk-grid="">
                        <div>
                            <div class="uk-panel">
                                <ul class="uk-list uk-link-muted in">
                                    <li>
                                        <h1>项目简介</h1>
                                    </li>
                                    <li><a href="#">教程</a></li>
                                    <li><a href="#">介绍</a></li>
                                    <li><a href="#">项目起因</a></li>
                                    <li><a href="#">项目意义</a></li>

                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="uk-panel">
                                <ul class="uk-list  uk-link-muted in">
                                    <li>
                                        <h1>404NF</h1>
                                    </li>
                                    <li><a href="#">关于我们</a></li>
                                    <li><a href="#">加入我们</a></li>
                                    <li><a href="#">联系我们</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="uk-panel">
                                <ul class="uk-list uk-link-muted in">
                                    <li>
                                        <h1>友情链接</h1>
                                    </li>
                                    <li><a href="#">浙江科技学院</a></li>
                                    <li><a href="#">信息与电子工程学院</a></li>
                                    <li><a href="#">软件工程专业</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="uk-position-bottom foot">
                        <div>Copyright© 2019-2019 | 404NF .AllRightsReserved</div>
                        <div>ICP备19006283号</div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>