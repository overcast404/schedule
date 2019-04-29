<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\fastadmin\public/../application/index\view\personality\index.html";i:1556547542;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>个性发布</title>
    
    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico"> <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">
    <style>
        a{
            color: #fff;
            font-size: 20px;
        }
        .la{
            padding-top:10px;
            margin-left:30px;
        }
        .modal-backdrop.in {
    opacity: .5;
    display: none;
  }

  .modal-open .modal {
    height: 800px;
  }

  .modal-body {
    padding: 0;
  }

  .ibox-hide {
    height: 200px;
    width:500px;
  }
  .laydate_body .laydate_bottom .laydate_btn a{
      font-size:10px;
  }
    </style>

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="text-center p-lg">
                        <h2>如果没有找到您想要的需求</h2>
                        <span>您可以点击</span>
                        <button title="Create new cluster" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal14"><i class="fa fa-plus"></i> <span class="bold">在线发布</span>
                        </button>按钮
                    </div>
                </div>
                <div class="row border-bottom m-b-sm ibox-content">
                    <h2 class="text-center text-large">导航栏</h2>
                    <div class="row text-center" style="margin-top: 30px;">   
                    <label class="label label-primary la"><a href="">运动</a></label>
                    <label class="label label-primary la" style="background: rgb(200,200,0)"><a href="">户外</a></label>
                    <label class="label label-primary la" style="background: rgb(200,0,100)"><a href="">篮球</a></label>
                    <label class="label label-primary la" style="background: rgb(200,255,100)"><a href="">足球</a></label>
                    <label class="label label-primary la" style="background: rgb(200,255,255)"><a href="">羽毛球</a></label>
                    <label class="label label-primary la" style="background: rgb(200,200,0)"><a href="">乒乓球</a></label>
                    <label class="label label-primary la" style="background: rgb(200,200,0)"><a href="">网球</a></label>
                </div>
                <div class="row text-center" style="margin-top: 30px;">
                        <label class="label label-primary la"><a href="">学习</a></label>
                        <label class="label label-primary la" style="background: rgb(20,10,130)"><a href="">物理</a></label>
                        <label class="label label-primary la" style="background: rgb(200,200,100)"><a href="">C语言</a></label>
                        <label class="label label-primary la" style="background: rgb(149, 172, 236)"><a href="">高等数学</a></label>
                        <label class="label label-primary la" style="background: rgb(194, 140, 211)"><a href="">离散数学</a></label>
                        <label class="label label-primary la" style="background: rgb(194, 228, 228)"><a href="">线性代数</a></label>
                        <label class="label label-primary la" style="background: rgb(146, 146, 142)"><a href="">机械制图</a></label>
                        <label class="label label-primary la" style="background: rgb(243, 203, 144)"><a href="">艺术</a></label>
                    </div>
                    <div class="row text-center" style="margin-top: 30px;">
                            <label class="label label-primary la"><a href="">其他</a></label>
                            <label class="label label-primary la" style="background: rgb(159, 154, 211)"><a href="">实验</a></label>
                            <label class="label label-primary la" style="background: rgb(95, 230, 212)"><a href="">出行</a></label>
                            <label class="label label-primary la" style="background: rgb(236, 149, 214)"><a href="">课外</a></label>
                            <label class="label label-primary la" style="background: rgb(184, 224, 160)"><a href="">约会</a></label>
                            <label class="label label-primary la" style="background: rgb(143, 148, 148)"><a href="">线性代数</a></label>
                            <label class="label label-primary la" style="background: rgb(206, 153, 164)"><a href="">机械制图</a></label>
                            <label class="label label-primary la" style="background: rgb(224, 204, 172)"><a href="">艺术</a></label>
                        </div>
                </div>
                <div class="row m-b-sm m-t-sm">
                        <div class="col-md-1">
                            <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                    class="fa fa-refresh"></i> 刷新</button>
                        </div>
                        <div class="col-md-11">
                            <div class="input-group">
                                <input type="text" placeholder="请输入您想要查找的内容" class="input-sm form-control"> <span
                                    class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>

                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-7">
                            <a data-toggle="collapse" href="faq.html#faq1" class="faq-question">寻找羽毛球小队</a>
                            <small><strong>发布人</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                        </div>
                        <div class="col-md-3">
                            <span class="font-bold">剩余人数：</span>
                            <span class="font-bold"></span>
                            <div class="tag-list">
                                <span class="tag-item">羽毛球</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <button class="btn btn-primary">加入</button>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="faq1" class="panel-collapse collapse faq-answer">
                                <p>
                                    今天下午2点半寻找同学一起去市区打羽毛
                                    <br>本人酷爱羽毛球，想要找小伙伴一起去打羽毛，并能够在以后的周末长期约打
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-7">
                            <a data-toggle="collapse" href="faq.html#faq2" class="faq-question">物理学习小组</a>
                            <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                        </div>
                        <div class="col-md-3">
                            <span class="font-bold">剩余人数:</span>
                            <span class="font-bold"></span>
                            <div class="tag-list">
                                <span class="tag-item">物理</span>
                                <span class="tag-item">学习</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <button class="btn btn-primary">加入</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="faq2" class="panel-collapse collapse faq-answer">
                                <p>
                                    本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                    <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <a data-toggle="collapse" href="faq.html#faq3" class="faq-question">物理学习小组</a>
                                <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                            </div>
                            <div class="col-md-3">
                                <span class="font-bold">剩余人数:</span>
                                <span class="font-bold"></span>
                                <div class="tag-list">
                                    <span class="tag-item">物理</span>
                                    <span class="tag-item">学习</span>
                                </div>
                            </div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-primary">加入</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="faq3" class="panel-collapse collapse faq-answer">
                                    <p>
                                        本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                        <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                            <div class="row">
                                <div class="col-md-7">
                                    <a data-toggle="collapse" href="faq.html#faq4" class="faq-question">物理学习小组</a>
                                    <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                                </div>
                                <div class="col-md-3">
                                    <span class="font-bold">剩余人数:</span>
                                    <span class="font-bold"></span>
                                    <div class="tag-list">
                                        <span class="tag-item">物理</span>
                                        <span class="tag-item">学习</span>
                                    </div>
                                </div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-primary">加入</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="faq4" class="panel-collapse collapse faq-answer">
                                        <p>
                                            本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                            <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="faq.html#faq5" class="faq-question">物理学习小组</a>
                                        <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="font-bold">剩余人数:</span>
                                        <span class="font-bold"></span>
                                        <div class="tag-list">
                                            <span class="tag-item">物理</span>
                                            <span class="tag-item">学习</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <button class="btn btn-primary">加入</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="faq5" class="panel-collapse collapse faq-answer">
                                            <p>
                                                本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                                <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <a data-toggle="collapse" href="faq.html#faq6" class="faq-question">物理学习小组</a>
                                            <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="font-bold">剩余人数:</span>
                                            <span class="font-bold"></span>
                                            <div class="tag-list">
                                                <span class="tag-item">物理</span>
                                                <span class="tag-item">学习</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-right">
                                            <button class="btn btn-primary">加入</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="faq6" class="panel-collapse collapse faq-answer">
                                                <p>
                                                    本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                                    <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <a data-toggle="collapse" href="faq.html#faq7" class="faq-question">物理学习小组</a>
                                                <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="font-bold">剩余人数:</span>
                                                <span class="font-bold"></span>
                                                <div class="tag-list">
                                                    <span class="tag-item">物理</span>
                                                    <span class="tag-item">学习</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <button class="btn btn-primary">加入</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="faq7" class="panel-collapse collapse faq-answer">
                                                    <p>
                                                        本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                                        <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <a data-toggle="collapse" href="faq.html#faq8" class="faq-question">物理学习小组</a>
                                                    <small><strong>艾依宁</strong> <i class="fa fa-clock-o"></i> 今天15:34</small>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="font-bold">剩余人数:</span>
                                                    <span class="font-bold"></span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">物理</span>
                                                        <span class="tag-item">学习</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 text-right">
                                                    <button class="btn btn-primary">加入</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div id="faq8" class="panel-collapse collapse faq-answer">
                                                        <p>
                                                            本人在上课时物理没认真听讲，导致现在在挂科的边缘疯狂徘徊，希望找到小伙伴一起学习物理
                                                            <br>本人物理老师是北大天才物理博士李旦，教课风格独特，希望小伙伴能够谅解我
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal inmodal" id="myModal14" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content animated fadeIn">
                                                        <div class="modal-header">
                                                            <h3>个性发布</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                                <div class="form-group">
                                                                        <label class="col-sm-2 control-label"
                                                                            style="text-align: center;margin-top: 6px;">活动名称:</label>
                                                                        <span class="input-group col-sm-8 col-sm-offset-0"><input type="text"
                                                                                class="form-control" placeholder="请输入发布名称" value="" required=""
                                                                                aria-required="true"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"
                                                                            style="text-align: center;margin-top: 6px;">截止时间:</label>
                                                                        <span class="input-group col-sm-8 col-sm-offset-0"><input class="form-control layer-date" placeholder="请选择日期"
                                                                            onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                                                                        <label class="laydate-icon"></label></span>
                                                                    </div>
                                                                    <!--切换学院时切换专业-->
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"
                                                                            style="text-align: center;margin-top: 6px;">选择人数:</label>
                                                                        <span class="input-group col-sm-8 col-sm-offset-0">
                                                                                <input type="text"
                                                                                class="form-control" placeholder="请输入人数" value="" required=""
                                                                                aria-required="true">
                                                                        </span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"
                                                                            style="text-align: center;margin-top: 6px;">标签:</label>
                                                                        <span class="input-group col-sm-8">
                                                                            <!--value是默认填写的数据-->
                                                                            <input id="speciality" type="text" class="form-control col-sm-12"
                                                                                name="speciality" value="唱,跳,rap,篮球" placeholder="请输入特长">
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label"
                                                                            style="text-align: center;margin-top: 6px;">发布详情:</label>
                                                                        <span class="input-group col-sm-8 col-sm-offset-0"><textarea name=""
                                                                                id="" cols="30" rows="10"
                                                                                class="form-control"></textarea></span>
                                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                                    <div class="form-group">
                                                                        <button class="btn btn-primary pull-right"><i class="fa fa-reply"></i>发布</button>
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
    <script src="https://cdn.bootcss.com/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>   

    <script src="/assets/libs/index/js/plugins/layer/laydate/laydate.js"></script>
    <script src="/assets/libs/index/js/plugins/staps/jquery.steps.min.js"></script>







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
        $("#speciality").tagsinput()
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
