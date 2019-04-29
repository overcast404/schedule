<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\fastadmin\public/../application/index\view\pb\board.html";i:1556295606;}*/ ?>
<!DOCTYPE html>


<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>订阅号列表</title>

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <!--第一列-->
            <?php if(is_array($pbres) || $pbres instanceof \think\Collection || $pbres instanceof \think\Paginator): $i = 0; $__LIST__ = $pbres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pb): $mod = ($i % 2 );++$i;?>
            <div class="col-sm-4">



                <div class="ibox">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right"></span>
                        <h5><a href="<?php echo url('pb/details',array('pbid'=>$pb['id'])); ?>"><?php echo $pb['name']; ?></a></h5>
                    </div>
                    <div class="ibox-content">
                        <div class="team-members">
                            <h3>负责人:<?php echo $pb['admin']; ?></h3>
                            <a href="#"><img alt="member" class="img-circle" src="<?php echo $pb['thumb']; ?>">
                            </a>

                        </div>
                        <h4>订阅号简介</h4>
                        <p>
                            <?php echo $pb['desc']; ?>
                        </p>
                        <hr>
                        <div class="row  m-t-sm">
                            <div class="col-sm-4">
                                <div class="font-bold text-center">所属类型</div>
                                <p class="text-center"><?php echo $pb['cateid']; ?></p>
                            </div>
                            <div class="col-sm-4">
                                <div class="font-bold text-center">活动数</div>
                                <p class="text-center"><?php echo $pb['count']; ?></p>
                            </div>
                            <!--未作-->
                            <div class="col-sm-4">
                                <div class="font-bold text-center">公告数</div>
                                <p class="text-center"><?php echo $pb['news']; ?></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php echo $pbres->render(); ?>
        </div>
    </div>


    </div>
    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>