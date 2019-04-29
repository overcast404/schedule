<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\fastadmin\public/../application/index\view\pb\details.html";i:1556544720;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>订阅号详情</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/assets/libs/index/avicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <a href="<?php echo url('pb/board'); ?>" class="btn btn-white btn-xs pull-right">返回</a>
                                    <h2><?php echo $pbres['name']; ?></h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <dd><span class="label label-primary">
                                        <?php if($pbres['status'] == 0): ?>
                                        正常
                                        <?php else: ?>
                                        异常
                                        <?php endif; ?>
                                    </span>

                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">

                                    <dt>负责人：</dt>
                                    <dd><?php echo $pbres['admin']; ?></dd>
                                    <dt>活动数：</dt>
                                    <dd><?php echo $pbres['count']; ?></dd>
                                    <dt>创建于：</dt>
                                    <dd><?php echo date("Y年m月d日 H:i:s",$pbres['time']); ?></dd>
                                    <dt>订阅号：</dt>
                                    <dd><?php echo $pbres['number']; ?></dd>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">

                                    <dt>最后更新：</dt>
                                    <dd>
                                            <?php if($pbres['newtime'] == '暂无'): ?>
                                            暂无
                                            <?php else: ?>
                                            <?php echo date("Y年m月d日 H:i:s",$pbres['newtime']); endif; ?></dd>

                                    <dt>管理员：</dt>
                                    <dd class="project-people">
                                            <img alt="订阅号头像" class="img-circle" src="<?php echo $pbres['thumb']; ?>">
                                    </dd>
                                    <dt></dt>
                                    <dd><button class=" btn btn-danger btn-sm" style="margin-bottom: -70px;">退出</button></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="project_detail.html#tab-1"
                                                        data-toggle="tab">订阅号消息</a>
                                                </li>
                                                <li class=""><a href="project_detail.html#tab-2"
                                                        data-toggle="tab">活动介绍</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <?php if(is_array($pbnew) || $pbnew instanceof \think\Collection || $pbnew instanceof \think\Paginator): $i = 0; $__LIST__ = $pbnew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pb): $mod = ($i % 2 );++$i;?>
                                                    <div class="feed-element">
                                                        <!--加个循环-->
                                                        <div class="media-body ">

                                                            <strong><?php echo $pb['author']; ?></strong>.

                                                            <small class="text-muted"><?php echo date("Y年m月d日 H:i:s",$pb['time']); ?></small>
                                                            <p></p>
                                                            <div class="well">
                                                                <?php echo $pb['content']; ?>
                                                            </div>
                                                            <div class="pull-right">
                                                                <a class="btn btn-xs btn-white"><i
                                                                        class="fa fa-thumbs-up"></i> 赞 </a>
                                                                <a class="btn btn-xs btn-primary"><i
                                                                        class="fa fa-pencil"></i> 评论</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; endif; else: echo "" ;endif; if($pbres['admin'] == $user['nickname']): ?>
                                                    <div class="social-comment">
                                                        <form method="post" class="form-horizontal" action="<?php echo url('pb/details'); ?>">
                                                            <input type="hidden"name="id"value="<?php echo $user['id']; ?>">
                                                            <input type="hidden"name="pbid"value="<?php echo $pbres['id']; ?>">
                                                        <div class="media-body">
                                                            <textarea class="form-control"name="content" id="content"
                                                                placeholder=""></textarea>
                                                            <button type="submit" class="btn btn-primary col-sm-2 pull-right btn-xs"
                                                                style="margin-top: 3px;"><a href="#"><i
                                                                        class="fa fa-paper-plane"
                                                                        style="color:white"></i>
                                                                </a>发送</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <?php endif; ?>

                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab-2">

                                                <div class="wrapper wrapper-content  animated fadeInRight blog">
                                                    <div class="row">
                                                        <?php if(is_array($pbevent) || $pbevent instanceof \think\Collection || $pbevent instanceof \think\Paginator): $i = 0; $__LIST__ = $pbevent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$event): $mod = ($i % 2 );++$i;?>
                                                        <div class="col-lg-4">
                                                            <div class="ibox">
                                                                <div class="ibox-content">
                                                                    <a href="<?php echo url('pb/article',array('eventid'=>$event['id'])); ?>" class="btn-link">
                                                                        <h2>
                                                                            <?php echo $event['title']; ?>
                                                                        </h2>
                                                                    </a>
                                                                    <div class="small m-b-xs">
                                                                        <strong><?php echo $event['author']; ?></strong>
                                                                        <span>  <i class="fa fa-eye"> </i> <?php echo $event['click']; ?></span>
                                                                        <div class="text-muted"><i
                                                                                class="fa fa-clock-o"></i><?php echo $event['time']; ?></div>
                                                                    </div>
                                                                    <br>
                                                                    <p>
                                                                        <?php echo $event['content']; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        
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

    </div>

    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <script>
        $(document).ready(function () {

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>