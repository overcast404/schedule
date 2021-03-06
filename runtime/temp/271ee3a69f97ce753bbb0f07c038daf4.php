<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\fastadmin\public/../application/index\view\index\teach.html";i:1556295605;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>产品教程</title>
        <link rel="stylesheet" href="/assets/libs/index/uikit/css/uikit.min.css" />
        <link rel="stylesheet" href="/assets/css/index/main.css" /> 
        <link rel="stylesheet" href="/assets/libs/index/css/styles.css">
        <script src="/assets/libs/index/jquery-3.3.1.min.js"></script>
        <script src="/assets/libs/index/uikit/js/uikit.js"></script>
        <script src="/assets/libs/index/uikit/js/uikit-icons.min.js"></script>
        <script src="/assets/libs/index/js/smooth-scroll.min.js"></script>
        <script src="/assets/libs/index/js/gumshoe.min.js"></script>
        <script src="/assets/libs/index/js/anime.min.js"></script>
    </head>

    <body onhashchange="getHash()">

        <header>  
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-expand">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-link-muted" href="<?php echo url('index/index/index'); ?>"><img alt="logo"
                              class="uk-margin uk-margin-remove" width="50" height="50" src="/assets/img/min-logo.png" />
                                 <h2>首页</h2>
                            </a>                      
                        </div>
                        <div class="uk-navbar-center uk-visible@m">
                            <ul class="uk-navbar-nav ">
                                <ul class="uk-navbar-nav ">
                                    <li><a href="<?php echo url('index/user/login'); ?>" >登录</a></li>
                                    <li><a href="<?php echo url('index/user/register'); ?>">注册</a></li>
                                    <li><a href="<?php echo url('index/teach'); ?>">教程</a></li>
                                    <li><a href="<?php echo url('index/index/about'); ?>">联系我们</a></li>
                                </ul>
                            </ul> 
                            <header class="page-header" data-gumshoe-header data-scroll-header>
                            <div class="page-nav">
                                <!-- Nav and links -->
                                <!-- The [data-gumshoe] attribute indicates the navigation list that Gumshoe should watch -->
                                <nav data-gumshoe>
                                    <!-- Turn anchor links into Smooth Scroll links by adding the [data-scroll] data attribute -->
                                    <a data-scroll href="#eenie">使用概述</a>
                                    <a data-scroll href="#meanie">开始</a>
                                    <a data-scroll href="#minnie">日历</a>
                                    <a data-scroll href="#moe">团队</a>
                                    <a data-scroll href="#leon">订阅号</a>
                                    <a data-scroll href="#mail">信箱</a>
                                    <a data-scroll href="#mail">查询</a>
                                    <a data-scroll href="#self">个人信息</a>
                                </nav>
                                <!-- Arrows -->
                                <a class="nav-arrow nav-arrow-left"><svg class="icon"><use xlink:href="#arrow-up"/></svg></a>
                                <a class="nav-arrow nav-arrow-right"><svg class="icon"><use xlink:href="#arrow-down"/></svg></a>
                            </div>
                          </header>
                        </div>

                        <div class="uk-navbar-right">
                            <div class="uk-navbar-item">
                                <ul class="uk-grid-small" uk-grid>
                                    <li class="uk-hidden@m"><a class="uk-icon-button" href="#side-nav" uk-icon="icon: menu" uk-toggle></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </header>


        <!-- side-menu -->
        <div id="side-nav" class="side" uk-offcanvas>
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-nav-header c-5">主导航</li>
                    <li><br></li>
                    <li><a href="<?php echo url('index/user/login'); ?>">
                            <h4>登录</h4>
                        </a></li>
                    <li><a href="<?php echo url('index/user/register'); ?>">
                            <h4>注册</h4>
                        </a></li>
                    <li><a href="<?php echo url('index/teach'); ?>">
                            <h4>教程</h4>
                        </a></li>
                    <li><a href="<?php echo url('index/index/about'); ?>">
                            <h4>关于我们</h4>
                        </a></li>
                    <li><a href="">
                            <h4>服务与支持</h4>
                        </a></li>
                </ul>
            </div>
        </div>



        <!-- content -->
        <!-- <div class="wrap"> -->

            <!-- banner -->
            <!-- <div class="banner-dev uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle uk-height-viewport uk-contrast uk-light">
                <div class="uk-container uk-container-center">
                    <section class="uk-grid uk-grid-match" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1 uk-row-first">
                            <div class="uk-panel  uk-text-center ">                                        
                                <h1 class="uk-h1 uk-margin-large-bottom">产品教程<br class="uk-hidden-small">Course</h1>
                            </div>
                        </div>
                    </section>
                </div>
            </div> -->


            <!-- servies -->



            <div class="servies">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <symbol id="arrow-up" viewBox="0 0 23.252003 12.28045"><path class="icon-path" d="m0.50503 11.544 10.967-11.044 11.275 11.275"></path></symbol>
                  <symbol id="arrow-down" viewBox="0 0 23.252003 12.28045"><path class="icon-path" d="m22.747 0.73674-10.967 11.043-11.275-11.275"></path></symbol>
              </svg>
                <section>
                    <!-- Fixed header -->
                    <!-- The [data-gumshoe-header] attribute tell Gumshoe that automatically offset it's calculations based on the header's height -->
                    <!-- The [data-scroll-header] attribute do the same thing but for Smooth Scroll calculations -->
                    
                       
                 
                    <!-- Page content -->
                    <main class="page-content">
                        <section>
                            <h2 id="eenie"><a data-scroll href="#eenie">使用概述</a></h2>
                            <h3><b>日程管理系统</b></h3>
                            <p>本产品是一款针对在校学生与教师使用的多功能时间事物管理系统，特点如下:</p>
                            <p>1.学生合理规划时间信息</p>
                            <p>2.消息的及时送达</p>
                            <p>3.教师对学生的事物管理</p>
                            <p>4.团队时间的合理分配</p>    
                            <p>5.校园信息的通知</p>            
                            <h2 id="meanie"><a data-scroll href="#meanie">开始</a></h2>
                            <p>使用前请先注册好账号，我们注册账号的方式非常简单，点击页面上方的<a href=""><i>注册</i></a></p>
                            <p>注册好后你就可以开始使用了！</p>
                            <img src="/assets/img/function.png" alt="">
                            <h2 id="minnie"><a data-scroll href="#minnie">日历功能(calendar)</a></h2>
                            <p>这是系统的主要功能，基于<b>FullCalendar</b>(V1)插件开发而成，能够最大程度的增加事务管理的扩展性，便于多任务协同进行。</p>
                            <p></p>

                            <p>其下还分出两个小日历，便于查看团队和订阅号的时间</p>
                            <p>团队日程表</p>

                            <p>订阅号日程表</p>
                
                            <h2 id="moe"><a data-scroll href="#moe">团队</a></h2>
                            <p>团队系统是核心功能之一，你可以在这里加入或者创建团队，通过这种方式，你可以在团队活动中更好地管理。</p>

                            <p>在团队信息管理界面，你可以发布任务</p>
                            <p>在团队面板，你可以查看到你已经加入的团队，并可以点击查看详情。</p>
                            <p>详情界面，你可以与团队内的其他成员进行交流，并可以查看任务，如果这是您创建的团队，您可以进行团队信息管理</p>
                            <p>在创界界面你可以轻松的创建团队</p>
                            <h2 id="leon"><a data-scroll href="#leon">订阅号</a></h2>
                            <p>在这里</p>
                            <h2 id="mail"><a data-scroll href="#mail">信箱</a></h2>
                            <p></p>
                            <h2 id="find"><a data-scroll href="#find">查询</a></h2>
                            <p></p>
                            <h2 id="self"><a data-scroll href="#self">个人信息</a></h2>
                            <p></p>
                        </section>
                    </main>
                </section>
                </div>

              
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




        </div>



    <script src="/assets/libs/index/js/scripts.js"></script>

    <script>

        // UIkit.util.on('#js-animation-switcher', 'change', function () {
        //     var value = this.value;
        //     UIkit.util.$$('.js-slideshow-animation').forEach(function (slideshow) { UIkit.util.attr(slideshow, 'animation', value); });
        // });

     function getHash(){
       console.log('demo');
				var hash = window.location.hash;
				switch(hash){
					case '#A':
						$('.A').load('./text3_A.html');
						console.log('当前A页面'); break;
					case '#B':
						$('.B').load('./text3_B.html');
						console.log('当前B页面'); break;
				}
			}

    </script>
    </body>
</html>
