<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"themes/admin_simpleboot3/user/admin_index/auth_info_manage.html";i:1625292402;s:43:"themes/admin_simpleboot3/public/header.html";i:1625292402;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="__TMPL__/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="__TMPL__/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "__ROOT__/",
            WEB_ROOT: "__WEB_ROOT__/",
            JS_ROOT: "static/js/",
            APP: '<?php echo \think\Request::instance()->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="__STATIC__/js/wind.js"></script>
    <script src="__TMPL__/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
</head>
<body>
<div class="wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a>认证信息管理</a></li>
    </ul>
    <form class="well form-inline margin-top-20" method="post" action="<?php echo url('user/adminIndex/index'); ?>">
        用户ID：
        <input class="form-control" type="text" name="uid" style="width: 200px;" value="<?php echo input('request.uid'); ?>"
               placeholder="请输入用户ID">
        关键字：
        <input class="form-control" type="text" name="keyword" style="width: 200px;" value="<?php echo input('request.keyword'); ?>"
               placeholder="用户名/昵称/邮箱">
        <input type="submit" class="btn btn-primary" value="搜索"/>
        <a class="btn btn-danger" href="<?php echo url('user/adminIndex/index'); ?>">清空</a>
    </form>
    <form method="post" class="js-ajax-form">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th><?php echo lang('USERNAME'); ?></th>
                <th>手机</th>
                <th>真实姓名</th>
                <th>身份证号码</th>
                <th>身份证正面</th>
                <th>身份证反面</th>
                <th>审核状态</th>
                <th>提交时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                $user_statuses = array(0=>'审核中',1=>'审核通过');
             if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['user_nickname']; ?>(<?php echo $vo['user_id']; ?>)</td>
                    <td><?php echo $vo['mobile']; ?></td>
                    <td><?php echo $vo['user_real_name']; ?></td>
                    <td><?php echo $vo['card_number']; ?></td>
                    <td><img width="25" height="25" src="<?php echo $vo['card_img1']; ?>"/></td>
                    <td><img width="25" height="25" src="<?php echo $vo['card_img2']; ?>"/></td>
                    <td><?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></td>
                    <td><?php echo $user_statuses[$vo['status']]; ?></td>
                    <td>
                        <?php if($vo['status'] == 1): ?>
                            <a href="<?php echo url('adminIndex/delete_auth',array('id'=>$vo['id'],'status'=>1)); ?>"
                               class="js-ajax-dialog-btn">删除记录</a>
                            <?php else: ?>

                            <a href="<?php echo url('adminIndex/examine_auth',array('id'=>$vo['id'],'status'=>1)); ?>"
                               class="js-ajax-dialog-btn">审核通过</a>
                            <br/>
                            <a href="<?php echo url('adminIndex/examine_auth',array('id'=>$vo['id'],'status'=>2)); ?>"
                               class="js-ajax-dialog-btn">拒绝</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="pagination"><?php echo $page; ?></div>
    </form>
</div>
<script src="__STATIC__/js/admin.js"></script>
</body>
</html>