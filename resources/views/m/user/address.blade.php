<!DOCTYPE html>
<!-- saved from url=(0057)http://www.shikefood.com/mobile/user.php?act=address_list -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <!-- <title>用户中心_食恪生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家  </title> -->
    <title></title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/user.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/share.css">
    <script src="{{url('css')}}/hm.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.more.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.json.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
    <script type="text/javascript" src="{{url('js')}}/utils.js"></script>
    <script type="text/javascript" src="{{url('js')}}/shopping_flow.js"></script>
    <script type="text/javascript" src="{{url('js')}}/user.js"></script></head>
<body class="body_bj">
<header>
    <div class="tab_nav">
        <div class="header">
            <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
            <div class="h-mid">管理收货地址
            </div>
            <div class="h-right">
                <aside class="top_bar">
                    <div onclick="show_menu();$(&#39;#close_btn&#39;).addClass(&#39;hid&#39;);" id="show_more"><a href="javascript:;"></a> </div>
                </aside>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript" src="{{url('css')}}/mobile.js"></script>
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
<div id="tbh5v0">

    <!--  -->




    <div id="tbh5v0">
        <script type="text/javascript" src="{{url('css')}}/region.js"></script>  <script type="text/javascript">
            region.isAdmin = false;
            var consignee_not_null = "收货人姓名不能为空！";
            var country_not_null = "请您选择收货人所在国家！";
            var province_not_null = "请您选择收货人所在省份！";
            var city_not_null = "请您选择收货人所在城市！";
            var district_not_null = "请您选择收货人所在区域！";
            var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
            var address_not_null = "收货人的详细地址不能为空！";
            var mobi_not_null = "手机不能为空！";
            var tele_not_null = "电话不能为空！";
            var shipping_not_null = "请您选择配送方式！";
            var payment_not_null = "请您选择支付方式！";
            var goodsattr_style = "1";
            var tele_invaild = "电话号码不是有效的号码";
            var zip_not_num = "邮政编码只能填写数字";
            var mobile_invaild = "手机号码不是合法号码";
        </script>

        <!--<div class="address_top"></div>-->
        <div class="dotm_no">
            <dl>
                <dd>暂无收货地址，请尽快添加</dd>
            </dl>
        </div>
    </div>

    <div style=" width:100%; height:50px;"></div>
    <div class="list_footer">
        <a href="http://www.shikefood.com/mobile/user.php?act=address"><i class="icon_plus">+</i>添加新地址</a>
    </div>

    <script>
        function goTop(){
            $('html,body').animate({'scrollTop':0},600);
        }
        //修改默认收货地址
        function change_address(address_id){
            if(confirm("确认修改默认地址?")){
                window.location.href="user.php?act=set_address&address_id="+address_id;
            }
        }
    </script>
    <a href="javascript:goTop();" class="gotop"><img src="{{url('css')}}/topup.png"></a>


</div>

<script language="javascript">
    $(function(){
        $('input[type=text],input[type=password]').bind({
            focus:function(){
                $(".global-nav").css("display",'none');
            },
            blur:function(){
                $(".global-nav").css("display",'flex');
            }
        });
    })
</script>
<div style="height:45px;line-height:50px; clear:both;"></div>


<div class="footer_nav">
    <div class="footer-menu">
        <ul style="width: 75%;">
            <li><a href="http://www.shikefood.com/mobile/"><i class="menuicon menuicon1"></i><p>首页</p></a></li>
            <li><a href="http://www.shikefood.com/mobile/catalog.php"><i class="menuicon menuicon2"></i><p>分类</p></a></li>
            <li><a href="http://www.shikefood.com/mobile/searchindex.php"><i class="menuicon menuicon3"></i><p>搜索</p></a></li>
            <li class="current"><a href="http://www.shikefood.com/mobile/user.php"><i class="menuicon menuicon4"></i><p>个人中心</p></a></li>
        </ul>
        <div class="shopcart">
            <a href="http://www.shikefood.com/mobile/flow.php?filter=activity">
                <span class="count global-nav__nav-shop-cart-num" id="ECS_CARTINFO"> 2 </span>
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
