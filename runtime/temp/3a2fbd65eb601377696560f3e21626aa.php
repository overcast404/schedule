<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\fastadmin\public/../application/index\view\mailbox\write.html";i:1556538563;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>写信</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico"> <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">
    
    <script src="/assets/ueditor/ueditor.config.js"></script>
    <script src="/assets/ueditor/ueditor.all.min.js"></script>
    <script src="/assets/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style>
      .modal-backdrop.in {
    opacity: 0.5;
    display: none;
    
}
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
             <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
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
                    <div class="pull-right tooltip-demo">
                        <a href="<?php echo url('mailbox/board'); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="放弃"><i class="fa fa-times"></i> 放弃</a>
                    </div>
                    <h2>
                    写信
                </h2>
                </div>
                <div class="mail-box">
                    <form role="form" method="post" class="form-horizontal" action="<?php echo url('mailbox/write'); ?>" enctype="multipart/form-data">
                    <div class="mail-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">发送到：</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="receiptemail" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">主题：</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" name="theme">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">内容：</label>
                                <div class="col-sm-10">
                                    <textarea id="content"name="content"></textarea>
                                </div>
                                <p class="help-block col-sm-4 red"></p>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">附件</label>
                                <div class="col-sm-4">
                                    <input  placeholder="" class="form-control"name="thumb" type="file">
                                </div>
                            </div>
                    </div>
                    <div class="mail-body text-right tooltip-demo">
                        <button  type="submit" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> 发送</button>
                        <a href="<?php echo url('mailbox/board'); ?>" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> 放弃</a>
                    </div>
                    <div class="clearfix"></div>
                    </form>


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

    <!-- SUMMERNOTE -->
    <script src="/assets/libs/index/js/plugins/summernote/summernote.min.js"></script>
    <script src="/assets/libs/index/js/plugins/summernote/summernote-zh-CN.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });


            $('.summernote').summernote({
                lang: 'zh-CN'
            });

        });
        var edit = function () {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function () {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
    <script type="text/javascript">
    
    
    UE.getEditor('content', {
        toolbars: [[//工具条
            'fullscreen', 'source', 'undo', 'redo', 'bold', 'italic',
        'underline','fontborder', 'backcolor', 'fontsize', 'fontfamily',
        'justifyleft', 'justifyright','justifycenter', 'justifyjustify',
        'strikethrough','superscript', 'subscript', 'removeformat',
        'formatmatch','autotypeset', 'blockquote', 'pasteplain', '|',
        'forecolor', 'backcolor','insertorderedlist', 'insertunorderedlist',
        'selectall', 'cleardoc', 'link', 'unlink','emotion', 'help'
        ]]
});
        </script>


</body>

</html>
