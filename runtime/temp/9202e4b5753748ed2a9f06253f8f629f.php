<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\fastadmin\public/../application/index\view\team\modify.html";i:1556212756;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>团队资料修改</title>

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
                        <form method="post" class="form-horizontal" action="<?php echo url('team/modify'); ?>">
                        <input type="hidden" name="id" value="<?php echo $teamres['id']; ?>">
                        <input type="hidden"name="userid"value="<?php echo $user['id']; ?>">
                        <div class="ibox-content profile-content">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">
                                                审核</a>
                                        </li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">
                                            成员管理</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">
                                            修改团队资料</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">权限修改</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                                <div class="full-height-scroll">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                <?php if(is_array($teamapply) || $teamapply instanceof \think\Collection || $teamapply instanceof \think\Paginator): $i = 0; $__LIST__ = $teamapply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$apply): $mod = ($i % 2 );++$i;?>
                                                                <tr>
                                                                    <td class="client-avatar"><img alt="image" src="<?php echo $apply['user']['avatar']; ?>">
                                                                    </td>
                                                                    <td><a data-toggle="tab" href="#contact-1"
                                                                            class="client-link"><?php echo $apply['user']['nickname']; ?></a>
                                                                    </td>
                                                                    <td> <?php echo $apply['reason']; ?></td>
            
                                                                    <td class="client-status">
                                                                            <?php if($apply['status'] == 0): ?>
                                                                            <span class="label label-warning "><a href="<?php echo url('team/examine',array('teamapplyid'=>$apply['id'])); ?>">待审核</a></span>
                                                                            <?php else: ?>
                                                                            <span class="label label-warning">已通过</span>
                                                                            <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                <div id="tab-2" class="tab-pane ">
                                        <div class="full-height-scroll">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
    
                                                        <?php foreach ($teamres['member'] as $k => $v):?>
                                                        <tr>
                                                            <td><a data-toggle="tab" href="#company-3" class="client-link">
                                                                    <?php echo $v['nickname']; ?></a>
                                                            </td>
                                                            <?php if($teamres['author'] == $v['nickname']): ?>
                                                            <td><i class="fa fa-flag"></i>队长 </td>
                                                            <?php else: ?>
                                                            <td><i class="fa fa-user"></i>组员</td>
                                                            <?php endif; ?>
                                                            <td class="client-status"><span
                                                                class="label label-primary">已验证</span>
                                                            </td>
                                                            <?php if($teamres['author'] == $v['nickname']): ?>
                                                            <td>
                                                                <button class="btn btn-danger btn-sm">退出</button>
                                                            </td>
                                                            
                                                            <?php else: ?>
                                                            <td>
                                                                    <button class="btn btn-danger btn-sm">踢出</button>
                                                            </td>
                                                            <?php endif; ?>
                                                        </tr>
                                                        <?php endforeach;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane ">
                                        <div class="panel-body">
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">团队名:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="text" name="name"
                                                        class="form-control" placeholder="请输入用户名" value="<?php echo $teamres['name']; ?>"
                                                        required="" aria-required="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">预计结束事件:</label>
                                                <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm:ss" name="time" value="<?php echo $teamres['time']; ?>"
                                                    onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                                                <label class="laydate-icon"></label>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">联系电话:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><input type="tel"name="mobile"
                                                        class="form-control" placeholder="phone" value="<?php echo $teamres['mobile']; ?>"
                                                        required="" aria-required="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">团队简介:</label>
                                                <span class="input-group col-sm-5 col-sm-offset-0"><textarea name="desc"
                                                        id="desc" cols="30" rows="10" 
                                                        class="form-control"><?php echo $teamres['desc']; ?></textarea></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">需要审核:</label>
                                                <div class="col-sm-10">
                                                        <?php if($teamres['status'] == 1): ?>
                                                    <div class="radio i-checks">
                                                        <label>
                                                            <input type="radio" checked="" value="0" name="status">
                                                            <i></i>是</label>
                                                    </div>
                                                    <div class="radio i-checks">
                                                        <label>
                                                            <input type="radio" value="1" name="status"> <i></i>
                                                            否</label>
                                                    </div>
                                                    <?php else: ?>
                                                    <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio"  value="0" name="status">
                                                                <i></i>是</label>
                                                        </div>
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" checked="" value="1" name="status"> <i></i>
                                                                否</label>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                    style="text-align: center;margin-top: 6px;">状态:</label>
                                                <div class="col-sm-10">
                                                    <?php if($teamres['finish'] == 0): ?>
                                                    <div class="radio i-checks">
                                                        <label>
                                                            <input type="radio" checked="" value="0" name="finish">
                                                            <i></i>进行中</label>
                                                    </div>
                                                    <div class="radio i-checks">
                                                        <label>
                                                            <input type="radio" value="1" name="finish"> <i></i>
                                                            已完成</label>
                                                    </div>
                                                    <?php else: ?>
                                                    <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" value="0" name="finish">
                                                                <i></i>进行中</label>
                                                        </div>
                                                        <div class="radio i-checks">
                                                            <label>
                                                                <input type="radio" checked=""value="1" name="finish"> <i></i>
                                                                已完成</label>
                                                        </div>
                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"
                                                style="text-align: center;margin-top: 6px;">解散:</label>
                                            <span class="input-group col-sm-5 col-sm-offset-0"><button
                                                    class="btn btn-danger"  tybe="subimt" name="jiesan" value="1"></a>解散</button></span>
                                                </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="user-button">
                                    <div class="row">

                                        <div class="col-sm-2 col-sm-offset-5" style="margin-top:10px">
                                            <button type="submit" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-coffee"></i> 保存</button>
                                        </div>
                                    </div>
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
    <script>
            $(function () {
                $('.full-height-scroll').slimScroll({
                    height: '100%'
                });
            });
        </script>


    <!-- Peity -->
    <script src="/assets/libs/index/js/demo/peity-demo.js"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>