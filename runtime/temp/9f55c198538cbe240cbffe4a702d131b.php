<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\fastadmin\public/../application/index\view\user\index.html";i:1556547283;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>主页</title>

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    
    <link rel="shortcut icon" href="/assets/img/min-logo.png"/>
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
        
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">
    
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="<?php echo $user['avatar']; ?>"
                                    style="height: 70px;width: 70px;" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <!--用户名-->
                                    <span class="block m-t-xs"><strong class="font-bold"><?php echo $user['username']; ?></strong></span>
                                    <!--身份-->
                                    <span class="text-muted text-xs block"><?php if($user['group_id'] == 1): ?>个人管理<?php endif; ?><b class="caret"></b></span>
                                </span>
                            </a>
                            <!--个人信息修改-->
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="<?php echo url('user/user'); ?>">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('user/revise'); ?>">编辑资料</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('mailbox/board'); ?>">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo url('user/logout'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--主页-->
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">我的日程表</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo url('calender/main'); ?>" data-index="0">总日程表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo url('calender/team'); ?>">团队日程表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo url('calender/pb'); ?>">订阅号日程表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo url('calender/labelwall'); ?>">查看详情</a>
                            </li>
                        </ul>

                    </li>
                    <!--管理界面-->
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar-plus-o"></i>
                            <span class="nav-label">日程管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo url('form/user'); ?>">添加日程</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo url('form/team'); ?>">团队日程管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo url('form/pb'); ?>">订阅号日程管理</a>
                            </li>
                        </ul>
                    </li>

                    <!--团队-->
                    <li>
                        <a href="#"> <i class="fa fa-users"></i><span class="nav-label">团队管理</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('team/board'); ?>">我加入的团队</a>
                            </li>

                            <li><a class="J_menuItem" href="<?php echo url('team/myboard'); ?>">我创建的团队</a>
                            </li>

                        </ul>
                    </li>
                    <!--订阅号管理-->
                    <li>
                        <a href="#">
                            <i class="fa fa-comments-o"></i>
                            <span class="nav-label">订阅号管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('pb/board'); ?>">关注的订阅号列表</a>
                            </li>
                            <li>
                            <li><a class="J_menuItem" href="<?php echo url('pb/myboard'); ?>">我的订阅号</a>
                            </li>
                                
                            </li>
                        </ul>
                    </li>
                    <!--我的订阅号-->
                    <li>
                        <a href="#"><i class="fa fa-building-o"></i><span class="nav-label">创建</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('team/found'); ?>">创建团队</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('pb/found'); ?>">创建订阅号</a>
                            </li>

                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-plus"></i><span class="nav-label">加入/关注</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo url('team/join'); ?>">加入团队</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo url('pb/join'); ?>">关注订阅号</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                            <a href="#"><i class="fa fa-tripadvisor"></i><span class="nav-label">发现</span><span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="J_menuItem" href="<?php echo url('personality/index'); ?>">个性发布</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('activity/index'); ?>">消息广场</a>
                                </li>
                            </ul>
                        </li>
                        <!--信箱-->
                        <!--未做-->
                        <li>
                            <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">我的消息</span><span
                                    class="label label-warning pull-right">数量</span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="J_menuItem" href="<?php echo url('mailbox/board'); ?>">收件箱</a>
                                </li>
                                <li><a class="J_menuItem" href="<?php echo url('mailbox/write'); ?>">写信</a>
                                </li>
                            </ul>
                        </li>
                </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary "
                                href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown hidden-xs">
                                    <a class="right-sidebar-toggle" aria-expanded="false">
                                        <i class="fa fa-tasks"></i> 更多
                                    </a>
                                </li>
    
                        </ul>
                    </nav>
                </div>
                <div class="row content-tabs">
                    <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                    </button>
                    <nav class="page-tabs J_menuTabs">
                        <div class="page-tabs-content">
                            <a href="javascript:;" class="active J_menuTab" data-id="calendar-main.html">首页</a>
                        </div>
                    </nav>
                    <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                    </button>
                    <div class="btn-group roll-nav roll-right">
                        <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>
    
                        </button>
                        <ul role="menu" class="dropdown-menu dropdown-menu-right">
                            <li class="J_tabShowActive"><a>定位当前选项卡</a>
                            </li>
                            <li class="divider"></li>
                            <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                            </li>
                            <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo url('user/logout'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
                </div>
                <div class="row J_mainContent" id="content-main">
                    <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo url('calender/main'); ?>"
                        frameborder="0" data-id="calendar-main.html" seamless></iframe>
                </div>
                <div class="footer">
                    <div class="pull-right">&copy; 2014-2017 <a href="http://www.zi-han.net/" target="_blank">zihan's
                            blog</a>
                    </div>
                </div>
            </div>
            <!--右侧部分结束-->
            <!--右侧边栏开始-->
            <div id="right-sidebar">
                <div class="sidebar-container">
    
                    <ul class="nav nav-tabs navs-3">
    
                        <li class="active">
                            <a data-toggle="tab" href="#tab-1">
                                <i class="fa fa-gear"></i> 主题
                            </a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#tab-2">
                                通知
                            </a>
                        </li>
                        <li><a data-toggle="tab" href="#tab-3">
                                项目进度
                            </a>
                        </li>
                    </ul>
    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="sidebar-title">
                                <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                                <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                            </div>
                            <div class="skin-setttings">
                                <div class="title">主题设置</div>
                                <div class="setings-item">
                                    <span>收起左侧菜单</span>
                                    <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                                id="collapsemenu">
                                            <label class="onoffswitch-label" for="collapsemenu">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setings-item">
                                    <span>固定顶部</span>
    
                                    <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox"
                                                id="fixednavbar">
                                            <label class="onoffswitch-label" for="fixednavbar">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setings-item">
                                    <span>
                                        固定宽度
                                    </span>
    
                                    <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox"
                                                id="boxedlayout">
                                            <label class="onoffswitch-label" for="boxedlayout">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">皮肤选择</div>
                                <div class="setings-item default-skin nb">
                                    <span class="skin-name ">
                                        <a href="#" class="s-skin-0">
                                            默认皮肤
                                        </a>
                                    </span>
                                </div>
                                <div class="setings-item blue-skin nb">
                                    <span class="skin-name ">
                                        <a href="#" class="s-skin-1">
                                            蓝色主题
                                        </a>
                                    </span>
                                </div>
                                <div class="setings-item yellow-skin nb">
                                    <span class="skin-name ">
                                        <a href="#" class="s-skin-3">
                                            黄色/紫色主题
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
    
                            <div class="sidebar-title">
                                <h3> <i class="fa fa-comments-o"></i> 最新通知</h3>
                                <small><i class="fa fa-tim"></i> 您当前有n条未读信息</small>
                            </div>
    
                            <div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            姓名
                                        </div>
                                        <div class="media-body">
                                           内容
                                            <br>
                                            <small class="text-muted">星期一 8:37</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                        </div>
                        <div id="tab-3" class="tab-pane">
    
                            <div class="sidebar-title">
                                <h3> <i class="fa fa-cube"></i> 最新任务</h3>
                                <small><i class="fa fa-tim"></i> 您当前有n个任务</small>
                            </div>
    
                            <ul class="sidebar-list">
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9小时以后</div>
                                        <h4>此处填发布内容</h4> 
    
                                        <div class="small">来自:<span></span>团队或订阅号</div>
                                        <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                                    </a>
                                </li>
                            </ul>
    
                        </div>
                    </div>
    
                </div>
            </div>
            <!--右侧边栏结束-->
            <!--mini聊天窗口开始-->
    
            <!--mini聊天窗口结束-->
        </div>

    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/assets/libs/index/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/assets/libs/index/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/libs/index/js/plugins/layer/layer.min.js"></script>
    <script src="/assets/libs/index/js/jquery-ui.custom.min.js"></script>

    <!-- 自定义js -->
    <script src="/assets/libs/index/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="/assets/libs/index/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="/assets/libs/index/js/plugins/pace/pace.min.js"></script>

</body>

</html>