<?php if (!defined('THINK_PATH')) {
    exit();
}
/*a:1:{s:61:"D:\fastadmin\public/../application/index\view\pb\release.html";i:1555413350;}*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>团队信息发布</title>

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/index/css/plugins/cropper/cropper.min.css">
    <link href="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>团队资料</h5>
                    </div>
                    <div>

                        <div class="ibox-content profile-content">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">
                                            发布活动</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="" id="">
                                                    <option value="">订阅号一</option>
                                                    <option value="">订阅号二</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">活动名称:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                        class="form-control" placeholder="请输入用户名" value="404NF"
                                                        required="" aria-required="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">发布人:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                        class="form-control" placeholder="请输入姓名" value="唐泽宇" required=""
                                                        aria-required="true"></span>
                                            </div>
                                            <!--切换学院时切换专业-->




                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">详细信息:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><textarea name=""
                                                        id="" cols="30" rows="10"
                                                        class="form-control"></textarea></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="user-button">
                                    <div class="row">

                                        <div class="col-sm-2 col-sm-offset-5" style="margin-top:10px">
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-coffee"></i> 保存</button>
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

    <script src="/assets/libs/index/js/plugins/layer/laydate/laydate.js"></script>



    <!-- Peity -->
    <script src="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="/assets/libs/index/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/assets/libs/index/js/plugins/cropper/cropper.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#croppic').cropper({
                aspectRatio: 16 / 9,
                viewMode: 1,
                crop: function (e) {
                    console.log(e);
                }
            });
            $("#speciality").tagsinput()
        })
    </script>


    <!-- Peity -->
    <script src="/assets/libs/index/js/demo/peity-demo.js"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
