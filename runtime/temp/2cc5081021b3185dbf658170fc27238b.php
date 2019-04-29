<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\fastadmin\public/../application/index\view\user\user.html";i:1555867458;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>个人资料</title>

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="<?php echo $user['avatar']; ?>"
                                style="height: 70px;width: 70px;margin: auto;">
                        </div>
                        <div class="ibox-content profile-content">

                            <h4><strong>用户名&nbsp;:&nbsp;</strong><span style="margin: auto"><?php echo $user['username']; ?></span></h4>
                            <h4><strong>姓名&nbsp;:&nbsp;</strong><span style="margin: auto"><?php echo $user['nickname']; ?></span></h4>
                            <h4><strong>学院&nbsp;:&nbsp;</strong>
                                <?php foreach ($collegeres as $k2 => $v2):if($v2['id'] == $user['college']): ?>
                                <span><?php echo $v2['collegename']; ?></span>
                                <?php endif; endforeach;?>
                            </h4>
                            

                            <h4><strong>学号&nbsp;:&nbsp;</strong>
                                <span><?php echo $user['number']; ?></span>
                            </h4>
                            <br>
                            <h4><strong>联系方式&nbsp;:&nbsp;</strong>
                                <p><a href=""><i class="fa fa-qq" style="color: grey"></i></a><?php echo $user['qq']; ?></p>
                                <p><a href=""><i class="fa fa-whatsapp" style="color: grey"></i></a><?php echo $user['mobile']; ?></p>
                            </h4>

                            <h4><strong>个人特长:</strong></h4>
                            <p>
                                    <?php foreach ($forte as $k2 => $v2):?>
                                    <span class="label label-primary"><?php echo $v2; ?></span>
                                    <?php endforeach;?>
                            </p>

                            <br>


                            <h3><strong>关于我:</strong> </h3>

                            <p>
                                <?php echo $user['bio']; ?>
                            </p>

                            <div class="user-button">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                class="fa fa-envelope"></i> <a href=""
                                                style="color:white">写信</a></button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                class="fa fa-coffee"></i> <a href=""
                                                style="color:white">微空间</a></button>
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


    <!-- Peity -->
    <script src="/assets/libs/index/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="/assets/libs/index/js/demo/peity-demo.js"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>