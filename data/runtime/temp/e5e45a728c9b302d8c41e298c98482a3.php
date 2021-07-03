<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"themes/97013266/portal/posted/supindex.html";i:1625292402;s:32:"themes/97013266/public/head.html";i:1625292402;s:36:"themes/97013266/public/function.html";i:1625292402;s:35:"themes/97013266/public/nav_new.html";i:1625292402;}*/ ?>
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


    <link href="__TMPL__/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/js/layui/css/layui.css" media="all">
    
    <link href="__TMPL__/public/assets/css/tube.css" rel="stylesheet">
    <link href="__TMPL__/public/assets/css/posted.css" rel="stylesheet">

</head>
<body class="body-white" style="background: #ECEEEE;">
<nav class="navbar navbar-default navbar-fixed-top active" style="box-shadow: 0px 1px 10px #ccc;">
    <div class=" active" style="width: 90%;margin: 0 auto;">

        <div class="navbar-header">
            <a style="background: transparent;margin-top: -15px" class="navbar-brand" href="__ROOT__/">
                <img height="50" src="/static/images/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            
            
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


<div class="tube_left pad-left_right">
    <!--  我的应用左侧 -->
    <div class="col-sm-2 pad-left_right tube-left1">
    <a href="<?php echo cmf_url('user/tube/index'); ?>">
        <div class="col-sm-12 tube-lgs tube-bgs"><i class="fa"><img src="__TMPL__/public/assets/images/summarya.png"></i><span>概述</span></div>
    </a>
    <a href="/user/profile/center.html">
        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa"><img src="__TMPL__/public/assets/images/me.png"></i><span>个人中心</span></div>
    </a>
    <!-- <a href="/portal/index/posted">
        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa fa-plus-circle"></i><span>发布应用</span></div>
    </a> -->
    <a href="/portal/posted/index">
        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa"><img src="__TMPL__/public/assets/images/publish.png"></i><span>内测分发应用</span></div>
    </a>
    <a href="/portal/posted/supindex">
        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa"><img src="__TMPL__/public/assets/images/qianming1.png"></i><span>超级签名应用</span></div>
    </a>
    <a href="/user/certificate/index">
        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa"><img src="__TMPL__/public/assets/images/summary.png"></i><span>证书管理</span></div>
    </a>
    <!--todo 暂时没想好什么作用-->
    <!--    <a href="/user/tube/editor/id/0.html">-->
    <!--        <div class="col-sm-12 tube-lyy tube-bgs"><i class="fa fa-plus-circle"></i><span>发布空应用</span></div>-->
    <!--    </a>-->
    <div class="col-sm-12 tube-bor"></div>
    
</div>
    
    <!--  我的应用右侧 概述 -->
    <div class="col-sm-10 pad-left_right tube-right">

        <!--     账户资料 -->
        <div class="col-sm-12 tube-zil pad-left_right">超级签名应用</div>
        
        <div class="col-sm-12   pad-left_right ">
            <div class="box_card supindex-right-top" style="">
                <p class="supindex-right-top-text">公有池剩余下载数量</p>
                <div class="supindex-right-bottom">
                    <div class="supindex-right-bottom-a">
                        <p class="sup-index-public-text"><?php echo $sup_down_public; ?>次</p>
                        <p class="sup-index-public-text2">共<?php echo $public_all; ?>次</p>
                    </div>
                    <div class="supindex-right-bottom-b">
                        <div class="supindex-right-bottom-b-a"></div>
                    </div>
                </div>
            </div>

            <div class="box_card supindex-right-top" style="margin-left: 5%;">
                <p class="supindex-right-top-text">私有池剩余下载数量</p>
                <div class="supindex-right-bottom">
                    <div class="supindex-right-bottom-a">
                        <p class="sup-index-public-textp"><?php echo $sup_down_prive; ?>次</p>
                        <p class="sup-index-public-text2">共<?php echo $prive_all; ?>次</p>
                    </div>
                    <div class="supindex-right-bottom-b">
                        <div class="supindex-right-bottom-b-b"></div>
                    </div>
                </div>
            </div>

            <form action="<?php echo url('Portal/posted/supindex'); ?>" method="post">
            <div class="box_card secou" >
                    <input type="text" name="key" value="<?php echo $key; ?>" placeholder="搜索应用名称">
                    <img width="20" height="20" src="__TMPL__/public/assets/images/seach.png">
            </div>
            <div class="secou-button">
                <input type="submit" name="" value="搜索">
            </div>
                
            </form>
            <div class="secou-fleft" onclick="location.href='/portal/posted/supernumber'">
                购买设备
            </div>
            <div class="secou-right" onclick="location.href='/portal/index/supposted'">
                发布应用
            </div>
            
            <div class="col-sm-12 tube-zil pad-left_right">&nbsp;</div>
            <div class="col-sm-12 tube-panel panel-default pad-left_right box_card tube-panel-bottom">
                <table class="table">
                    <thead style="">
                    <tr>
                        <th>应用名称</th>
                        <th>版本</th>
                        <th>下载方式</th>
                        <th>下载渠道</th>
                        <th>更新时间</th>
                        <th>扣量信息</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($assets) || $assets instanceof \think\Collection || $assets instanceof \think\Paginator): if( count($assets)==0 ) : echo "" ;else: foreach($assets as $key=>$v): ?>
                        <tr>
                            <th scope="row">
                                <div class="col-sm-3 pad-left_right tube-row">
                                    <img src="<?php echo $v['img']; ?>" class="headicon">
                                </div>
                                <div class="col-sm-8 pad-left_right">
                                    <div class="col-sm-12 pad-left_right tube-yingy"><?php echo (isset($v['name']) && ($v['name'] !== '')?$v['name']:"未定义"); ?></div>
                                    <div class="col-sm-12 pad-left_right tube-ying-t ">
                                        <i class="fa fa-apple"></i>&nbsp;&nbsp;苹果 
                                    </div>
                                </div>
                            </th>
                            <td><?php echo $v['version']; ?></td>
                            <!-- <td class="erweim" date-url="<?php echo $v['er_logo']; ?>"><?php echo $v['url']; ?> <i class="fa fa-qrcode " aria-hidden="true"></i><div  class="erweidw" ><img src="<?php echo $v['er_img']; ?>"/></div>  </td>-->
                            <td class="erweim" date-url="<?php echo getsite(); ?>/<?php echo $v['er_logo']; ?>"><?php echo getsite(); ?>/<?php echo $v['er_logo']; ?> <i
                                    class="fa fa-qrcode " aria-hidden="true"></i>
                                <div class="erweidw"></div>
                            </td>
                            <td>
                                <?php if($v['download_type'] == 1): ?>公有池<?php else: ?>私有池<?php endif; ?>
                            </td>
                            <td><?php echo date("Y-m-d",$v['addtime'] ); ?></td>
                            <td><a style="color:#0097FF;text-decoration: none;" href="<?php echo cmf_url('portal/posted/deduction',array('appid'=>$v['id'])); ?>">查看详情</a></td>
                            <td class="tube-tiz">
                                <a class="bogo-global-btn" style="background: #0095FC;" 
                                   href="<?php echo cmf_url('user/tube/sup_details',array('id'=>$v['id'],'bundle'=>$v['bundle'],'type'=>$v['type'])); ?>">详情</a>
                                <a href="<?php echo cmf_url('user/tube/sup_editor',array('id'=>$v['id'])); ?>"
                                   class="bogo-global-btn">编辑</a>
                                <?php if($v['only_download'] == 1): ?>
                                    <a id="dow-link" data-id="<?php echo $v['id']; ?>" date-url="<?php echo getsite(); ?>/<?php echo $v['er_logo']; ?>" class="bogo-global-btn" onclick="dow_link(<?php echo $v['id']; ?>,'<?php echo getsite(); ?>/<?php echo $v['er_logo']; ?>');">生成唯一链接</a>
                                <?php endif; ?>
                            </td>
                            
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <input class="sup-textarea" type="hidden" value="">

</body>
<script src="__TMPL__/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
<script src="__STATIC__/js/layui/layui.all.js"></script>

<script type="text/javascript">

    $('.supindex-right-bottom-b-b').css('width',<?php echo $prive_y; ?>+'%');
    $('.supindex-right-bottom-b-a').css('width',<?php echo $public_y; ?>+'%');
    $('').click(function(){
        var appid = $(this).attr('data-id');
        var url = $(this).attr('date-url');
        //date-url
        $.ajax({
            url: '/portal/posted/download_link',
            type: 'POST', //GET
            async: true,    //或false,是否异步
            data: {
                appid: appid,
                url: url,
            },
            timeout: 5000,    //超时时间
            dataType: 'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            /*beforeSend: function (xhr) {
                log(xhr)
                log('发送前')
            },*/
            success: function (data) {

                log(data)
                layer.open({
                    type: 1
                    //,offset: type //具体配置参考：http://www.layui.com/doc/modules/layer.html#offset
                    //,id: 'layerDemo' //防止重复弹出
                    ,content: '<div style="padding: 20px 10px;">'+ data.url +'</div>'
                    ,btn: '关闭'
                    ,btnAlign: 'c' //按钮居中
                    ,shade: 0 //不显示遮罩
                    ,yes: function(){
                      layer.closeAll();
                    }
                });

            },
            error: function (xhr, textStatus) {
                log('错误')
                //log(xhr)
                //log(textStatus)
            },
            complete: function () {
                log('结束')
            }
        });
    })


    function dow_link(appid,url){
        /*var appid = $(this).attr('data-id');
        var url = $(this).attr('date-url');*/
        //date-url
        $.ajax({
            url: '/portal/posted/download_link',
            type: 'POST', //GET
            async: true,    //或false,是否异步
            data: {
                appid: appid,
                url: url,
            },
            timeout: 5000,    //超时时间
            dataType: 'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            /*beforeSend: function (xhr) {
                log(xhr)
                log('发送前')
            },*/
            success: function (data) {
                //log(data)
                layer.open({
                    type: 1
                    //,offset: type //具体配置参考：http://www.layui.com/doc/modules/layer.html#offset
                    //,id: 'layerDemo' //防止重复弹出
                    ,content: '<div style="padding: 20px 10px;">'+ data.url +'</div>'
                    ,btn: '关闭'
                    ,btnAlign: 'c' //按钮居中
                    ,shade: 0 //不显示遮罩
                    ,yes: function(){
                      layer.closeAll();
                    }
                });

            },
            error: function (xhr, textStatus) {
                log('错误')
                //log(xhr)
                //log(textStatus)
            },
            complete: function () {
                log('结束')
            }
        });
    }

    

</script>
</html>

