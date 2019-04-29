<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\fastadmin\public/../application/index\view\team\details.html";i:1556547550;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>团队详情</title>
    

    <link rel="shortcut icon" href="/assets/libs/index/avicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <a href="<?php echo url('team/board'); ?>" class="btn btn-white btn-xs pull-right">返回</a>
                                    <h2><?php echo $teamres['name']; ?></h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <?php if($teamres['finish'] == 0): ?>
                                    <dd><span class="label label-primary">进行中</span></dd>
                                    <?php else: ?>
                                    <dd><span class="label label-primary">已完成</span></dd>
                                    <?php endif; ?> 
                                    
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">
                                    <dt>组织人：</dt>
                                    <dd><?php echo $teamres['author']; ?></dd>
                                    <dt>发布任务：</dt>
                                    <dd><?php echo $teamres['amount']; ?></dd>
                                    <dt>创建于：</dt>
                                    <dd><?php echo date("Y年m月d日 H:i:s",$teamres['uptime']); ?></dd>
                                    <dt>团队号：</dt>
                                    <dd><?php echo $teamres['number']; ?></dd>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">

                                    <dt>最后更新：</dt>
                                        

                                    <dd> <?php if($teamres['newtime'] == '暂无'): ?>
                                        暂无
                                        <?php else: ?>
                                        <?php echo date("Y年m月d日 H:i:s",$teamres['newtime']); endif; ?>
                                    </dd>

                                    <dt>团队成员：</dt>
                                    <dd class="project-people">
                                            <?php foreach ($teamres['member'] as $k => $v):?>
                                            <a href="#"><img alt="<?php echo $v['nickname']; ?>" class="img-circle" src="<?php echo $v['avatar']; ?>" data-toggle="modal" data-target="#<?php echo $v['id']; ?>"></a>
                                            <div class="modal inmodal" id="<?php echo $v['id']; ?>" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                        <div class="modal-content animated fadeIn">
                                            <div class="modal-body">
                                                    <div>
                                                            <div class="ibox-content no-padding border-left-right">
                                                                <img alt="image" class="img-responsive" src="<?php echo $v['avatar']; ?>"
                                                                    style="height: 70px;width: 70px;margin: auto;">
                                                            </div>
                                                            
                                                            <div class="ibox-content profile-content">
                                    
                                                                <h4><strong>用户名&nbsp;:&nbsp;</strong><span style="margin: auto"><?php echo $v['username']; ?></span></h4>
                                                                <h4><strong>姓名&nbsp;:&nbsp;</strong><span style="margin: auto"><?php echo $v['nickname']; ?></span></h4>
                                                                <h4><strong>学院&nbsp;:&nbsp;</strong>
                                                                    <?php foreach ($collegeres as $k2 => $v2):if($v2['id'] == $v['college']): ?>
                                                                    <span><?php echo $v2['collegename']; ?></span>
                                                                    <?php endif; endforeach;?>
                                                                </h4>
                                                                <h4><strong>学号&nbsp;:&nbsp;</strong>
                                                                    <span><?php echo $v['number']; ?></span>
                                                                </h4>
                                                                <br>
                                                                <h4><strong>联系方式&nbsp;:&nbsp;</strong>
                                                                    <p><a href=""><i class="fa fa-qq" style="color: grey"></i></a><?php echo $v['qq']; ?></p>
                                                                    <p><a href=""><i class="fa fa-whatsapp" style="color: grey"></i></a><?php echo $v['mobile']; ?></p>
                                                                </h4>
                                    
                                                                <h4><strong>个人特长:</strong></h4>
                                                                <p>
                                                                    <?php $forte=explode(',',$v['forte']); foreach ($forte as $k3 => $v3):?>
                                                                    <span class="label label-primary"><?php echo $v3; ?></span>
                                                                    <?php endforeach;?>
                                                                </p>
                                    
                                                                <br>
                                    
                                    
                                                                <h3><strong>关于我:</strong> </h3>
                                    
                                                                <p>
                                                                    <?php echo $v['bio']; ?>
                                                                </p>
                                    
                                                                <div class="user-button">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                                                    class="fa fa-envelope"></i> <a href="<?php echo url('mailbox/write',array('userid'=>$v['id'])); ?>"
                                                                                    style="color:white">写信</a></button>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                                                    class="fa fa-coffee"></i> <a href=""
                                                                                    style="color:white">微空间</a></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                            <?php endforeach;?>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="project_detail.html#tab-1"
                                                        data-toggle="tab">团队消息</a>
                                                </li>
                                                <li class=""><a href="project_detail.html#tab-2"
                                                        data-toggle="tab">团队成员</a>
                                                </li>
                                                <li class=""><a href="project_detail.html#tab-3"
                                                    data-toggle="tab">任务列表</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <?php if(is_array($teamnew) || $teamnew instanceof \think\Collection || $teamnew instanceof \think\Paginator): $i = 0; $__LIST__ = $teamnew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
                                                    <div class="feed-element">
                                                        <div class="media-body ">

                                                            <strong><?php echo $news['author']; ?></strong>.

                                                            <small class="text-muted"><?php echo date("Y年m月d日 H:i:s",$news['time']); ?></small>
                                                            <p></p>
                                                            <div class="well">
                                                                <?php echo $news['content']; ?>
                                                            </div>
                                                            <div class="pull-right">
                                                                <a class="btn btn-xs btn-white"><i
                                                                        class="fa fa-thumbs-up"></i> 赞 </a>
                                                                <a class="btn btn-xs btn-primary"><i
                                                                        class="fa fa-pencil"></i> 评论</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    <div class="social-comment">
                                                        <form method="post" class="form-horizontal" action="<?php echo url('team/details'); ?>">
                                                            <input type="hidden"name="id"value="<?php echo $user['id']; ?>">
                                                            <input type="hidden"name="teamid"value="<?php echo $teamres['id']; ?>">
                                                        <div class="media-body">
                                                            <textarea class="form-control"name="content" id="content"
                                                                placeholder=""></textarea>
                                                            <button type="submit" class="btn btn-primary col-sm-2 pull-right btn-xs"
                                                                style="margin-top: 3px;"><a href="#"><i
                                                                        class="fa fa-paper-plane"
                                                                        style="color:white"></i>
                                                                </a>发送</button>
                                                        </div>
                                                        </form>
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
                                                                    <?php if($user['nickname'] == $v['nickname']): ?>
                                                                    <td>
                                                                        <button class="btn btn-danger btn-sm">退出</button>
                                                                    </td>
                                                                    <?php else: ?>
                                                                    <td>
                                                                            
                                                                    </td>
                                                                    <?php endif; ?>
                                                                </tr>
                                                                <?php endforeach;?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-3">

                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>状态</th>
                                                            <th>标题</th>
                                                            <th>开始时间</th>
                                                            <th>推荐完成时间</th>
                                                            <th>人员</th>
                                                            <th>说明</th>
                                                        </tr>
                                                    </thead>
                                                    <?php if(is_array($teamevent) || $teamevent instanceof \think\Collection || $teamevent instanceof \think\Paginator): $i = 0; $__LIST__ = $teamevent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$event): $mod = ($i % 2 );++$i;?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php if($event['statue'] == 0): ?>
                                                                <span  class="label label-primary">进行中</span>
                                                                <?php else: ?> 
                                                                <span class="fa fa-check" class="label label-primary">已完成</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $event['title']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo date("Y年m月d日 H:i:s",$event['uptime']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $event['time']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $event['author']; ?>
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                        <?php if($event['statue'] == 0): ?>
                                                                        还在测试阶段
                                                                        <?php else: ?> 
                                                                        已经测试通过
                                                                        <?php endif; ?>
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        


                                                    </tbody>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </table>

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