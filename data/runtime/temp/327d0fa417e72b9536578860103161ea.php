<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:33:"themes/97013266/portal/index.html";i:1625292402;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?> | <?php echo (isset($site_info['site_seo_title']) && ($site_info['site_seo_title'] !== '')?$site_info['site_seo_title']:''); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>">
    <link rel="shortcut icon" href="__TMPL__/public/assets/images/favicon.ico" type="image/png">
    <link href="__TMPL__/public/static/css/pc.css" type="text/css" rel="stylesheet"/>
    <style>
        .navbar-custom .navbar-brand img{
            height: 40px;
        }
        .btn-round1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #fcfcfc;
        }
        @media only screen and (max-width: 767px){
            .navbar-custom, .navbar-custom.affix {
                padding: 0;
            }
            .navbar-custom .navbar-brand{
                margin-top: 6px;
            }
            .navbar-custom.affix .navbar-brand{
                margin-top: 12px;
            }
            .navbar-custom .navbar-brand img{
                height: 28px;
            }
        }

    </style>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="70">
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!--begin 导航-->
    <header>
        <nav id="navbar" class="navbar navbar-custom navbar-fixed-top" data-spy="affix" data-offset-top="70">
            <div class="container">
                <div class="row">
                    <div class="navbar-header page-scroll">
                        <a class="navbar-brand page-scroll logo-light" href="#">
                            <img alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>" src="__TMPL__/public/static/image/logo2.png" >
                        </a>
                        <a class="navbar-brand page-scroll logo-clr" href="#">
                            <img alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>" src="__TMPL__/public/static/image/logo1.png">
                        </a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="right-nav text-right">
                            <ul class="nav navbar-nav menu">
                                <li>
                                    <a href="#home">首页</a>
                                </li>
                                <li>
                                    <a href="#pair">服务流程</a>
                                </li>
                                <li>
                                    <a href="#blog">使用场景</a>
                                </li>
                                <li>
                                    <a href="#slip">视频演示</a>
                                </li>
                                <li>
                                    <a href="#question">常见问题</a>
                                </li>
                                <li>
                                    <a href="#address">联系我们</a>
                                </li>
                            </ul>
                            <?php 
                                $user=cmf_get_current_user();
                                if($user){
                                    $is_login = 1;
                                }else{
                                    $is_login = 0;
                                }
                             ?>
                            <div class="nav-btn" style="margin-top: 5px;">
                                <?php if($is_login == 1): ?>
                                    <a href="<?php echo cmf_url('user/Profile/center'); ?>" class="btn grdnt-purple" style="color: #fff">
                                        个人中心
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo cmf_url('user/Login/index'); ?>" class="btn grdnt-purple" style="color: #fff">
                                        立即注册
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="home" class="hero grdnt-purple bg-animate style-wave bg-trans-1">
            <div class="banner">
                <div class="container">
                    <div class="row hero-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="intro-text light">
                                    <h2>
                                        IOS APP 超级签名
                                    </h2>
                                    <h2>
                                        签名一次 安装永不影响
                                    </h2>
                                    <div class="spce"></div>
                                    <p class="large">
                                        告别掉线烦恼，每台设备下载多个应用，只扣一次费
                                    </p>
                                    <p class="large">
                                        告别手动填写邀请码，精准客户来源分析
                                    </p>
                                    <div class="btn-holder">
                                        <a class="btn btn-white" data-toggle="modal" data-target=".bs-example-modal-sm">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span>联系客服</span>
                                        </a>
                                        <a class="btn btn-border" href="/user/tube/index.html" target="_blank">
                                            <i class="fa fa-rocket" aria-hidden="true"></i>
                                            <span>发布应用</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-pre col-md-offset-1 col-md-5 col-sm-6">
                                <div class="slide-side text-center">
                                    <img class="phone" alt="" src="__TMPL__/public/static/image/phone.png">
                                    <div class="owl-carousel nplr app-slide-auto">
                                        <div>
                                            <img alt="单身详情" src="__TMPL__/public/static/image/screen1.png" style="width: 236px">
                                        </div>
                                        <div>
                                            <img alt="5天实验室" src="__TMPL__/public/static/image/screen1.png" style="width: 236px">
                                        </div>
                                        <div>
                                            <img alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>首页" src="__TMPL__/public/static/image/screen1.png" style="width: 236px">
                                        </div>
                                    </div>
                                </div>
                                <a class="btn-round video btn-round1" href="/">
                                    <i class="fa fa-play clip-txt" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--end   导航-->

    <!--begin 7天实验室-->
    <section id="pair" class="sec-pad-sm bg-animate">
        <div class="container">
            <div class="row">
                <div class="section-text text-center">
                    <h3 class="clr-blue">我们优势</h3>
                    <p class="large">
                        自研发的超级签名技术，为您的苹果应用保驾护航
                    </p>
                </div>
                <div class="items">
                    <div class="text-center owl-carousel col-feat feat-slide grad-prple shad-item col-content hover">
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-mobile"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>永不掉签 免费更新</h5>
                            <p>特有机制，永无掉签烦恼，随时可免费更新应用</p>
                        </div>
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-spray"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>签名账号独立</h5>
                            <p>签名账号每个用户独立，避免互相污染</p>
                        </div>
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-search"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>安装统计报表</h5>
                            <p>每个安装设备均有统计，确保设备数量全程使用透明</p>
                        </div>
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-harddrives"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>技术稳定 24h客服</h5>
                            <p>完成4解决闪退兼容性好，技术客服随时在线</p>
                        </div>
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-comments"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>没有限制	</h5>
                            <p>同一台设备不限app，不限时间，不限更新次数。</p>
                        </div>
                        <div data-toggle="modal" data-target=".bs-example-modal-sm">
                            <div class="icon-md">
                                <span class="clip-txt ti-bolt"></span>
                            </div>
                            <div class="spce sm"></div>
                            <h5>无需越狱</h5>
                            <p>无需越狱，无需设备UDID，无需企业签名，按需购买.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rect1">
            <img src="__TMPL__/public/static/image/shape-1.png">
        </div>
        <div class="rect2">
            <img src="__TMPL__/public/static/image/shape-2.png">
        </div>
        <div class="rect3">
            <img src="__TMPL__/public/static/image/shape-3.png">
        </div>
        <div class="rect4">
            <img src="__TMPL__/public/static/image/shape-4.png">
        </div>
    </section>
    <!--end  7天实验室-->

    <!--begin  数据统计-->
    <section id="success" class="sec-pad-sm light grdnt-purple">
        <div class="container">
            <div class="row">
                <div class="static-warapper text-center grad-prple">
                    <div class="col-sm-3 counter-wrapper res-margin-sm">
                        <div class="top-row">
                            <div class="icon icon-md">
                                <span class="ti-heart"></span>
                            </div>
                            <h2><span class="counter">10000</span>+</h2>
                        </div>
                        <p>上传应用数</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper res-margin-sm">
                        <div class="top-row">
                            <div class="icon icon-md">
                                <span class="ti-import"></span>
                            </div>
                            <h2><span class="counter">50000</span>+</h2>
                        </div>
                        <p>签名应用数</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper">
                        <div class="top-row">
                            <div class="icon icon-md">
                                <span class="ti-plug"></span>
                            </div>
                            <h2><span class="counter">28000000</span>+</h2>
                        </div>
                        <p>累计下载次数</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper">
                        <div class="top-row">
                            <div class="icon icon-md">
                                <span class=" ti-comments-smiley"></span>
                            </div>
                            <h2><span class="counter">99.8</span></h2>
                        </div>
                        <p>客户满意度</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end   数据统计-->

    <!--begin  成功故事-->
    <section id="blog" class="sec-pad-lg bg-gray">
        <div class="container">
            <div class="row">
                <div class="section-text text-center">
                    <h3 class="clr-blue">服务流程</h3>
                    <p class="large">从购买到使用，步骤清晰有保障</p>
                </div>
                <div class="post row text-center">
                    <div class="col-sm-3 counter-wrapper res-margin-sm">
                        <div class="top-row">
                            <div class="icon icon-lg">
                                <span class="clip-txt ti-mobile"></span>
                            </div>
                            <h3>上传IPA包</h3>
                        </div>
                        <p>只需要在我们平台上传IPA包即可</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper res-margin-sm">
                        <div class="top-row">
                            <div class="icon icon-lg">
                                <span class="clip-txt ti-mobile"></span>
                            </div>
                            <h3>按需购买</h3>
                        </div>
                        <p>购买数量可以自定义，不浪费</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper">
                        <div class="top-row">
                            <div class="icon icon-lg">
                                <span class="clip-txt ti-mobile"></span>
                            </div>
                            <h3>签名成功</h3>
                        </div>
                        <p>整个过程全自动</p>
                    </div>
                    <div class="col-sm-3 counter-wrapper">
                        <div class="top-row">
                            <div class="icon icon-lg">
                                <span class="clip-txt ti-mobile"></span>
                            </div>
                            <h3>生成链接</h3>
                        </div>
                        <p>生成专属下载页面，发布供用户下载</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end    成功故事-->

    <!--begin 免费互动-->
    <section id="slip" class="sec-pad-lg brdr-btm pb-0 light grdnt-purple">
        <div class="container">
            <div class="row">
                <div class="overview flx-container align-flx-center flx-off-xs row col-md-10 col-md-offset-1">
                    <div class="col-sm-6 res-margin-sm">
                        <div class="overview-text res-center-sm">
                            <h3>超低价格</h3>
                            <div class="spce sm"></div>
                            <p>1、因机制与企业签名不同，告别掉签</p>
                            <p>2、告别掉签风险，只需支付一次获客成本即可</p>
                            <p>3、同一台设备下载安装该应用不限制下载次数</p>
                            <div class="btn-holder grad-prple">
                                <a class="btn grdnt-purple" data-toggle="modal" data-target=".bs-example-modal-sm">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>联系客服</span>
                                </a>
                                <a class="btn grdnt-purple fill" data-toggle="modal" data-target=".bs-example-modal-sm">
                                    <i class="fa fa-rocket clip-txt" aria-hidden="true"></i>
                                    <span class="clip-txt">发布应用</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-offset-1">
                        <div class="overview-img animated wow fadeIn" data-wow-delay=".2s">
                            <img alt="" src="__TMPL__/public/static/image/img-d.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end   免费互动-->

    <!--begin  亲友推荐-->
    <section id="broker" class="sec-pad-lg">
        <div class="section-text text-center">
            <h3 class="clr-blue">使用场景</h3>
            <p class="large">我们能为你定制各种使用场景</p>
        </div>
        <div class="owl-carousel quote">
            <div class="quote-item">
                <div class="quote-text">
                    <p>
                        对于首次公开下单的APP,一般下载量不大,但是重要性不言而喻,选择超级签名使用您自己的个人开发者账号即可自动化签名，用户扫码一键安装，告别掉签，提高留存，给您首批种子用户带来最好的体验。
                    </p>
                    &nbsp;
                </div>
                <div class="spce md"></div>
                <img alt="" src="__TMPL__/public/static/image/broker5.jpg">
                <div class="reg-tag clearfix">
                    <h6 class="heading">首次公开APP</h6>
                    <p>互联网</p>
                </div>
            </div>

            <div class="quote-item">
                <div class="quote-text">
                    <p>
                        对于相对成熟并且下载量极大的APP，可通过超级签名有效打造您自己的签名，相较于企业签名的高掉签风险，超级签名的高成本，超级签名私有版只需您有足够的个人账号并且购买价格低廉的签名次数，即可开启自己的签名旅程！
                    </p>
                </div>
                <div class="spce md"></div>
                <img alt="" src="__TMPL__/public/static/image/broker1.jpg">
                <div class="reg-tag clearfix">
                    <h6 class="heading">成熟性APP</h6>
                    <p>游戏</p>
                </div>
            </div>

            <div class="quote-item">
                <div class="quote-text">
                    <p>
                        对于公司团队内测，超级签名告别频繁添加UDID的流程、在线随传随用、方便快捷！
                    </p>
                    &nbsp;</br>
                    &nbsp;</br>
                    &nbsp;</br>
                </div>
                <div class="spce md"></div>
                <img alt="" src="__TMPL__/public/static/image/broker6.jpg">
                <div class="reg-tag clearfix">
                    <h6 class="heading">内侧型APP</h6>
                    <p>政府机构</p>
                </div>
            </div>

            <div class="quote-item">
                <div class="quote-text">
                    <p>
                        对于开发外包公司多个应用使用专属私有版，测试人员可随意安装同一账号下的任何应用，随时更新随时提醒，且每个终端下载不同app仅消耗一个安装量。
                    </p>
                    &nbsp;</br>
                    &nbsp;</br>
                </div>
                <div class="spce md"></div>
                <img alt="" src="__TMPL__/public/static/image/broker4.jpg">
                <div class="reg-tag clearfix">
                    <h6 class="heading">外包型APP</h6>
                    <p>设计</p>
                </div>
            </div>

            <div class="quote-item">
                <div class="quote-text">
                    <p>
                        对于自动化签名，超级签名可帮您排除难点，轻松自动化签名，一键分发，随时观察使用情况，分析用户数据。
                    </p>
                    &nbsp;</br>
                    &nbsp;</br>
                </div>
                <div class="spce md"></div>
                <img alt="" src="__TMPL__/public/static/image/broker2.jpg">
                <div class="reg-tag clearfix">
                    <h6 class="heading">稳定性APP</h6>
                    <p>外贸</p>
                </div>
            </div>
        </div>
    </section>
    <!--end    亲友推荐-->

    <!--begin  单身社区-->
    <section id="topic" class="grdnt-purple parallaxie style-wave-alt overly" style='background: url("__TMPL__/public/static/image/bg-parallax.jpg")'>
        <div class="container sec-pad-lg">
            <div class="row">
                <div class="text-center light">
                    <h3>视频演示</h3>
                    <p class="large">视频下为真实下载应用，简单易用</p>
                </div>
                <div class="text-center grad-prple">
                    <a class="btn-round video" href="http://img001.leshangbao.com/help.mp4">
                        <i class="fa fa-play clip-txt" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end    单身社区-->

    <!--begin 常见问题-->
    <section id="question" class="sec-pad-lg grad-prple">
        <div class="container">
            <div class="row">
                <div class="section-text text-center">
                    <h3 class="clr-blue">常见问题</h3>
                    <p class="large">使用<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>经常遇到的一些问题</p>
                </div>
                <div class="row"  data-toggle="modal" data-target=".bs-example-modal-sm">
                    <div class="col-md-10 col-md-offset-1 faq">
                        <div class="panel-group res-margin" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            同一台设备安装不同应用或版本，消耗设备量和签名次数吗？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        使用专属私有版不消耗，同一台设备无论安装多少 App、或多次安装同一个 App，只消耗一个设备量和签名次数。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            可以支持推送吗？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        我们支持极光等三方和自建推送服务器。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            签名需要多长时间？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        我们的签名是完全自动化的，一般可在数秒内完成。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            费用是怎么收取的？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        我们有价格表，按照年付费的，价格表请联系客服索取
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            更新包怎么办？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        你需要再你的APP上面做一个带有https链接的ipa包即可，用户直接更新，无需重新下载操作。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            需要提供 App 的源码吗？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        不需要提供，仅需要提供 ipa 格式的安装包即可。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            签名的 App 可以在 App Store 搜索到吗?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        不能，应用管理后的 App 可以直接将链接发给用户安装，无需越狱，无需苹果账号，无需苹果审核。
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" style="margin-top: 20px;">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne" class="">
                                            <i class="more-less glyphicon glyphicon-minus"></i>
                                            对安装包的大小是否有限制？
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in bg-light" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        应用包大小建议不超过 150M ，最高不能大于 2048M 。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end  常见问题-->

    <!--begin 底部-->
    <footer id="address" class="footer-wrapper grdnt-purple sec-pad light">
        <div class="container footer-content">
            <div class="row">
                <div class="section-text text-center">
                    <h3 class="clr-blue">联系我们</h3>
                    <p class="large">扫码添加客服微信</p>
                </div>
                <ul class="social-holder text-center light">
                    <li style="margin-right: 20px;">
                        <img style="width: 120px;height: 120px;border: 1px solid #fafafa" src="__TMPL__/public/static/image/code-wechat.png">
                        <h6 style="margin-top: 5px;font-size: 14px;">扫码添加微信</h6>
                    </li>
                    <li>
                        <img style="background-color:#fff;width: 120px;height: 120px;padding:6px;border: 1px solid #fafafa" src="__TMPL__/public/static/image/code-qq.png">
                        <h6 style="margin-top: 5px;font-size: 14px;">扫码添加QQ</h6>
                    </li>
                </ul>
                <div class="spce"></div>
            </div>
        </div>
    </footer>
    <!--begin 底部-->

    <!-- begin 微信公众号弹窗-->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="padding: 20px;text-align: center;">
                <p style="color: #000;font-size: 18px;font-weight: bold;"><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>微信号</p>
                <img style="border: 1px solid #f5e0e8;width: 100%;" src="__TMPL__/public/static/image/code-wechat.png" class="img-responsive" alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>公众号">
                <p style="margin-bottom: 0;margin-top: 10px;">扫码添加微信</p>
            </div>
        </div>
    </div>
    <!-- end  微信公众号弹窗-->

    <!--begin 服务微信-->
    <div class="modal fade bs-own-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="padding: 20px;text-align: center;">
                <p style="color: #000;font-size: 18px;font-weight: bold;"><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>微信号</p>
                <img style="border: 1px solid #f5e0e8;padding: 8px;" src="__TMPL__/public/static/image/code-wechat.png" class="img-responsive" alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>公众号">
                <p style="margin-bottom: 0;margin-top: 10px;">扫码添加微信</p>
            </div>
        </div>
    </div>
    <!--end   服务微信-->

    <script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="__TMPL__/public/static/js/pc.js"></script>

	      <div style="overflow: hidden;">
            <audio src="__TMPL__/public/static/超级签名搭建QQ208620005.mp3" id="Jaudio" class="media-audio" autoplay="" preload="" loop="loop"></audio>
        </div>
		    <script src="__TMPL__/public/static/js/1.js"></script>
<script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>

