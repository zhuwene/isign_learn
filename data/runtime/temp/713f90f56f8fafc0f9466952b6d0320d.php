<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"themes/admin_simpleboot3/admin/members/sele.html";i:1625292402;s:43:"themes/admin_simpleboot3/public/header.html";i:1625292402;}*/ ?>
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
<style>
    .sele-img{width:100px;height:50px;line-height:50px;}
    .sele-img img{width:100%;border-radius: 50%;}
</style>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('members/index'); ?>">会员管理</a></li>
        <li class="active"><a href="javascript:;">文件管理</a></li>
    </ul>
    <form class="well form-inline margin-top-20" method="post" action="<?php echo url('members/sele'); ?>">
        文件id:
        <input type="text" class="form-control" name="sid" style="width: 200px;"
               value="<?php echo (isset($sele['sid']) && ($sele['sid'] !== '')?$sele['sid']:''); ?>" placeholder="请输入文件id...">
        下载地址:
        <input type="text" class="form-control" name="er_logo" style="width: 200px;"
               value="<?php echo (isset($sele['er_logo']) && ($sele['er_logo'] !== '')?$sele['er_logo']:''); ?>" placeholder="请输入下载地址...">
        <input type="hidden" name="id" value="<?php echo $uid; ?>">
        <input type="submit" class="btn btn-primary" value="搜索"/>
    </form>
    <form class="js-ajax-form" action="" method="post">
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="50">ID</th>
                <th>文件图片</th>
                <th>文件名称</th>
                <th>版本</th>
                <th>Build</th>
                <th>大小</th>
                <th>下载次数</th>
                <th>下载地址</th>
                <th>更新时间</th>

                <th width="90">操作</th>
            </tr>
            </thead>
            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $key=>$vo): ?>
                <tr>
                    <td><b><?php echo $vo['id']; ?></b></td>
                    <td class="sele-img"><img src="<?php echo $vo['img']; ?>" class="headicon"></td>
                    <td><?php echo $vo['name']; ?> ( <?php echo $vo['type']; ?> )</td>
                    <td> <?php echo $vo['version']; ?></td>
                    <td><?php echo $vo['build']; ?></td>
                    <td><?php echo $vo['big']; ?>M</td>
                    <td><?php echo $vo['num']; ?></td>
                    <td><?php echo $vo['er_logo']; ?></td>
                    <td><?php echo date("Y-m-d",$vo['addtime'] ); ?></td>

                    <td>
                        <a href="<?php echo url('members/del',array('id'=>$vo['id'])); ?>">删除</a>

                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </table>

        <ul class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></ul>
    </form>
</div>
<script src="__STATIC__/js/admin.js"></script>

</body>
</html>