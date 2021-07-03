<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"themes/97013266/user/register.html";i:1625292402;s:32:"themes/97013266/public/head.html";i:1625292402;s:36:"themes/97013266/public/function.html";i:1625292402;s:35:"themes/97013266/public/scripts.html";i:1625292402;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <link href="__TMPL__/public/assets/css/tube.css" rel="stylesheet">
    
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

</head>
<style>
.login-box{
    width:1050px;
    height:556px;
    background:rgba(255,255,255,1);
    box-shadow:0px 3px 7px 0px rgba(0, 0, 0, 0.35);
    border-radius:10px;
    margin: 0 auto;
    margin-top: 50px;
    overflow: hidden;
}
.login-box-logo{
    width: 221px;
    height: 61px;
    margin-bottom: 36px;
}
.login-box-bottom{
    width: 100%;
    margin-top: 10px;
}
.login-box-bottom-left{
    width: 463px;
    height: 361px;
    margin-left: 29px;
    float: left;
    margin-top: 60px;
}
.login-box-bottom-right{
    width: 450px;
    float: right;
    margin-right: 29px;
}
.form-group input{
    width: 420px;
    background: #fff;
    border: 0;
    outline:none;
    height: 50px;
    margin-top: 10px;
}
.captcha-f{
    width: 420px;
    height: 50px;
    border-bottom: solid 1px #DBDBDB;
    margin-bottom: 10px;
}
.captcha-f input{
    width: 259px;
    height: 49px;
    background: #fff;
    border: 0;
    outline:none;
}
.form-group-ou input{
    border-bottom: solid 1px #DBDBDB;
}
.register-left{
    float: left;
}
.register-left a{
    color: #3BCDAE;
    font-size: 16px;
}
.findpassword-right{
    float: right;;
    margin-right: 29px;
}
.findpassword-right a{
    color: #999;
    font-size: 16px;
}
.phone-all input{
    width: 200px;
    height: 49px;
    margin: 0;
}
.phone-all{
    width: 420px;
    height: 50px;
    border-bottom: solid 1px #DBDBDB;
}
.form-group-p a{
    color: #3BCDAE;
}
</style>
<body class="body-white">


    <div class="login-box">
        <div class="login-box-bottom">
            <div class="login-box-bottom-left">
                <div class="login-box-logo">
                    <img width="100%" src="/static/images/logo.png">
                </div>
                <img width="100%" src="/themes/simpleboot3/public/assets/images/login_bac.png">
            </div>

            <div class="login-box-bottom-right">
                <h2 class="text-center user-login">用户注册</h2>
                <?php 
                    $mobile_tab_active=empty($theme_vars['enable_mobile'])?'':'active';
                    $email_tab_active=empty($theme_vars['enable_mobile'])?'active':'';
                 ?>
                <!--            <?php if(!(empty($theme_vars['enable_mobile']) || (($theme_vars['enable_mobile'] instanceof \think\Collection || $theme_vars['enable_mobile'] instanceof \think\Paginator ) && $theme_vars['enable_mobile']->isEmpty()))): ?>-->
                <!--                <ul class="nav nav-tabs nav-justified" id="myTab" style="margin-bottom: 15px;">-->
                <!--                    <li class="active"><a href="#mobile" data-toggle="tab">手机注册</a></li>-->
                <!--                    <li><a href="#email" data-toggle="tab">邮箱注册</a></li>-->
                <!--                </ul>-->
                <!--            <?php endif; ?>-->

                <?php 
                    $is_open_registration = cmf_is_open_registration();
                 ?>

                <div class="tab-content">
                    <?php if(!(empty($theme_vars['enable_mobile']) || (($theme_vars['enable_mobile'] instanceof \think\Collection || $theme_vars['enable_mobile'] instanceof \think\Paginator ) && $theme_vars['enable_mobile']->isEmpty()))): ?>

                        <div class="tab-pane <?php echo $mobile_tab_active; ?>" id="mobile">
                            <form class="js-ajax-form" action="<?php echo url('user/Register/doRegister'); ?>" method="post">

                                <div class="form-group form-group-ou">
                                    <input type="text" name="username" placeholder="手机号" id="js-mobile-input">
                                </div>

                                <?php if(empty($is_open_registration) || (($is_open_registration instanceof \think\Collection || $is_open_registration instanceof \think\Paginator ) && $is_open_registration->isEmpty())): ?>
                                    <div class="form-group phone-all">
                                        <div style="position: relative;">
                                            <input type="text" name="code" placeholder="手机验证码">
                                            <a class="btn btn-success js-get-mobile-code"
                                               style="width: 130px;position: absolute;top:10px;right: 10px;background: #fff;border: 0;color: #3BCDAE;"
                                               data-wait-msg="[second]秒后才能再次获取" data-mobile-input="#js-mobile-input"
                                               data-url="<?php echo url('user/VerificationCode/send'); ?>"
                                               data-init-second-left="60">获取手机验证码</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group form-group-ou">
                                    <input type="text" name="user_nickname" placeholder="用户名">
                                </div>

                                <div class="form-group form-group-ou">
                                    <input type="password" name="password" placeholder="密码" >
                                </div>

                                <div class="captcha-f">
                                    <div style="">
                                        <input class="phone-code" type="text" name="captcha" placeholder="验证码" style="float: left;">
                                        <?php $__CAPTCHA_SRC=url('/captcha/new').'?height=38&width=160&font_size=20'; ?>
<img src="<?php echo $__CAPTCHA_SRC; ?>" onclick="this.src='<?php echo $__CAPTCHA_SRC; ?>&time='+Math.random();" title="换一张" class="captcha captcha-img verify_img" style="cursor: pointer;"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="form-group-p">
                                        “注册” 即表示您同意并愿意遵守 <a href="<?php echo cmf_url('portal/index/protocol'); ?>">服务协议</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block js-ajax-submit" type="submit" data-wait="1500" style="width:418px; height:56px; background:#15EBBF;border-radius:10px;border: none;font-size: 22px;">注册
                                    </button>
                                </div>

                                <div class="form-group" style="">
                                    <p>
                                        已有账号? <a style="color:#3BCDAE;" href="<?php echo cmf_url('user/Login/index'); ?>">去登录</a>
                                    </p>
                                    
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                    <div class="tab-pane <?php echo $email_tab_active; ?>" id="email">
                        <form class="js-ajax-form" action="<?php echo url('user/register/doRegister'); ?>" method="post">

                            <div class="form-group">
                                <input type="text" name="username" placeholder="邮箱" class="form-control"
                                       id="js-email-input">
                            </div>

                            <?php if(empty($is_open_registration) || (($is_open_registration instanceof \think\Collection || $is_open_registration instanceof \think\Paginator ) && $is_open_registration->isEmpty())): ?>
                                <div class="form-group">
                                    <div style="position: relative;">
                                        <input type="text" name="code" placeholder="邮件验证码" style="width:170px;"
                                               class="form-control">
                                        <a class="btn btn-success js-get-email-code"
                                           style="width: 163px;position: absolute;top:0;right: 0;"
                                           data-wait-msg="[second]秒后才能再次获取" data-email-input="#js-email-input"
                                           data-url="<?php echo url('user/VerificationCode/send'); ?>"
                                           data-init-second-left="60">获取邮箱验证码</a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="密码" class="form-control">
                            </div>

                            <div class="form-group">
                                <div style="position: relative;">
                                    <input type="text" name="captcha" placeholder="验证码" class="form-control"
                                           style="width: 170px;float: left;margin-right: 30px">
                                    <?php $__CAPTCHA_SRC=url('/captcha/new').'?height=38&width=160&font_size=20'; ?>
<img src="<?php echo $__CAPTCHA_SRC; ?>" onclick="this.src='<?php echo $__CAPTCHA_SRC; ?>&time='+Math.random();" title="换一张" class="captcha captcha-img verify_img" style="cursor: pointer;"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block js-ajax-submit" type="submit" data-wait="1500"
                                        style="margin-left: 0px;">确定注册
                                </button>
                            </div>

                            <div class="form-group">
                                <p>
                                    已有账号? <a style="color: #3BCDAE;" href="<?php echo cmf_url('user/Login/index'); ?>">去登录</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>



<!-- /container -->

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
</html>