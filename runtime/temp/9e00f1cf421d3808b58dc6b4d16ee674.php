<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\fastadmin\public/../application/index\view\team\myboard.html";i:1556247916;}*/ ?>
<!DOCTYPE html>


<html>

<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
        <title>我的团队列表</title>
    
        <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
        <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
        <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    
        <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
        <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">
    
<style>
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
</style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            
            <?php if(is_array($teamer) || $teamer instanceof \think\Collection || $teamer instanceof \think\Paginator): $i = 0; $__LIST__ = $teamer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$team): $mod = ($i % 2 );++$i;?>
            <!--第一列-->
            <div class="col-sm-4">
                <div class="ibox">
                    <div class="ibox-title">
                            <?php if($team['finish'] == 0): ?>
                            <span class="label label-primary pull-right">进行中</span>
                            <?php else: ?> 
                            <span class="label label-danger pull-right">已完成</span>
                            <?php endif; ?>
                        <h5><a href="<?php echo url('team/modify',array('id'=>$team['id'])); ?>"><?php echo $team['name']; ?></a></h5>
                    </div>
                    <div class="ibox-content">
                        <div class="team-members">
                                <?php foreach ($team['member'] as $k => $v):?>
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
                        </div>
                        <h4>团队简介</h4>
                        <p>
                            <?php echo $team['desc']; ?>
                        </p>
                        
                        <div class="row  m-t-sm">
                            <div class="col-sm-4">
                                <div class="font-bold">发布任务</div>
                                <?php echo $team['count']; ?>
                            </div>
                            <div class="col-sm-4">
                                <div class="font-bold">预计完成时间</div>
                                <?php echo $team['time']; ?>
                            </div>
                            <div class="col-sm-4">
                                <div class="font-bold">成员数量</div>
                                <?php echo $team['amount']; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php echo $teamer->render(); ?>
        </div>
        
    </div>
    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->
    <script>
            $(document).ready(function(){
                var user = $('team-members').img;
                //用户查询接口
                user.on('click',function(){
                    $ajax({
                        type:'post',
                        dataType:'json',
                        url:'',
                        //参数
                        data:'{}',
                        success:function(res){
                               = res
                        },
                        error:function(){
                            console.log('Can not send the param=>user!')
                        }
                    })
                })
            })
        </script>
</body>


</html>