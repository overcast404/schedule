<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\fastadmin\public/../application/index\view\team\empty.html";i:1556111740;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>团队加入</title>
    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

    <style>
        .modal-backdrop.in {
        opacity: .5;
        display: none;
       }
       .modal-open .modal {
        height: 1000px;
       }
    .modal-body {
        padding: 0;
        width: 100%;
        height: 300px;
        line-height: 2.0;
    }
    .modal-body p{
        text-indent: 2em;
        font-size: 13px;
    }
    .modal-header p{
        background: rgba(166, 223, 218, 0.836);
        font-size: 18px;
        display: inline;
        padding: 10px;
        border-radius: 2em;
        border:2px solid rgb(178, 209, 149);
        line-height: 2.0;
    }
    .label-p{
        position: relative;
        width: 80%;
        font-size: 20px;
        padding-bottom:10px;
        padding-top: -20px;
    }
    </style>

</head>

<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>所有团队</h5>
                        <div class="ibox-tools">
                            <a href="<?php echo url('team/found'); ?>" class="btn btn-primary btn-xs">创建新团队</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                                <form method="post" class="form-horizontal" action="<?php echo url('team/join'); ?>">
                            <div class="col-md-1">
                                <button type="submit" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                        class="fa fa-refresh"></i>刷新</button>
                                    </form>
                            </div>
                            <form method="post" class="form-horizontal" action="<?php echo url('team/search'); ?>">
                            <div class="col-md-11">
                                <div class="input-group">
                                    <input type="text" placeholder="团队号有误，请重新输入" name="number" class="input-sm form-control" value="" required=""> <span
                                        class="input-group-btn" >
                                        <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </form>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>
    <!--弹框-->
    <script src="/assets/libs/index/js/plugins/sweetalert/sweetalert.min.js"></script>


    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <script>
        $(document).ready(function () {

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true);

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false);

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

            // $('#more').click(function () {
            //     swal({
            //         title: "欢迎使用SweetAlert",
            //         text: "Sweet Alert 是一个替代传统的 JavaScript Alert 的漂亮提示效果。"
            //     })
            // })
        })
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>