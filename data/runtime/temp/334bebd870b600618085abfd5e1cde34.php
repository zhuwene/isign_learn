<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"themes/admin_simpleboot3/admin/setting/password.html";i:1625292402;s:43:"themes/admin_simpleboot3/public/header.html";i:1625292402;}*/ ?>
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
			<li><a href="<?php echo url('user/userInfo'); ?>"><?php echo lang('ADMIN_USER_USERINFO'); ?></a></li>
			<li class="active"><a href="<?php echo url('setting/password'); ?>"><?php echo lang('ADMIN_SETTING_PASSWORD'); ?></a></li>
		</ul>
		<form class="form-horizontal js-ajax-form margin-top-20" method="post" action="<?php echo url('setting/passwordPost'); ?>">
			<div class="form-group">
				<label for="input-old-password" class="col-sm-2 control-label"><?php echo lang('OLD_PASSWORD'); ?></label>
				<div class="col-md-6 col-sm-10">
					<input type="password" class="form-control" id="input-old-password" name="old_password">
				</div>
			</div>
			<div class="form-group">
				<label for="input-password" class="col-sm-2 control-label"><?php echo lang('NEW_PASSWORD'); ?></label>
				<div class="col-md-6 col-sm-10">
					<input type="password" class="form-control" id="input-password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label for="input-repassword" class="col-sm-2 control-label"><?php echo lang('CONFIRM_PASSWORD'); ?></label>
				<div class="col-md-6 col-sm-10">
					<input type="password" class="form-control" id="input-repassword" name="re_password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('SAVE'); ?></button>
				</div>
			</div>
		</form>
	</div>
	<script src="__STATIC__/js/admin.js"></script>
</body>
</html>