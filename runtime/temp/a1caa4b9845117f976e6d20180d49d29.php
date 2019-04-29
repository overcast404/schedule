<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\fastadmin\public/../application/index\view\user\changepwd.html";i:1547349022;s:55:"D:\fastadmin\application\index\view\common\sidenav.html";i:1554886405;}*/ ?>
<div id="content-container" class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidenav">
    <?php echo hook('user_sidenav_before'); ?>
    <ul class="list-group">
        <li class="list-group-heading"><?php echo __('User center'); ?></li>
        <li class="list-group-item <?php echo $config['actionname']=='index'?'active':''; ?>"> <a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i> <?php echo __('User center'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='profile'?'active':''; ?>"> <a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i> <?php echo __('Profile'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='changepwd'?'active':''; ?>"> <a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i> <?php echo __('Change password'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='logout'?'active':''; ?>"> <a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> <?php echo __('Sign out'); ?></a> </li>
    </ul>
    <?php echo hook('user_sidenav_after'); ?>
</div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="page-header"><?php echo __('Change password'); ?></h2>
                    <form id="changepwd-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
                        <?php echo token(); ?>
                        <div class="form-group">
                            <label for="oldpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('Old password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="oldpassword" name="oldpassword" value="" data-rule="required" placeholder="<?php echo __('Old password'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('New password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="newpassword" name="newpassword" value="" data-rule="required" placeholder="<?php echo __('New password'); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="renewpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('Renew password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="renewpassword" name="renewpassword" value="" data-rule="required" placeholder="<?php echo __('Renew password'); ?>" />
                            </div>
                        </div>

                        <div class="form-group normal-footer">
                            <label class="control-label col-xs-12 col-sm-2"></label>
                            <div class="col-xs-12 col-sm-8">
                                <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('Submit'); ?></button>
                                <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>