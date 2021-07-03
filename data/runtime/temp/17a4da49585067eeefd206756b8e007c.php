<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:34:"themes/97013266/portal/posted.html";i:1625292402;s:32:"themes/97013266/public/head.html";i:1625292402;s:36:"themes/97013266/public/function.html";i:1625292402;s:31:"themes/97013266/public/nav.html";i:1625292402;s:34:"themes/97013266/public/footer.html";i:1625292402;s:35:"themes/97013266/public/scripts.html";i:1625292402;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    
<?php 
/*可以加多个方法哟！*/
function _sp_helloworld(){
	echo "hello ThinkCMF!";
}

function _sp_helloworld2(){
	echo "hello ThinkCMF2!";
}


function _sp_helloworld3(){
	echo "hello ThinkCMF3!";
}

 ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="__TMPL__/public/assets/images/favicon.png" type="image/png">
<link rel="shortcut icon" href="__TMPL__/public/assets/images/favicon.png" type="image/png">
<link href="__TMPL__/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
<link href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<!--七牛样式-->
<link href="/themes/simpleboot3/public/assets/qiniu_sdk/main.css" rel="stylesheet">
<link href="/themes/simpleboot3/public/assets/qiniu_sdk/highlight.css" rel="stylesheet">
<link href="__TMPL__/public/assets/css/tube.css" rel="stylesheet">

<!--[if IE 7]>
<link rel="stylesheet" href="__TMPL__/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__TMPL__/public/assets/css/style.css" rel="stylesheet">
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }

    #backtotop:hover {
        color: #333
    }

    #main-menu-user li.user {
        display: none
    }
</style>
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "__ROOT__/",
        WEB_ROOT: "__WEB_ROOT__/",
        JS_ROOT: "static/js/"
    };

    var log = function(d){
        console.log(d);
    }

</script>
<script src="__TMPL__/public/assets/js/jquery-1.10.2.min.js"></script>
<script src="__TMPL__/public/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="__STATIC__/js/wind.js"></script>
<!--七牛js-->
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/highlight.js"></script>
<!-- <script src="/themes/simpleboot3/public/assets/qiniu_sdk/main.js"></script> -->
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/dist/qiniu.min.js"></script>
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/ui.js"></script>
<!-- /*生成二维码*/ -->
<script src="__TMPL__/public/assets/js/jquery.qrcode.min.js"></script>

<!-- plist转换json -->
<script src="__TMPL__/public/assets/js/plist_parser.js"></script>

    <link href="__TMPL__/public/assets/css/slippry/slippry.css" rel="stylesheet">
    <link href="/static/js/layui/css/layui.css" rel="stylesheet">
    <?php 
    \think\Hook::listen('before_head_end',$temp60e040c8d223e,null,false);
 ?>
</head>
<body class="body-white">
<nav class="navbar navbar-default navbar-fixed-top active" style="box-shadow: 0px 1px 10px #ccc;">
    <div class="container active">

        <div class="navbar-header">
            <a style="background: transparent;margin-top: -15px" class="navbar-brand" href="__ROOT__/">
                <img height="50" src="/static/images/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            <ul id="main-menu" class="nav navbar-nav">
                <?php

function __parse_navigationb44174f73b5cfaca1bb50fbafe3491a2($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigationb44174f73b5cfaca1bb50fbafe3491a2';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> index_page">
    
                        <a href="/" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            首页
                        </a>
                    
    </li>
<?php endif; if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> ">
    
                        <a href="<?php echo url('portal/index/distribute_sign'); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            内测分发
                        </a>
                    
    </li>
<?php endif; if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> ">
    
                        <a href="<?php echo url('portal/index/supper_sign'); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            超级签名
                        </a>
                    
    </li>
<?php endif; if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> index_page_gz ">
    
                        <a href="<?php echo url('portal/index/about'); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            法律法规
                        </a>
                    
    </li>
<?php endif; if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> index_page_gz ">
    
                        <a href="tencent://message/?uin=97013266&Site=https://www.371.li&Menu=yes}" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                            客服
                        </a>
                    
    </li>
<?php endif; if(!empty($menu['children'])): ?>
    <li class="dropdown dropdown-custom dropdown-custom-level-<?php echo $level; ?>">
        
                        <a href="#" class="dropdown-toggle dropdown-toggle-<?php echo $level; ?>" data-toggle="dropdown">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                            <span class="caret"></span>
                        </a>
                    
        <ul class="dropdown-menu dropdown-menu-level-<?php echo $level; ?>">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </ul>
    </li>
<?php endif; endforeach; endif; else: echo "" ;endif; 
}

    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('',0);
if(''==''): ?>
    <?php echo __parse_navigationb44174f73b5cfaca1bb50fbafe3491a2($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigationb44174f73b5cfaca1bb50fbafe3491a2($menus); ?>
    </>
<?php endif; ?>

            </ul>
            
            <ul class="nav navbar-nav navbar-right" id="main-menu-user">
                <!--
                <li class="login">
                    <a class="dropdown-toggle notifactions" href="/index.php/user/notification/index"> <i
                            class="fa fa-envelope"></i> <span class="count">0</span></a>
                </li>
                -->
                <?php 
                    $user=cmf_get_current_user();
                    if($user){
                    $is_login = 1;
                    }else{
                    $is_login = 0;
                    }
                 ?>
                        
            <div class="dev-aa" style="">
                <a href="<?php echo url('user/tube/index'); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>" style="">
                        控制台
                </a>
            </div>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <?php if($is_login == 1): ?>
                    <li class="dropdown user login" style="display: block">
                        <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                            <?php if(empty($user['avatar'])): ?>
                                <img src="__TMPL__/public/assets/images/admin1.png" class="headicon">
                                <?php else: ?>
                                <img src="<?php echo $user['avatar']; ?>" onerror='this.src="__TMPL__/public/assets/images/admin1.png"' class="headicon" width="30"/>
                            <?php endif; ?>
                            <span class="user-nickname"></span><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo cmf_url('user/Profile/center'); ?>"><i class="fa fa-user"></i> &nbsp;个人中心</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo cmf_url('user/Index/logout'); ?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a>
                            </li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="dropdown user offline" style="display: list-item;">
                        <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                            <img width="30" height="30" src="__TMPL__/public/assets/images/admin1.png" class="headicon">
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo cmf_url('user/Login/index'); ?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo cmf_url('user/Register/index'); ?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                        </ul>
                    </li>
                <?php endif; ?>


            </ul>
        </div>
    </div>
</nav>

<style>
    .posted {
        width: 80%;
        margin: 120px auto 0px;
    }

    .posted_h3 {
        font-size: 30px;
        font-weight: 500;
        color: #3c3c3c !important;
    }

    .posted_red {
        color: #f13636;
        height: 50px;
        line-height: 50px;
    }

    .posted_z {
        color: #f13636;
    }

    .posted_fb {
        border: 1px solid #ccc;
        min-height: 400px;
    }

    .btn-default {
        background-color: #28caad !important;
        border-color: #28caad !important;
    }

    .info {
        color: #FF7518 !important;
    }

    .container {
        width: 100% !important;
    }

    table .info a {
        color: #ff1616 !important;
        padding: 10px;
    }

    #success div {
        text-align: center !important;
    }
    .footer-p{
        width: 100%;
        position: fixed;
        bottom: 0;
    }
</style>
<div class="posted">
    <h3 class="posted_h3">发布内测分发应用</h3>
    <div class="posted_red"><?php echo $config['system_message']; ?>
    </div>
    <div class="posted_fb">
        <div class="container" style="padding-top: 60px;">
            <div class="tab-content">
                <div role="tabpanel" style="margin: auto" class="tab-pane fade in active" id="demo"
                     aria-labelledby="demo-tab">

                    <div class="row" style="margin-top: 20px;">
                        <input type="hidden" id="posted" value="<?php echo cmf_url('user/profile/add_qiniu'); ?>">
                        <input type="hidden" id="domain" value="http://<?php echo $data['data']['domain']; ?>/">
                        <input type="hidden" id="uptoken_url" value="<?php echo $data['uptoken_url']; ?>">
                        <input type="hidden" id="bundle" value="<?php echo $data['bundle']; ?>">
                        <div class="col-sm-2 col-sm-offset-5">
                            <div id="container">
                                <a class="btn btn-default btn-lg " id="pickfiles" href="#">
                                    <span> 选择文件</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align:center;" id="details">
                            <div> 您所在会员组剩余可上传 <?php echo $config['app_file_max_size']; ?> MB，超过此额度的应用将上传失败【联系客服：<?php echo $config['service_qq']; ?>】</div>
                            <div>（支持.ipa或.apk文件，不支持IE与safari浏览器）</div>
                        </div>
                        <div style="display:none" id="success" class="col-md-12">
                            <div class="alert-success">
                                队列全部文件处理完毕
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <table class="table table-striped table-hover text-left"
                                   style="margin-top:40px;display:none">
                                <thead>
                                <tr>
                                    <th class="col-md-4">文件</th>
                                    <th class="col-md-2">大小</th>
                                    <th class="col-md-6">上传进度</th>
                                </tr>
                                </thead>
                                <tbody id="fsUploadProgress">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<div class="footer-p">
   
<div id="footer" style="bottom: 0px;height: 80px;background:#ECECEC;width: -webkit-fill-available">
    <?php 
    \think\Hook::listen('footer_start',$temp60e040c8d224b,null,false);
 ?>
    <div class="links">
        <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>" target="<?php echo (isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:''); ?>"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a>&nbsp;
        
<?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <p style="margin-left: 20%;line-height: 30px;color: #999999;">
        <br>
        备案号:
        <?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?>
            <a style="color:#999999;" href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a>
            <?php else: ?>
            请在后台设置"网站信息"设置"备案信息"
        <?php endif; ?>
    </p>
</div>

 
</div>

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="__TMPL__/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
<script src="__STATIC__/js/frontend.js"></script>
<script>
    $(function () {

        $("#main-menu li.dropdown").hover(function () {
            $(this).addClass("open");
        }, function () {
            $(this).removeClass("open");
        });

        $("#main-menu li").click(function () {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        })

        $.post("<?php echo url('user/index/isLogin'); ?>", {}, function (data) {
            // console.log(data);
            if (data.code == 1) {
                if (data.data.user.avatar) {
                }

                $("#main-menu-user span.user-nickname").text(data.data.user.user_nickname ? data.data.user.user_nickname : data.data.user.user_login);
                $("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

            }

            if (data.code == 0) {
                $("#main-menu-user li.login").hide();
                $("#main-menu-user li.offline").show();
            }

        });

        ;(function ($) {
            $.fn.totop = function (opt) {
                var scrolling = false;
                return this.each(function () {
                    var $this = $(this);
                    $(window).scroll(function () {
                        if (!scrolling) {
                            var sd = $(window).scrollTop();
                            if (sd > 100) {
                                $this.fadeIn();
                            } else {
                                $this.fadeOut();
                            }
                        }
                    });

                    $this.click(function () {
                        scrolling = true;
                        $('html, body').animate({
                            scrollTop: 0
                        }, 500, function () {
                            scrolling = false;
                            $this.fadeOut();
                        });
                    });
                });
            };
        })(jQuery);

        $("#backtotop").totop();


    });
</script>



</body>
<script src="/static/js/layui/layui.all.js"></script>
<script src="/dist/app-info-parser.js"></script>

<!--七牛js-->
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/highlight.js"></script>
<!-- <script src="/themes/simpleboot3/public/assets/qiniu_sdk/main.js"></script> -->
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/dist/qiniu.min.js"></script>
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/ui.js"></script>
<script src="/themes/simpleboot3/public/assets/qiniu_sdk/main.js"></script>

<script src="/static/js/zipjs/zip.js"></script>
<script src="/static/js/base.js"></script>
<script src="/static/js/base64.min.js"></script>
<script type="text/javascript">
    var server = "http://<?php echo $data['data']['domain']; ?>/";
    zip.workerScripts = {
        deflater: ['/static/js/zipjs/z-worker.js', '/static/js/zipjs/deflate.js'],
        inflater: ['/static/js/zipjs/z-worker.js', '/static/js/zipjs/inflate.js']
    };

    var config = {
        'file_size':<?php echo $config['app_file_max_size']; ?>,
    };

    var appInfo;

    function fileSelect() {
        const files = document.getElementsByName('file')[0].files;

        var re = /.*\.ipa$/gi;
        var reApk = /.*\.apk$/gi;
        if(!re.test(files[0].name) && !reApk.test(files[0].name)){
            return;
        }

        const parser = new AppInfoParser(files[0])
        parser.parse().then(result => {
            appInfo = result;
            console.log('app info ----> ', result)
            console.log('icon base64 ----> ', result.icon)
        }).catch(err => {
            console.log('err ----> ', err)
        })
    }
</script>
</html>
