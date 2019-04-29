<?php if (!defined('THINK_PATH')) {
    exit();
}
/*a:1:{s:65:"D:\fastadmin\public/../application/index\view\user\labelwall.html";i:1554965692;}*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>详情页</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 container">
            <select name="" id="mainSelect" class="form-control">
                <option value="">个人</option>
                <!--这里遍历-->
                <option value="team">团队</option>
                <option value="public">订阅号</option>
            </select>
            <select name="" id="teamSelect" style="display: none; margin-top: 10px;" class="form-control">
                <option value="" class="">中文小组</option>
                <option value="">计算机设计大赛</option>
            </select>
            <select name="" id="publicSelect" style="display: none; margin-top: 10px;" class="form-control">
                <option value="" class="">中文小组</option>
                <option value="">计算机设计大赛</option>
            </select>
        </div>
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <ul class="notes">
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>HTML5 文档类型</h4>
                            <p>Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>移动设备优先</h4>
                            <p>在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 Bootstrap 3
                                中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增……</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>排版与链接</h4>
                            <p>Bootstrap 排版、链接样式设置了基本的全局样式。分别是： 为 body 元素设置 background-color: #fff; 使用
                                @font-family-base、@font-size-base 和……。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>Normalize.css</h4>
                            <p>为了增强跨浏览器表现的一致性，我们使用了 Normalize.css，这是由 Nicolas Gallagher 和 Jonathan Neal 维护的一个CSS 重置样式库。
                            </p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>布局容器</h4>
                            <p>Bootstrap 需要为页面内容和栅格系统包裹一个 .container 容器。我们提供了两个作此用处的类。注意，由于 padding 等属性的原因，这两种
                                容器类不能互相嵌套。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <small>2014年10月24日(星期五) 下午5:31</small>
                            <h4>栅格系统</h4>
                            <p>Bootstrap
                                提供了一套响应式、移动设备优先的流式栅格系统，随着屏幕或视口（viewport）尺寸的增加，系统会自动分为最多12列。它包含了易于使用的预定义类，还有强大的mixin
                                用于生成更具语义的布局。</p>
                            <a href="pin_board.html#"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                </ul>
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
            $('#mainSelect').change(function () {
                console.log('demo')
                var data = $(this).val();
                if (data == 'team') {
                    $('#teamSelect').css('display', 'block');
                    $('#publicSelect').css('display', 'none');
                } else if (data == 'public') {
                    $('#publicSelect').css('display', 'block');
                    $('#teamSelect').css('display', 'none');
                } else {
                    $('#publicSelect').css('display', 'none');
                    $('#teamSelect').css('display', 'none');
                }

            })
        })
    </script>


</body>

</html>
