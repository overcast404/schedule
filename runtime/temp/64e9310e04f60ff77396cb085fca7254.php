<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\fastadmin\public/../application/index\view\form\pb.html";i:1556333908;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>发布订阅号日程</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <!-- <div class="ibox-content">
                <p>
                    这是一个简单的表单向导示例
                </p>
                <div id="wizard">
                    <h1>第一步</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md">
                            <h2>第一步</h2>
                            <p>
                                这是第一步的内容
                            </p>
                        </div>
                    </div>

                    <h1>第二步</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md">
                            <h2>第二步</h2>
                            <p>
                                这是第二步的内容
                            </p>
                        </div>
                    </div>

                    <h1>第三步</h1>
                    <div class="step-content">
                        <div class="text-center m-t-md">
                            <h2>第三步</h2>
                            <p>
                                这是第三步的内容
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>发布订阅号日程</h5>

                            <div class="ibox-content">
                                <h2>
                                    发布订阅号日程
                                </h2>
                                <p>
                                    添加到日程表后您可以选择相应的时间
                                </p>

                                        <form id="form" action="<?php echo url('form/pb'); ?>" class="wizard-big" method="post">
                                            <input type="hidden"name="id"value="<?php echo $user['id']; ?>">

                                    <h1>选择订阅号</h1>
                                    <fieldset>
                                        <h2>订阅号</h2>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <select name="pb" id="pb" class="form-control">
                                                    <?php if(is_array($pbres) || $pbres instanceof \think\Collection || $pbres instanceof \think\Paginator): $i = 0; $__LIST__ = $pbres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pb): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $pb['id']; ?>"><?php echo $pb['name']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in"
                                                            style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>选择时间</h1>
                                    <fieldset>
                                        <h2>时间</h2>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <input class="form-control layer-date" placeholder="请选择日期"name="time"
                                                    onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                                                <label class="laydate-icon"></label>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in"
                                                            style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>选择您要添加的事件种类</h1>
                                    <fieldset>
                                        <h2>简述您的事件</h2>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <input name="title" type="text" class="form-control">
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in"
                                                            style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <h1>详细说明</h1>
                                    <fieldset>
                                        <h2>详细说明</h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <textarea name="content" id="content" cols="10" rows="10"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>完成</h1>
                                    <fieldset>
                                        <h2>确认</h2>

                                        

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input id="" name="" type="checkbox"
                                                    class="required">
                                                <label for="acceptTerms">确认</label>
                                            </div>
                                        </div>
                                    </fieldset>

                                </form>
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


            <!-- Steps -->
            <script src="/assets/libs/index/js/plugins/layer/laydate/laydate.js"></script>

            <script src="/assets/libs/index/js/plugins/staps/jquery.steps.min.js"></script>

            <!-- Jquery Validate -->
            <script src="/assets/libs/index/js/plugins/validate/jquery.validate.min.js"></script>
            <script src="/assets/libs/index/js/plugins/validate/messages_zh.min.js"></script>


            <script>
                $(document).ready(function () {
                    $("#wizard").steps();
                    $("#form").steps({
                        bodyTag: "fieldset",
                        onStepChanging: function (event, currentIndex, newIndex) {
                            // Always allow going backward even if the current step contains invalid fields!
                            if (currentIndex > newIndex) {
                                return true;
                            }

                            // Forbid suppressing "Warning" step if the user is to young
                            if (newIndex === 3 && Number($("#age").val()) < 18) {
                                return false;
                            }

                            var form = $(this);

                            // Clean up if user went backward before
                            if (currentIndex < newIndex) {
                                // To remove error styles
                                $(".body:eq(" + newIndex + ") label.error", form).remove();
                                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                            }

                            // Disable validation on fields that are disabled or hidden.
                            form.validate().settings.ignore = ":disabled,:hidden";

                            // Start validation; Prevent going forward if false
                            return form.valid();
                        },
                        onStepChanged: function (event, currentIndex, priorIndex) {
                            // Suppress (skip) "Warning" step if the user is old enough.
                            if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                                $(this).steps("next");
                            }

                            // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                            if (currentIndex === 2 && priorIndex === 3) {
                                $(this).steps("previous");
                            }
                        },
                        onFinishing: function (event, currentIndex) {
                            var form = $(this);

                            // Disable validation on fields that are disabled.
                            // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                            form.validate().settings.ignore = ":disabled";

                            // Start validation; Prevent form submission if false
                            return form.valid();
                        },
                        onFinished: function (event, currentIndex) {
                            var form = $(this);

                            // Submit form input
                            form.submit();
                        }
                    }).validate({
                        errorPlacement: function (error, element) {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
                });
            </script>

            <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
            <!--统计代码，可删除-->

</body>

</html>