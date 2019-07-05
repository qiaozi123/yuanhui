<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta name="viewport" content="width=device-width">
    <title>{{$data->名称}}-远辉生鲜网</title>
    <meta name="Keywords" content="{{$data->名称}}">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/goods.css">
    <link rel="shortcut icon" href="http://www.shikefood.com/mobile/favicon.ico">
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.json.js"></script>
    {{--<script type="text/javascript" src="{{url('js')}}/transport.js"></script>--}}
    <script type="text/javascript" src="{{url('js')}}/touchslider.dev.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script></head>
<body style="background-color: rgb(244, 244, 244); cursor: auto;">
<style>
    .pop-main {
        text-align: center;
    }
    .pop-con {
        background: #fff none repeat scroll 0 0;
        min-height: 80px;
        padding: 10px 10px 20px;
        position: relative;
    }
    .pop-header .pop-close, .pop-con .pop-icon {
        background: rgba(0, 0, 0, 0) url("images/common-icon.png") no-repeat scroll 0 0;
    }
    .pop-mask {
        background: #000 none repeat scroll 0 0;
        display: none;
        height: 100%;
        left: 0;
        opacity: 0.15;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999999;
    }
    .pop-main {
        border: 4px solid #ccc;
        border-radius: 5px;
        display: none;
        left: 50%;
        margin-left: -120px;
        overflow: hidden;
        position: fixed;
        text-align: center;
        width: 235px;
        z-index: 1000001;
    }
    .pop-header {
        background: #f7f7f7 none repeat scroll 0 0;
        color: #666;
        font-family: "Microsoft YaHei";
        font-size: 14px;
        height: 36px;
        line-height: 36px;
        padding: 0 10px;
        position: relative;
    }
    .pop-header .pop-close, .pop-header .tell-me-close {
        background-position: -41px -44px;
        display: block;
        height: 13px;
        position: absolute;
        right: 13px;
        top: 13px;
        width: 13px;
    }
    .pop-close-shike {
        background-color: #61be16;
        border: medium none;
        border-radius: 5px;
        color: #fff;
        display: block;
        height: 35px;
        line-height: 35px;
        margin: 0 auto;
        text-align: center;
        width: 93px;
    }
    .pop-close-shike:hover {
        color: #fff;
    }
    .pop-con {
        background: #fff none repeat scroll 0 0;
        min-height: 80px;
        padding: 10px 10px 20px;
        position: relative;
    }
    .pop-con .pop-icon {
        background-position: -118px -43px;
        display: block;
        height: 39px;
        left: 20px;
        position: absolute;
        top: 20px;
        width: 39px;
    }
    .pop-con .pop-text {
        font-size: 14px;
        line-height: 1.5em;
        padding: 10px 20px 15px 60px;
        text-align: left;
    }
    ..cancel-btn {
        background: #f5f5f5 none repeat scroll 0 0;
        border: 1px solid #ddd;
        border-radius: 3px;
        cursor: pointer;
        display: inline-block;
        height: 28px;
        line-height: 28px;
        padding: 0 25px;
        vertical-align: top;
    }
    .cancel-btn:hover {
        color: #666;
    }
    .sure-btn, .pop-sure {
        background: #e31939 none repeat scroll 0 0;
        border: 1px solid #61be16;
        border-radius: 3px;
        color: #505050;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        height: 28px;
        line-height: 28px;
        margin-right: 0px;
        padding: 0 25px;
        text-align: center;
        width: auto;
    }
    .sure-btn:hover, .pop-sure:hover {
        color: #505050;
    }
    .spe-btn .sure-btn {
        margin-right: 20px;
    }
    .pop-btn {
        display: inline-block;
        margin: 0 auto;
        padding: 10px 0 15px;
    }
    a.pop-sure {
        background-color: #61be16;
    }
    .main-bg-color {
        background: rgba(255, 255, 255, 0.5) none repeat scroll 0 0;
    }
</style>
<link href="{{url('css')}}/share.css" rel="stylesheet" type="text/css">

<script language="javascript">
    <!--
    /*屏蔽所有的js错误*/
    function killerrors() {
        return true;
    }
    window.onerror = killerrors;
    //-->
    function tiaozhuan()
    {
//var thisurl = window.location.href;
        document.getElementById("share_form").submit();
    }
</script>
<script type="text/javascript">
    /*第一种形式 第二种形式 更换显示样式*/
    function setGoodsTab(name,cursel,n){
        $('html,body').animate({'scrollTop':0},600);
        for(i=1;i<=n;i++){
            var menu=document.getElementById(name+i);
            var con=document.getElementById("user_"+name+"_"+i);
            menu.className=i==cursel?"on":"";
            con.style.display=i==cursel?"block":"none";
        }
    }
</script>
<div class="goods_header">
    <h2><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></h2>
    <div class="h-mid">商品 </div>
    <dl id="top_bar">
        <dd class="top_bar">
            <!--<a href="javascript:tiaozhuan();" id="shareTo"></a>-->
            <a href="javascript:choose_attrone_share();" id="shareTo"></a>
        </dd>
        <!--
            <dt> <a href="flow.php" class="show_cart"><em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO"> 0 </em></a></dt>
          -->
    </dl>
</div>
<script type="text/javascript" src="{{url('js')}}/mobile.js"></script>
<div class="goods_nav hid" id="menu">
    <div class="Triangle">
        <h2></h2>
    </div>
    <ul>
        <li><a href="http://www.shikefood.com/mobile/index.php"><span class="menu1"></span><i>首页</i></a></li>
        <li><a href="http://www.shikefood.com/mobile/catalog.php"><span class="menu2"></span><i>分类</i></a></li>
        <li><a href="http://www.shikefood.com/mobile/flow.php?filter=activity"><span class="menu3"></span><i>购物车</i></a></li>
        <li style=" border:0;"><a href="http://www.shikefood.com/mobile/user.php"><span class="menu4"></span><i>我的</i></a></li>
    </ul>
</div>
<form action="http://www.shikefood.com/mobile/share_goods.php" method="post" id="share_form">
    <input type="hidden" name="content" value="{{$data->名称}}">
    <input type="hidden" name="pics" value="http://www.shikefood.com/images/201706/goods_img/10079_G_1497979127493.jpg">
    <input type="hidden" name="gid" value="10079">
    <input type="hidden" name="url" value="http://www.shikefood.com/mobile/goods.php?id=10079">
</form>
<div class="activity_nav">
    <dl>
        <dd class="flow"><a class="button active_button" style="line-height: 55px;" onclick=""></a> </dd>

        <section class="f_mask1" style="display: none;"></section>
        <section class="f_block1" id="choose_attr_share" style="height:0; overflow:hidden;">
            <section class="good_canshu">
                <div class="shareWrap" style="padding: 0px;">
                    <ul class="canshu">
                        <li class="active weixin addf" id="weixin"><span class="icon"></span><i>微信分享</i></li>
                        <li class="active weixin2 addf" id="weixin2"><span class="icon2"></span><i class="ml">朋友圈分享</i></li>
                        <li class="active QQ addf" id="QQ"><span class="icon"></span><i>腾讯QQ</i></li>
                    </ul>
                </div>
            </section>
            <div class="goods_shut">
                <a href="javascript:void(0)" onclick="close_choose_attr_share();" class="shut" style=" color:#FFF;font-size:18px;">取消</a>
            </div>
        </section>
    </dl>
</div>

<script>
    function choose_attrone_share(num){
        $("#choose_attr_share").animate({height:'20%'},[10000]);
        var total=0,h=$(window).height(),
            top =$('.good_canshu').height()||0,
            con = $('.xiangq');
        total = 0.8*h;
        con.height(total-top+'px');
        $(".f_mask1").show();
    }
    function close_choose_attr_share(){
        $(".f_mask1").hide();
        $('#choose_attr_share').animate({height:'0'},[10000]);
    }
    var url=encodeURIComponent("http://www.shikefood.com/mobile/goods.php?id=10079");
    var url2=encodeURI("http://www.shikefood.com/mobile/goods.php?id=10079");
    var shareTitle="新奇士美国脐橙 12个装";
    var pic ="http://www.shikefood.com/images/201706/source_img/10079_P_1497979127566.jpg";
    $(function(){
        //qq空间
        $("#qzone").click(function(){
            if(window.ioswst){
                window.ioswst.shareToQQZONE({
                    'title':'食恪',
                    'description':shareTitle,
                    'url':url2,
                    'picurl':pic
                });
            }
            else if(window.wst){
                window.wst.shareToQQZone("食恪",shareTitle,url2,pic);
            }
            else{
                location.href="http://www.jiathis.com/send/?webid=qzone&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe"+"&pics="+pic;
            }
        });
        // 新浪微博
        $("#sina").click(function(){
            if(window.ioswst){
                window.ioswst.shareToWB({
                    'title':'食恪',
                    'description':shareTitle,
                    'url':url2 ,
                    'picurl':pic
                });
            }
            else if(window.wst){
                window.wst.shareToSINA("食恪",shareTitle,url2,pic);
            }
            else{
                location.href="http://www.jiathis.com/send/?webid=tsina&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe"+"&pics="+pic;
            }
        });
        $("#tengXun").click(function(){
            location.href="http://www.jiathis.com/send/?webid=tqq&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe"+"&pics="+pic;
        });
        $("#weixin2").click(function(){
            if(window.ioswst){
                window.ioswst.shareToWXS({
                    'title':'食恪',
                    'description':shareTitle,
                    'url':url2 ,
                    'picurl':pic
                });
            }
            else if(window.wst){
                window.wst.shareToWXS("食恪",shareTitle,url2,pic);
            }
            else{
                location.href="http://www.jiathis.com/send/?webid=weixin&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe";
            }
        });
        $("#weixin").click(function(){
            if(window.ioswst){
                window.ioswst.shareToWXF({
                    'title':'食恪',
                    'description':shareTitle,
                    'url':url2 ,
                    'picurl':pic
                });
            }
            else if(window.wst){
                window.wst.shareToWXF("食恪",shareTitle,url2,pic);
            }
            else{
                location.href="http://www.jiathis.com/send/?webid=weixin&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe";
                /*wx.ready(function () {
                   //监听“分享给朋友”
                   wx.onMenuShareAppMessage({
                     title: '',
                     desc: '<p style="text-align: center"><img src="http://www.shikefood.com/includes/ueditor/php/../../../bdimages/upload1/20170309/1489028745543804.jpg" style="" title="SK02080085main_01.jpg"/></p><p style="text-align: center"><img src="http://www.shikefood.com/includes/ueditor/php/../../../bdimages/upload1/20170309/1489028745195749.jpg" style="" title="SK02080085main_02.jpg"/></p><p style="text-align: center"><img src="http://www.shikefood.com/includes/ueditor/php/../../../bdimages/upload1/20170309/1489028745995347.jpg" style="" title="SK02080085main_03.jpg"/></p><p><br/></p>',
                     link: 'http://www.shikefood.com/mobile/goods.php?id=10079',
                     imgUrl: 'http://www.shikefood.com/images/201706/source_img/10079_P_1497979127566.jpg', //--PRINCE grandzh
                     trigger: function (res) {
                     },
                     success: function (res) {
                     },
                     cancel: function (res) {
                     },
                     fail: function (res) {
                       alert(JSON.stringify(res));
                     }
                   });
               });*/
            }
        });
        $("#QQ").click(function(){
            if(window.ioswst){
                window.ioswst.shareToQQ({
                    'title':'食恪',
                    'description':shareTitle,
                    'url':url2,
                    'picurl':pic
                });
            }
            else if(window.wst){
                window.wst.shareToQQ("食恪",shareTitle,url2,pic);
            }
            else{
                location.href="http://www.jiathis.com/send/?webid=qzone&url="+url+"&title="+shareTitle+"&uid=69830b72-0d99-41aa-a3fd-48634b616ffe"+"&pics"+pic;
            }
        });
    });
</script>
<script src="{{url('js')}}/jweixin-1.0.0.js"></script>
<script>

    wx.config({
        debug: false,
        appId: 'wxa3dd959056ec940b',
        timestamp: 1559031086,
        nonceStr: 'UeJBMQ6SSWgMJrFY',
        signature: '0e57f06a3fdfbf15c5a71cd8db724a17d683747e',
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage'
        ]
    });
    wx.ready(function () {
        //监听“分享给朋友”
        wx.onMenuShareAppMessage({
            title: '新奇士美国脐橙 12个装',
            desc: '新奇士美国脐橙 12个装 【价格 多少钱 图片 怎么样】 - 食恪网',
            link: 'http://www.shikefood.com/mobile/goods.php?id=10079',
            imgUrl: 'http://www.shikefood.com/images/201706/source_img/10079_P_1497979127566.jpg', //--PRINCE grandzh
            trigger: function (res) {
            },
            success: function (res) {
            },
            cancel: function (res) {
            },
            fail: function (res) {
                alert(JSON.stringify(res));
            }
        });
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: '新奇士美国脐橙 12个装',
            desc: '新奇士美国脐橙 12个装 【价格 多少钱 图片 怎么样】 - 食恪网',
            link: 'http://www.shikefood.com/mobile/goods.php?id=10079',
            imgUrl: 'http://www.shikefood.com/images/201706/source_img/10079_P_1497979127566.jpg', //--PRINCE grandzh
            trigger: function (res) {
            },
            success: function (res) {
            },
            cancel: function (res) {
            },
            fail: function (res) {
                alert(JSON.stringify(res));
            }
        });
    });
</script>
<form action="javascript:addToCart(10079)" method="post" id="purchase_form" name="ECS_FORMBUY">
    <input type="hidden" id="chat_goods_id" value="10079">
    <input type="hidden" id="chat_supp_id" value="0">
    <input type="hidden" id="goods10079" value="0">
    <div class="main body_bj" id="user_goods_ka_1" style="display:block;">

        <div class="banner">
            <div id="slider" class="slider" style="overflow: hidden; visibility: visible; list-style: none; position: relative;">

                <ul id="sliderlist" class="sliderlist" style="position: relative; overflow: hidden; transition: left 0ms ease 0s; width: 375px; left: 0px;">

                    <video  controls>
                        <source src="{{$data->视频地址}}" type="video/mp4">
                    </video>
                </ul>

                <div id="pagenavi">
                    <a href="javascript:void(0);" class="active"></a>
                </div>
            </div>
        </div>
        <div class="s_bottom"></div>
        <script type="text/javascript">$(function(){
                $("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
            });
            var active=0,
                as=document.getElementById('pagenavi').getElementsByTagName('a');

            for(var i=0;i<as.length;i++){
                (function(){
                    var j=i;
                    as[i].onclick=function(){
                        t2.slide(j);
                        return false;
                    }
                })();
            }
            var t2=new TouchSlider({id:'sliderlist', speed:600, timeout:6000, before:function(index){
                    as[active].className='';
                    active=index;
                    as[active].className='active';
                }});
        </script>
        <div class="product_info">

            <div class="info_dottm">
                <h3><em>{{$data->名称}}</em><span>{{$data->描述}}</span></h3>
                <!--
            <div class="right"><a onClick="tiaozhuan()">
              <div id="pro_share" class="share"></div>
              </a></div>
             -->
            </div>

            <dl class="goods_price">
                <dt> <span id="ECS_GOODS_AMOUNT">¥{{$data->价格}}</span>

                </dt>
                <dd> <i>市场价：<font>￥{{$data->市场价}}</font></i>


                    <em id="IS_EXCLUSIVE" style="display:none">手机专享</em> </dd>
            </dl>
            <dl id="goodprotect"><img src="{{url('images')}}/goodprotect.png"></dl>

            <ul class="price_dottm">
                <li style=" text-align:left">折扣：{{$data->折扣}}折</li>
                {{--<li>1人评价</li>--}}
                <li style=" text-align:right">13人已购</li>
            </ul>
        </div>






        <!-- <div class="goods_hd">
          <dl>
            <dt onClick="choose_attrstr(0)" >会员等级价格</dt>
          </dl>
           </div> -->
        <div class="goods_can">
            <dl>
                <dt onclick="choose_attrone(0)">产品参数</dt>
            </dl>
        </div>
        <!--
        <section id="search_ka" class="goods_ziti">
        <a href="pocking.php?id=10079"><span>查看自提点</span><i><img src="themesmobile/68ecshopcom_mobile/images/goods/ziti.png"></i></a>
        </section>
        -->

    </div>
    <div class="tabs" id="goods_tabs">
        {{--<li class="current" style="width: 100%"><a href="javascript:;" class="tab_head" id="goods_ka2" >详情</a></li>--}}
        {{--<li><a href="javascript:;" class="tab_head" id="goods_ka3">评价</a></li>--}}
    </div>
    <script>
        $(document).ready(function(){
            $('#goods_tabs li').click(function(){
                $("#goods_tabs li").filter('.current').removeClass('current');

                $(this).addClass('current');

                if($(this).find('a').attr("id") == "goods_ka2"){
                    $('#user_goods_ka_2').css('display',"block");
                    $('#user_goods_ka_3').css('display',"none");
                }
                else if($(this).find('a').attr("id") == "goods_ka3"){
                    $('#user_goods_ka_2').css('display',"none");
                    $('#user_goods_ka_3').css('display',"block");
                }
            });

            $('#goods_tabs li').eq(0).click();
            show_goods_desc();
        });
    </script>
    <div class="main" id="user_goods_ka_2" style="display:block">
        <div class="product_main">
            <div class="product_images product_desc" id="product_desc">
                @foreach($goodimg as $item)
                <p style="text-align: center"><img src="{{$item->商品图片地址}}" style="" alt=""></p><p style="text-align: center">
                @endforeach
            </div>
        </div>
    </div>
    <div class="tab_attrs tab_item hide" id="user_goods_ka_3" style="display: none;">
        <script type="text/javascript" src="{{url('js')}}/utils.js"></script>
        <div id="ECS_COMMENT">
            <link href="{{url('css')}}/photoswipe.css" rel="stylesheet" type="text/css">
            <script src="{{url('js')}}/klass.min.js"></script>
            <script src="{{url('js')}}/photoswipe.js"></script>
            <div class="my-comment-tab commnet_rank">
                <ul>
                    <!--
                    <li id="mct_0" onClick="ShowMyComments(10079,0,1)" class="cur">全部<span>(1)</span></li>
                    <li id="mct_1" onClick="ShowMyComments(10079,1,1)">好评<span>(1)</span></li>
                    <li id="mct_2" onClick="ShowMyComments(10079,2,1)">中评<span>(0)</span></li>
                    <li id="mct_3" onClick="ShowMyComments(10079,3,1)">差评<span>(0)</span></li>
                    -->
                    <li id="mct_0" onclick="ShowMyComments(10079,0,1)" class="cur">全部<span>(1)</span></li>
                    <li id="mct_1" onclick="ShowMyComments(10079,1,1)">好评<span>(1)</span></li>
                    <li id="mct_2" onclick="ShowMyComments(10079,2,1)">中评<span>(0)</span></li>
                    <li id="mct_3" onclick="ShowMyComments(10079,3,1)">差评<span>(0)</span></li>

                    <!--<li id="mct_4" onClick="ShowMyComments(10079,4,1)">用户晒单<span>(0)</span></li>-->
                </ul>
            </div>

            <div class="my_comment_list" id="ECS_MYCOMMENTS"><div class="comment_list" id="commentList">
                    <div class="content_head">

                        <div class="comment_star">
                            <dl>
                                <dt>
                                    <span> 133****4780</span><em><img src="{{url('css')}}/stars5.png" alt="5"></em> <div class="comment_time">2017-06-22</div>
                                </dt>
                                <dd style="word-wrap:break-word;width:100%;">
                                    货源渠道正宗，质量优质，物流迅速，吃的安全图的省心            </dd>
                            </dl>
                        </div>





                    </div>
                </div></div>

            <script language="javascript">

                function ShowMyComments(goods_id, type, page)
                {
                    if($('#mct_'+ type).length){
                        $('.commnet_rank ul li').removeClass("cur");
                        $('#mct_'+ type).addClass('cur');
                    }
                    Ajax.call('goods_comment.php?act=list_json', 'goods_id=' + goods_id + '&type=' + type + '&page='+page, ShowMyCommentsResponse, 'GET', 'JSON');
                }

                function ShowMyCommentsResponse(result)
                {
                    if (result.error)
                    {

                    }

                    try
                    {
                        var layer = document.getElementById("ECS_MYCOMMENTS");
                        layer.innerHTML = result.content;
                        var myPhotoSwipe = $("#gallery a").photoSwipe({
                            enableMouseWheel: false,
                            enableKeyboard: false,
                            allowUserZoom: false,
                            loop:false
                        });
                    }
                    catch (ex) {}
                }

            </script></div>
        <script language="javascript"> ShowMyComments(10079,0,1);</script>
    </div>

    <script type="text/javascript">
        var goods_id = 10079;
        var goodsattr_style = 1;
        var gmt_end_time = 0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        var goodsId = 10079;
        var now_time = 1559002286;
        onload = function(){
            changePrice();
            try {onload_leftTime(now_time);}
            catch (e) {
            }
        }
        /**/

        /**
         * 点选可选属性或改变数量时修改商品价格的函数
         */
        function changePrice()
        {
            var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
            var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
            if(qty <=0 ){
                document.forms['ECS_FORMBUY'].elements['number'].value = 1;
                qty = 1;
            }
            Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
        }
        /**
         * 接收返回的信息
         */
        function changePriceResponse(res)
        {
            if (res.err_msg.length > 0)
            {
                alert(res.err_msg);
            }
            else
            {
                document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
                if (document.getElementById('ECS_GOODS_AMOUNT')){
                    document.getElementById('ECS_GOODS_AMOUNT').innerHTML ="¥" + parseFloat(res.result/res.qty).toFixed(2);
                }
                if(document.getElementById('ECS_GOODS_NUMBER')){
                    document.getElementById('ECS_GOODS_NUMBER').innerHTML = res.goods_attr_number;
                    if(res.goods_attr_number > 0){
                        document.getElementById('ECS_ADD_TO_CART').style.display="block";
                        //document.getElementById('ECS_ONE_STEP_BUY').style.display="block";
                        document.getElementById('ECS_DAOHUO').style.display="none";
                    }else{
                        document.getElementById('ECS_ADD_TO_CART').style.display="none";
                        // ocument.getElementById('ECS_ONE_STEP_BUY').style.display="none";
                        document.getElementById('ECS_DAOHUO').style.display="block";
                    }
                }
                if(document.getElementById('ECS_GOODS_AMOUNT_JF')){
                    document.getElementById('ECS_GOODS_AMOUNT_JF').innerHTML = res.result_jf;
                }
                if(document.getElementById('ECS_GOODS_AMOUNT_CHOOSE')){
                    document.getElementById('ECS_GOODS_AMOUNT_CHOOSE').innerHTML ="¥" + parseFloat(res.result/res.qty).toFixed(2);
                }
                if(document.getElementById('ECS_GOODS_ATTR_THUMB')){
                    document.getElementById('ECS_GOODS_ATTR_THUMB').src = res.goods_attr_thumb;
                }
                if(document.getElementById('ECS_GOODS_ATTR')){
                    document.getElementById('ECS_GOODS_ATTR').innerHTML = res.goods_attr;
                }
                if(document.getElementById('ECS_SELECT_GOODS_ATTR') && res.goods_attr != ''){
                    document.getElementById('ECS_SELECT_GOODS_ATTR').style.display="block";
                    document.getElementById('ECS_SELECT_GOODS_ATTR').innerHTML ="<dt onClick='choose_attr(0)'><span>产品属性：" + res.goods_attr + "</span></dt>";
                }
                if(document.getElementById('IS_EXCLUSIVE') && res.is_exclusive){
                    document.getElementById('IS_EXCLUSIVE').style.display = 'block';
                }else{
                    document.getElementById('IS_EXCLUSIVE').style.display = 'none';
                }
            }
        }
    </script>
    <section class="f_mask2" style="display: none;"></section>
    <section class="f_block2" id="choose_attr2" style="height:0; overflow:hidden;">

        <div class="Promotions">
            <h2>优惠活动</h2>
            <ul>





            </ul>
        </div>
        <div class="goods_shut">
            <a href="javascript:void(0)" onclick="close_choose_attr2();" class="shut" style=" color:#FFF; font-size:18px;">关闭</a>
        </div>
    </section>
    <script>
        function choose_attrtwo(num){
            $("#choose_attr2").animate({height:'80%'},[10000]);
            var total=0,h=$(window).height(),
                top =$('.Promotions h2').height()||0,
                con = $('.Promotions');
            total = 0.8*h;
            con.height(total-top+'px');
            $(".f_mask2").show();
        }
        function close_choose_attr2(){
            $(".f_mask2").hide();
            $('#choose_attr2').animate({height:'0'},[10000]);
        }
        function changeAtt(t) {
            t.lastChild.checked='checked';
            for (var i = 0; i<t.parentNode.childNodes.length;i++) {
                if (t.parentNode.childNodes[i].className == 'hover') {
                    t.parentNode.childNodes[i].className = '';
                    t.childNodes[0].checked="checked";
                }
            }
            t.className = "hover";
            changePrice();
        }
        function changeAtt1(t) {
            t.lastChild.checked='checked';
            for (var i = 0; i<t.parentNode.childNodes.length;i++) {
                if (t.className == 'hover') {
                    t.className = '';
                    t.childNodes[0].checked = false;
                }
                else{
                    t.className="hover";
                    t.childNodes[0].checked = true;
                }


            }
            changePrice();
        }
    </script>
    <section class="f_mask3" style="display: none;"></section>
    <section class="f_block3" id="choose_attr3" style="height:0; overflow:hidden;">
        <div class="subNavBox">
            <h2>会员专享价</h2>
            <ul>
                <li>
                    <p>普通会员：</p>
                    <span>77.9</span>
                </li>
                <li>
                    <p>铜牌会员：</p>
                    <span>77.9</span>
                </li>
                <li>
                    <p>银牌会员：</p>
                    <span>77.9</span>
                </li>
                <li>
                    <p>金牌会员：</p>
                    <span>77.9</span>
                </li>
                <li>
                    <p>钻石会员：</p>
                    <span>77.9</span>
                </li>
            </ul>
        </div>
        <div class="goods_shut">
            <a href="javascript:void(0)" onclick="close_choose_attr3();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
        </div>
    </section>
    <script>
        function choose_attrstr(num){
            $("#choose_attr3").animate({height:'80%'},[10000]);
            var total=0,h=$(window).height(),
                top =$('.subNavBox').height()||0,
                con = $('.subNavBox ul');
            total = 0.8*h;
            con.height(total-top+'px');
            $(".f_mask3").show();
        }
        function close_choose_attr3(){
            $(".f_mask3").hide();
            $('#choose_attr3').animate({height:'0'},[10000]);
        }
    </script>
    <section class="f_mask1" style="display: none;"></section>
    <section class="f_block1" id="choose_attr1" style="height:0; overflow:hidden;">
        <section class="good_canshu">
            <h2>商品信息</h2>
            <ul>

                <li><p>商品名称：</p><span>{{$data->名称}}</span></li>
                <li><p>商品编号：</p><span>{{$data->id}}</span></li>
                <li><p>上架时间：</p><span>{{$data->created_at}}</span></li>
                <!--     <li><p>商品重量：</p><span></span></li>-->
                <!-- <li><p>商品库存：</p><span>剩余 </span></li> -->

                <li><p>包装方式:</p><span>箱</span></li>
                <li><p>储存方式:</p><span>冷藏</span></li>
                <li><p>产地:</p><span>美国</span></li>
                <li><p>包装规格:</p><span>12个</span></li>
                <li><p>等级:</p><span>88#</span></li>
            </ul>
        </section>
        <div class="goods_shut">
            <a href="javascript:void(0)" onclick="close_choose_attr1();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
        </div>
    </section>
    <script>
        function choose_attrone(num){
            $("#choose_attr1").animate({height:'80%'},[10000]);
            var total=0,h=$(window).height(),
                top =$('.good_canshu').height()||0,
                con = $('.xiangq');
            total = 0.8*h;
            con.height(total-top+'px');
            $(".f_mask1").show();
        }
        function close_choose_attr1(){
            $(".f_mask1").hide();
            $('#choose_attr1').animate({height:'0'},[10000]);
        }
    </script>
    <section class="f_mask" style="display: none;"></section>
    <section class="f_block" id="choose_attr" style="height:0; overflow:hidden;">
        <div class="f_title_attr">
            <img id="ECS_GOODS_ATTR_THUMB" src="{{url('images')}}/10079_thumb_G_1497979127734.jpg" style=" float:left;">
            <div class="f_title_arr_r">
                <span>价格：<i id="ECS_GOODS_AMOUNT_CHOOSE">¥{{$data->价格}}</i></span>
                <span id="ECS_GOODS_ATTR"></span>
            </div>
            <div class="f_title_arr_r">
                <div class="sku_choose" id="skuPop1" ptag="7001.1.5">
                    <span class="item" no="1" dis="0" dissel="0">巴沙鱼柳（去皮） 450g</span>
                    <span class="item" no="1" dis="0" dissel="0">巴沙鱼柳（带皮） 450g</span>
                    <span class="item active" no="1" dis="0" dissel="0">越南巴沙鱼柳（去皮）1kg</span>
                    <span class="item" no="1" dis="0" dissel="0">美国三文鱼块（大西洋鲑）170g</span>
                    <span class="item" no="1" dis="0" dissel="0">格陵兰比目鱼片 500g</span>
                    <span class="item" no="1" dis="0" dissel="0">挪威大西洋真鳕与三文鱼块</span>
                    <span class="item" no="1" dis="0" dissel="0">新西兰长尾鳕鱼柳 400g</span>
                    <span class="item" no="1" dis="0" dissel="0">新西兰裹粉长尾鳕鱼条 400g</span>
                </div>
            </div>

            <a class="c_close_attr" href="javascript:void(0)" onclick="close_choose_attr();"></a>

            <div style="height:0px; line-height:0px; clear:both;"></div>
        </div>
        <div class="f_content_attr">
            <ul class="navContent" style="display:block;">
                <li style=" border-bottom:1px solid #eeeeee">
                    <div class="title1">购买数量</div>
                    <div class="item1">
                        <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script>
                        <span class="ui-number">
          <button type="button" class="decrease" onclick="goods_cut();changePrice();"></button>
          <input type="number" class="num" id="number" onblur="changePrice();" name="number" value="1" min="1" style=" text-align:center">
          <input type="text" style="display: none" id="goods_id" name="goods_id" value="{{$data->id}}" min="1" style=" text-align:center">
          <button type="button" class="increase" onclick="goods_add();changePrice();"></button>
          </span>
                    </div>

                </li>
            </ul>
        </div>
        <div class="f_foot">
            <input type="button" border="0" class="add_gift_attr" value="提交" onclick="addcart()">
            <script>
                function addcart() {
                   number = $("#number").val();
                   goodsid = $("#goods_id").val();
                   alert(goodsid)
                    $.ajax({
                        type: "POST",
                        url: "/cart/add",
                        data: {"_token":{{csrf_token()}},'count':number,'goodsid':goodsid},
                    }).done(function( msg ) {
                        alert( "Data Saved: " + msg );
                    });
                }
            </script>
            <div style=" height:30px"></div>
        </div></section>
    <script>
        function choose_attr(num){
            document.body.style.overflow='hidden';
            $("#choose_attr").animate({height:'80%'},[10000]);
            var total=0,h=$(window).height(),
                top =$('.f_title_attr').height()||0,
                bottom =$('#choose_attr .f_foot').height()||0,
                con = $('.f_content_attr');
            total = 0.8*h;
            con.height(total-top-bottom+'px');
            $(".f_mask").show();
            if(num == 0){
                var actionForm = document.getElementById('purchase_form');
                actionForm.action = "javascript:addToCart(10079),close_choose_attr()";
            }
            if(num == 1){
                var actionForm = document.getElementById('purchase_form');
                actionForm.action = "javascript:addToCart(10079,0,1),close_choose_attr()";
            }
        }
        function close_choose_attr(){
            document.body.style.overflow='';
            $(".f_mask").hide();
            $('#choose_attr').animate({height:'0'},[10000]);
        }
    </script>
    <section class="f_mask6" style="display: none;"></section>
    <section class="f_block6" id="choose_attr6" style="height:0; overflow:hidden;">
        <section class="callme">
            <h2>到货通知</h2>
            <div id="tell_me_form" style="display: none; left: -62.5px; top: 183.5px;">
                <div class="tell_me_con">
                    <div style="background:#FFFDEE ;border:1px dotted #ff3300;line-height:20px; font-weight:normal; padding:10px; margin-top:10px;">
                        <p style="font-size:16px;color:#F52648;">新奇士美国脐橙 12个装</p>
                        <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
                    </div>
                    <ul>
                        <li><span><font color="#ff3300">*</font>数量：</span><em><input type="text" value="1" id="book_number"></em></li>
                        <li><span><font color="#ff3300">*</font>手机号码：</span><em><input type="text" value="" id="phone_num"></em></li>
                        <li><span><font color="#ff3300">*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email"></em></li>
                        <li><input type="button" value="提交" onclick="tell_me1(10079)" class="tell_btn"></li>
                    </ul>
                </div>
            </div>
            <script>
                $(function(){
                    $('#tell_me_form').css('left',($(window).width()-500)/2);
                    $('#tell_me_form').css('top',($(window).height()-300)/2);
                    $('.tell_me_close').click(function(){
                        $('#tell_me_form').hide();
                        //	document.getElementById('bg').style.display='none';
                    })
                })
            </script>
            <script type="text/javascript">
                function tell_me(goods_id){

                    //no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val);
                    Ajax.call('user.php?act=book_goods', 'id=' + goods_id, tellmeResponse, 'GET', 'JSON');
                }

                function tellmeResponse(result){
                    if(result.error==1){
                        document.getElementById('tell_me_form').style.display = 'block';
                        // document.getElementById('bg').style.display='block';
                        document.getElementById('phone_num').value=result.tel;
                        document.getElementById('arrival_email').value=result.email;
                        choose_attr6(0);
                    }
                    if(result.error==0){
                        alert(result.message);
                    }
                    if(result.error==2){
                        alert(result.message);
                        close_choose_attr6();
                        document.getElementById('tell_me_form').style.display = document.getElementById('tell_me_form').style.display=='none'?'block':'none';
                        //  document.getElementById('bg').style.display='none';
                    }

                }
                function tell_me1(goods_id){
                    var num=document.getElementById('book_number').value;
                    var tel=document.getElementById('phone_num').value;
                    var email=document.getElementById('arrival_email').value;
                    var msg = '';
                    var g = /^[1-9]*[1-9][0-9]*$/;

                    if (num == '') {
                        msg += '数量不能为空!\n';
                    }else if(!g.test(num)){
                        msg += '数量需为正整数！\n';
                    }
                    if (tel == '') {
                        msg += '手机号码不能为空！\n';
                    }
                    if (email == '') {
                        msg += '邮箱不能为空!\n';
                    }
                    if (msg)
                    {
                        alert(msg);
                        return false;
                    }
                    else
                    {
                        //no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val)
                        Ajax.call('user.php?act=add_book_goods', 'id=' + goods_id + '&num=' + num+ '&tel=' + tel+ '&em=' + email, tellmeResponse, 'GET', 'JSON');
                    }


                }
            </script>
            <div id="tell_me_form" style="display:none;">
                <div class="tell_me_con">
                    <div style="background:#FFFDEE ;border:1px dotted #ff3300;line-height:20px; font-weight:normal; padding:10px; margin-top:10px;">
                        <p style="font-size:16px;color:#F52648;">新奇士美国脐橙 12个装</p>
                        <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
                    </div>
                    <ul>
                        <li><span><font color="#ff3300">*</font>数量：</span><em><input type="text" value="1" id="book_number"></em></li>
                        <li><span><font color="#ff3300">*</font>手机号码：</span><em><input type="text" value="" id="phone_num"></em></li>
                        <li><span><font color="#ff3300">*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email"></em></li>
                        <li><input type="button" value="提交" onclick="tell_me1(10079)" class="tell_btn"></li>
                    </ul>
                </div>
            </div></section>
        <div class="goods_shut">
            <a href="javascript:void(0)" onclick="close_choose_attr6();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
        </div>
    </section>
    <script>
        function choose_attr6(num){
            $("#choose_attr6").animate({height:'80%'},[10000]);
            var total=0,h=$(window).height(),
                top =$('.callme').height()||0,
                con = $('.tell_me_con');
            total = 0.8*h;
            con.height(total-top+'px');
            $(".f_mask6").show();
        }
        function close_choose_attr6(){
            $(".f_mask6").hide();
            $('#choose_attr6').animate({height:'0'},[10000]);
        }
        function guanzhu(sid){
            Ajax.call('supplier.php', 'go=other&act=add_guanzhu&suppId=' + sid, selcartResponse, 'GET', 'JSON');
        }
        function selcartResponse(result){

            alert(result.info);
        }
    </script>
    <script type="text/javascript">
        function fun(type_id, no_have_val){
            no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val)
            Ajax.call('user.php?act=user_bonus', 'id=' + type_id + '&no_have=' + no_have, bounsResponse, 'GET', 'JSON');

            close_choose_attr2();
        }


        function bounsResponse(result){
            $('.pop-compare,.pop-mask').show();
            $('.pop-compare .pop-text').html(result.message);
            $('.pop-compare').css({'top':($(window).height()-$('.pop-compare').height())/2});
        }
    </script>
</form>
<div class="pop-main pop-compare">
    <div class="pop-header">
        <span>温馨提示</span>
        <a class="pop-close" href="javascript:;" title="关闭"></a>
    </div>
    <div class="pop-con">
        <i class="pop-icon"></i>
        <p class="pop-text"></p>
        <a href="javascript:;" class="pop-sure main-bg-color">确定</a>

        <a href="javascript:;" style="display:none;" class="cancel-btn none">取消</a>
    </div>
</div>
<script type="text/javascript">

    //文字弹出层关闭
    $('.pop-sure,.sure-btn,.pop-close,.cancel-btn').click(function(){
        $('.cencel-btn').addClass('none');
        $(this).parents('.pop-main').hide();
        $('.pop-mask').hide();
    });
</script>
<div style=" height:55px;"></div>
<div class="footer_nav toolbar">
    <dl style="width: 100%">

        <dd  class="goumai" id="ECS_ADD_TO_CART"><a class="button active_button" href="{{$data->淘宝地址}}">淘宝购买</a> </dd>
        <dd  class="flow" id="ECS_ONE_STEP_BUY"><a style="display:block;" onClick="choose_attr(1)">立即购买</a> </dd>
        <span class="daohuo" id="ECS_DAOHUO"> <a onclick="tell_me(10079)">到货通知</a></span>
    </dl>
</div>
<script>
    function go_to_msgrd(){
        var url = "http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODE4MzI0OF80NjAxNTRfNDAwNzI4ODAxN18yXw";
        window.open(url);
    }
</script>

</body></html>
