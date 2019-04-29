<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\fastadmin\public/../application/index\view\user\revise.html";i:1556539161;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>个人资料修改</title>

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/index/css/cropper.min.css">
    <link rel="stylesheet" href="/assets/libs/index/css/ImgCropping.css">
    
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-sm-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料</h5>
                    </div>
                    <div>

                        <div class="ibox-content profile-content">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">
                                            修改个人资料</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">修改密码</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    
                                    <div id="tab-1" class="tab-pane active">
                                        <form class="form-horizontal" role="form" action="<?php echo url('user/revise'); ?>"enctype="multipart/form-data" method="post">
                                            <input type="hidden"name="id"value="<?php echo $user['id']; ?>">
                                            <div class="panel-body">

                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">用户名:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="请输入用户名" value="<?php echo $user['username']; ?>" name="username" required=""
                                                                    aria-required="true"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">昵称:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="请输入姓名" value="<?php echo $user['nickname']; ?>" name="nickname" required=""
                                                                    aria-required="true"></span>
                                                        </div>
                                                        <!--切换学院时切换专业-->
                                                        <!--无限级未做-->
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">学院:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0">
                                                                <select name="college" id="college" class="form-control m-d">
                                                                    <?php if(is_array($collegeres) || $collegeres instanceof \think\Collection || $collegeres instanceof \think\Paginator): $i = 0; $__LIST__ = $collegeres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$college): $mod = ($i % 2 );++$i;?>
                                                                    <option <?php if($college['id'] == $user['college']): ?> selected="selected" <?php endif; ?> value="<?php echo $college['id']; ?>"><?php echo $college['collegename']; ?></option>
                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </select>
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">学号:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="学号" name="number" value="<?php echo $user['number']; ?>"
                                                                    required="" aria-required="true"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">QQ:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="QQ" name="qq" value="<?php echo $user['qq']; ?>"
                                                                    required="" aria-required="true"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">邮箱:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="WeChat" name="email" value="<?php echo $user['email']; ?>"
                                                                    required="" aria-required="true"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">电话:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                                    class="form-control" placeholder="phone" name="mobile" value="<?php echo $user['mobile']; ?>"
                                                                    required="" aria-required="true"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">标签:</label>
                                                            <span class="input-group col-sm-5">
                                                                <!--value是默认填写的数据-->
                                                                <input id="speciality" type="text" class="form-control"
                                                                    name="forte" value="<?php echo $user['forte']; ?>" placeholder="请输入特长">
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"
                                                                style="text-align: center;margin-top: 6px;">关于我:</label>
                                                            <span class="input-group col-sm-5 col-sm-offset-0"><textarea name="bio"
                                                                    id="bio" cols="30" rows="10"
                                                                    class="form-control"><?php echo $user['bio']; ?></textarea></span>
                                                        </div>
                                                        <div class="user-button">
                                                                <div class="row">
                                
                                                                    <div class="col-sm-3 col-sm-offset-4" style="margin-top:10px">
                                                                        <button type="submit" class="btn btn-primary btn-sm btn-block"><i
                                                                                class="fa fa-coffee"></i> 保存</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </form>
                                                </div>
                                    
                                    <div id="tab-2" class="tab-pane">
                                            <form role=form action="<?php echo url('user/revise'); ?>" method="post">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">旧密码:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                        class="form-control" placeholder="请输入旧密码" name="oldpassword" value="" required=""
                                                        aria-required="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">新密码:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                        class="form-control" name="newpassword" placeholder="请输入新密码"
                                                        value="" required="" aria-required="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">重新输入新密码:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text"
                                                        class="form-control" name="renewpassword" placeholder="确认新密码"
                                                        value="" required="" aria-required="true"></span>
                                            </div>
                                            <div class="user-button">
                                                    <div class="row">
                    
                                                        <div class="col-sm-3 col-sm-offset-4" style="margin-top:10px">
                                                            <button type="submit" class="btn btn-primary btn-sm btn-block"><i
                                                                    class="fa fa-coffee"></i> 保存</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                    </form>
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

    <!--富文本上传头像-->
    <script type="text/javascript" src="/assets/libs/index/plugins/fullavatareditor/scripts/swfobject.js"></script>
    <script type="text/javascript" src="/assets/libs/index/plugins/fullavatareditor/scripts/fullAvatarEditor.js"></script>
    <script type="text/javascript" src="/assets/libs/index/plugins/fullavatareditor/scripts/jQuery.Cookie.js"></script>
    <script type="text/javascript" src="/assets/libs/index/plugins/fullavatareditor/scripts/test.js"></script>


    <!-- Peity -->
    <script src="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="/assets/libs/index/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/assets/libs/index/js/plugins/cropper/cropper.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#speciality").tagsinput()
        })
           (window.onresize = function () {
        var win_height = $(window).height();
        var win_width = $(window).width();
        if (win_width <= 768){
            $(".tailoring-content").css({
                "top": (win_height - $(".tailoring-content").outerHeight())/2,
                "left": 0
            });
        }else{
            $(".tailoring-content").css({
                "top": (win_height - $(".tailoring-content").outerHeight())/2,
                "left": (win_width - $(".tailoring-content").outerWidth())/2
            });
        }
    })();

    //弹出图片裁剪框
    $("#replaceImg").on("click",function () {
        $(".tailoring-container").toggle();
    });
    //图像上传
    function selectImg(file) {
        if (!file.files || !file.files[0]){
            return;
        }
        var reader = new FileReader();
        reader.onload = function (evt) {
            var replaceSrc = evt.target.result;
            //更换cropper的图片
            $('#tailoringImg').cropper('replace', replaceSrc,false);//默认false，适应高度，不失真
        }
        reader.readAsDataURL(file.files[0]);
    }
    //cropper图片裁剪
    $('#tailoringImg').cropper({
        aspectRatio: 1/1,//默认比例
        preview: '.previewImg',//预览视图
        guides: false,  //裁剪框的虚线(九宫格)
        autoCropArea: 0.5,  //0-1之间的数值，定义自动剪裁区域的大小，默认0.8
        movable: false, //是否允许移动图片
        dragCrop: true,  //是否允许移除当前的剪裁框，并通过拖动来新建一个剪裁框区域
        movable: true,  //是否允许移动剪裁框
        resizable: true,  //是否允许改变裁剪框的大小
        zoomable: false,  //是否允许缩放图片大小
        mouseWheelZoom: false,  //是否允许通过鼠标滚轮来缩放图片
        touchDragZoom: true,  //是否允许通过触摸移动来缩放图片
        rotatable: true,  //是否允许旋转图片
        crop: function(e) {
            // 输出结果数据裁剪图像。
        }
    });
    //旋转
    $(".cropper-rotate-btn").on("click",function () {
        $('#tailoringImg').cropper("rotate", 45);
    });
    //复位
    $(".cropper-reset-btn").on("click",function () {
        $('#tailoringImg').cropper("reset");
    });
    //换向
    var flagX = true;
    $(".cropper-scaleX-btn").on("click",function () {
        if(flagX){
            $('#tailoringImg').cropper("scaleX", -1);
            flagX = false;
        }else{
            $('#tailoringImg').cropper("scaleX", 1);
            flagX = true;
        }
        flagX != flagX;
    });

    //裁剪后的处理
    $("#sureCut").on("click",function () {
        if ($("#tailoringImg").attr("src") == null ){
            return false;
        }else{
            console.log($('#tailoringImg'))
            var cas = $('#tailoringImg').cropper('getCroppedCanvas');//获取被裁剪后的canvas
            console.log(cas);
            var base64url = cas.toDataURL('image/jpeg'); //转换为base64地址形式
            console.log(base64url)
            $("#finalImg").prop("src",base64url);//显示为图片的形式

            //关闭裁剪框
            closeTailor();
        }
    });
    //关闭裁剪框
    function closeTailor() {
        $(".tailoring-container").toggle();
    }


    </script>

    <!-- Peity -->
    <script src="/assets/libs/index/js/demo/peity-demo.js"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>