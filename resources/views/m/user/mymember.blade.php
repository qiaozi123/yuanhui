<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <title>我的会员-食恪生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" href="{{url('css')}}/article.css">
    <script src="{{url('js')}}/hm.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
</head>
<body>

<div class="tab_nav">
    <header class="header">
        <div class="h-left">
            <a class="sb-back" href="javascript:history.back(-1)" title="返回"></a>
        </div>
        <div class="h-mid">
            <h6>我的会员</h6>
        </div>

    </header>
</div>

<!-- <div class="ah-right">
      <a href="article_cat_list.php" class="list">列表</a>
      </div> -->
<div class="page-service-exchange">
    <!-- <div class="backlist"><a href="javascript:void(0)" class="b"><span>我的会员 </span></a></div> -->
    <style>
        .pagecontent img{width:100%!important; height:auto!important;}
    </style>
    <div class="pagecontent">
        <p><img src="{{url('images')}}/myhuiyuan.jpg"></p><p style="text-align:center"><strong><span style="font-size:16px;font-family: 宋体">会员级别介绍</span></strong></p><p class="MsoListParagraph" style="margin-left:28px">一、 <span style="font-family:宋体">会员级别说明</span></p><p class="MsoListParagraph" style="margin-left:24px">1.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">食恪网会员级别共分为</span>5<span style="font-family:宋体">个等级，分别为：注册食恪、铜牌食恪、银牌食恪、金牌食恪、钻石食恪。</span></p><p class="MsoListParagraph" style="margin-left:24px">2.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">会员级别升降均由系统自动处理，无需申请。</span></p><p class="MsoListParagraph" style="margin-left:24px">3.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">会员级别由成长值决定，成长值越高会员等级越高，享受的会员权益越大。</span></p><p class="MsoListParagraph" style="margin-left:24px;text-indent:0">&nbsp;</p><p class="MsoListParagraph" style="margin-left:28px">二、 <span style="font-family:宋体">成长值构成</span></p><p class="MsoListParagraph" style="margin-left:24px">1.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">成长值以有效购物金额作为计算标准，有效购物金额</span>1<span style="font-family:宋体">元</span>=1<span style="font-family:宋体">分成长值。</span></p><p class="MsoListParagraph" style="margin-left:24px">2.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">订单状态在“收货完成”后，该笔订单金额计入有效购物金额，成长值相应发放；出现退货，则退货金额作相应扣除。</span></p><p class="MsoListParagraph" style="margin-left:24px">3.<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-family:宋体">购买的商品，若为礼品卡，则不计入有效购买金额，因而不计入成长值；礼品卡使用，产生即时消费后，可计入有效购物金额，成长值相应发放。</span></p><p class="MsoListParagraph" style="margin-left:24px">４．运费不计入有效购买金额。</p><p><br></p><p><br></p><p><br></p>			</div>
</div>
<div class="blanks" style="width:100%;height:51px"></div>
<div style="height:45px;line-height:50px; clear:both;"></div>

<div class="footer_nav">
    <div class="footer-menu">
        <ul style="width: 75%;">
            <li class="current"><a href="/"><i class="menuicon menuicon1"></i><p>首页</p></a></li>
            <li><a href="/fenlei"><i class="menuicon menuicon2"></i><p>分类</p></a></li>
            <li><a href="/search"><i class="menuicon menuicon3"></i><p>搜索</p></a></li>
            <li><a href="/user"><i class="menuicon menuicon4"></i><p>个人中心</p></a></li>
        </ul>
        <div class="shopcart">
            <a href="http://www.shikefood.com/mobile/flow.php?filter=activity">
                <span class="count global-nav__nav-shop-cart-num" id="ECS_CARTINFO"> 0 </span>
            </a>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        lightmenu();
    })
    //重新加载购物车商品数量
    update_cart_goods_count();
    function update_cart_goods_count(){
        $.ajax({
            type:"POST",
            url:"index.php?act=update_cart_goods_count",
            success:function(data){
                $("#ECS_CARTINFO").text(data);
            }
        });
    }
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f84308146ad12f1098c0af9e25217e46";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body></html>
