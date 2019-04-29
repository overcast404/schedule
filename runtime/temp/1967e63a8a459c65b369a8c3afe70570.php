<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\fastadmin\public/../application/index\view\mailbox\board.html";i:1556242110;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>收件箱</title>


    <link rel="shortcut icon" href="libs/favicon.ico"> <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <a class="btn btn-block btn-primary compose-mail" href="<?php echo url('mailbox/write'); ?>">写信</a>
                            <div class="space-25"></div>
                            <h5>文件夹</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li>
                                    <a href="<?php echo url('mailbox/board'); ?>"> <i class="fa fa-inbox "></i> 收件箱
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo url('mailbox/write'); ?>"> <i class="fa fa-envelope-o"></i> 写信</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('mailbox/trash'); ?>"> <i class="fa fa-trash-o"></i> 垃圾箱</a>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 animated fadeInRight">
                <div class="mail-box-header">

                    <h2>
                    收件箱 (信的数量)
                </h2>
                    <div class="mail-tools tooltip-demo m-t-md">
                        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="刷新邮件列表"><i class="fa fa-refresh"></i> 刷新</button>
                        <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="标为垃圾邮件"><i class="fa fa-trash-o"></i>
                        </button>

                    </div>
                </div>
                <div class="mail-box">

                    <table class="table table-hover table-mail">
                        <tbody>
                                <tr class="read">
                                        <td class="check-mail">
                                            <input type="checkbox" class="i-checks">
                                        </td>
                                        <td class="mail-ontact"><a href="<?php echo url('mailbox/detail'); ?>">来自</a>
                                        </td>
                                        <td class="mail-subject"><a href="<?php echo url('mailbox/detail'); ?>">主题</a>
                                        </td>
                                        <!--如果有文件或者图片插入，显示此样式-->
                                        <td class=""><i class="fa fa-paperclip"></i>
                                        </td>
                                        <td class="text-right mail-date">上午10:57</td>
                                    </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>


    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="/assets/libs/index/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
