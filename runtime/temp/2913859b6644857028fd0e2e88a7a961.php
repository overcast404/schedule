<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\fastadmin\public/../application/index\view\team\examine.html";i:1555735713;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>团队用户管理</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">
                        <span class="text-muted small pull-right">最后更新：<i class="fa fa-clock-o"></i> 2018-09-01
                            12:00</span>
                        <h2>团队用户管理</h2>
                        <p>
                            选择团队
                        </p>
                        <div class="input-group col-sm-12">
                            <select class="form-control" name="" id="">
                                <option value="">团队一</option>
                                <option value="">团队二</option>
                                <option value="">团队三</option>
                            </select>
                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted">8人待审核</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> 审核</a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> 成员</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="client-avatar"><img alt="image" src="img/a2.jpg">
                                                        </td>
                                                        <td><a data-toggle="tab" href="#contact-1"
                                                                class="client-link">岑岗</a>
                                                        </td>
                                                        <td> 我想要加入你们？</td>

                                                        <td class="client-status"><span
                                                                class="label label-warning">待审核</span>
                                                        </td>
                                                    </tr>

                                                    <td class="client-avatar">
                                                        <a href=""><img alt="image" src="img/a4.jpg">
                                                        </a>
                                                    </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">朱润锴
                                                        </a>
                                                    </td>
                                                    <td>大佬</td>

                                                    <td class="client-status"><span
                                                            class="label label-warning">待审核</span>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href=""><img alt="image" src="img/a5.jpg">
                                                            </a>
                                                        </td>
                                                        <td><a data-toggle="tab" href="#contact-1"
                                                                class="client-link">沈梦婷</a>
                                                        </td>
                                                        <td>🌞</td>

                                                        <td class="client-status"><span
                                                                class="label label-warning">待审核</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href=""><img alt="image" src="img/a2.jpg">
                                                            </a>
                                                        </td>
                                                        <td><a data-toggle="tab" href="#contact-2"
                                                                class="client-link">杨伟凯</a>
                                                        </td>
                                                        <td> 我杨伟我自豪</td>

                                                        <td class="client-status"><span
                                                                class="label label-warning">待审核</span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>


                                                    <tr>
                                                        <td><a data-toggle="tab" href="#company-3" class="client-link">
                                                                唐泽宇</a>
                                                        </td>
                                                        <td>策划</td>
                                                        <td><i class="fa fa-flag"></i>队长 </td>
                                                        <td class="client-status"><span
                                                                class="label label-primary">已验证</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-sm">退出</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a data-toggle="tab" href="#company-2"
                                                                class="client-link">徐佳凯</a>
                                                        </td>
                                                        <td>后端</td>
                                                        <td><i class="fa fa-user"></i>组员</td>
                                                        <td class="client-status"><span
                                                                class="label label-primary">已验证</span>
                                                        </td>
                                                        <td><button class="btn btn-danger btn-sm">赶走</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a data-toggle="tab" href="#company-2"
                                                                class="client-link">艾依宁</a>
                                                        </td>
                                                        <td>前端</td>
                                                        <td><i class="fa fa-user"></i>组员</td>
                                                        <td class="client-status"><span
                                                                class="label label-primary">已验证</span>
                                                        </td>
                                                        <td><button class="btn btn-danger btn-sm">赶走</button></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>

    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>

    <script src="/assets/libs/index/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>

    <script>
        $(function () {
            $('.full-height-scroll').slimScroll({
                height: '100%'
            });
        });
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>