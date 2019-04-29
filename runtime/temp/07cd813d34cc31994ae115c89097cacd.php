<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\fastadmin\public/../application/index\view\pb\found.html";i:1556547530;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>订阅号创建</title>
    

    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>创建订阅号<small>创建属于你的订阅号!</small></h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content">
                            <form role="form" method="post" class="form-horizontal" action="<?php echo url('pb/found'); ?>"enctype="multipart/form-data" >
                                <input type="hidden"name="id"value="<?php echo $user['id']; ?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">订阅号名称</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="团队名称">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                    <label class="col-sm-2 control-label">订阅号类型</label>
    
                                    <div class="col-sm-6">
                                            <span class="input-group col-sm-5 col-sm-offset-0">
                                                    <select name="cateid" id="cateid" class="form-control m-d">
                                                        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select>
                                                </span>
                                    </div>
                                </div>
                            <div class="hr-line-dashed"></div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>

                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" name="mobile" required="" placeholder="输入您的电话">
                                </div>
                            </div>
                            

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                    <label class="col-sm-2 control-label">订阅号头像</label>
                                    <div class="col-sm-6">
                                        <input  placeholder=""required="" class="form-control"name="thumb" type="file">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">订阅号简介</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">


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