<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\fastadmin\public/../application/index\view\pb\catesearch.html";i:1556295606;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>订阅号关注</title>
    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">


    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>所有订阅号</h5>
                        <div class="ibox-tools">
                            <a href="<?php echo url('pb/found'); ?>" class="btn btn-primary btn-xs">创建新订阅号</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                                <form method="post" class="form-horizontal" action="<?php echo url('pb/join'); ?>">
                                    <div class="col-md-1">
                                        <button type="submit" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                                class="fa fa-refresh"></i>刷新</button>
                                        </div>
                                    </form>
                                    <form method="post" class="form-horizontal" action="<?php echo url('pb/search'); ?>">
                                        <div class="col-md-11">
                                            <div class="input-group">
                                                <input type="text" placeholder="请输入订阅号号或者栏目类型" name="number" class="input-sm form-control" required=""> <span
                                                    class="input-group-btn" >
                                                    <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                            </div>
                                        </div>
                                    </form>
                        </div>

                        <div class="project-list">
                            <?php if(is_array($pbres) || $pbres instanceof \think\Collection || $pbres instanceof \think\Paginator): $i = 0; $__LIST__ = $pbres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pb): $mod = ($i % 2 );++$i;?>
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">
                                                    <?php if($pb['status'] == 0): ?>
                                                    正常
                                                    <?php else: ?>
                                                    异常
                                                    <?php endif; ?>
                                        </td>
                                        <td class="project-title">
                                            <a href="project_detail.html"><?php echo $pb['name']; ?></a>
                                            <br />
                                            <small>创建于 <?php echo date("Y年m月d日 H:i:s",$pb['time']); ?></small>
                                        </td>
                                        <td class="project-completion">
                                                <div class="team-members">
                                            <a href="#"><img alt="订阅号头像" class="img-circle" src="<?php echo $pb['thumb']; ?>"></a>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href="#"><img alt="管理员头像" class="img-circle"
                                                    src="<?php echo $pb['admin']['avatar']; ?>"></a>
                                        </td>
                                        <td class="project-actions" id="more">
                                                <div class="btn btn-white btn-sm demo1" id="more" data-toggle="modal" data-target="#<?php echo $pb['id']; ?>"><i
                                                        class="fa fa-folder"></i>
                                                    查看详情 </div>
    
                                            </td>
                                    </tr>
                                    <div class="modal inmodal" id="<?php echo $pb['id']; ?>" tabindex="-1" role="dialog">
                                            <form method="post" class="form-horizontal" action="<?php echo url('pb/apply'); ?>">
                                            <input type="hidden"name="pbid"value="<?php echo $pb['id']; ?>">
                                            <input type="hidden"name="userid"value="<?php echo $user['id']; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated fadeIn">
                                                    <div class="modal-header">
                                                        订阅号详情
                                                    </div>
                                                    <div class="modal-body">
                                                            <p>
                                                                <!--这里填团队详情-->
                                                               <?php echo $pb['desc']; ?>
                                                            </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button  type="submit" class="btn btn-success confirm">关注</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>

                                </tbody>
                            </table>
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