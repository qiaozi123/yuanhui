<!DOCTYPE html>
<!-- saved from url=(0043)http://www.shikefood.com/mobile/catalog.php -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <!-- <title>所有分类_食恪生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家  </title> -->
    <title>远辉生鲜_分类</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/catalog.css">
    <script src="{{url('js')}}/hm.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>

    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
</head>
<body>

<header class="header" style=" position:fixed; top:0">
    <div class="tab_nav">
        <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
        <div class="h-mid">全部分类</div>
        <div class="h-right">
            <aside class="top_bar">
                <div onclick="show_menu();$(&#39;#close_btn&#39;).addClass(&#39;hid&#39;);" id="show_more"><a
                        href="javascript:;"></a></div>
            </aside>
        </div>
    </div>
</header>
<script type="text/javascript" src="{{url('js')}}/mobile.js"></script>
<div class="goods_nav hid" id="menu">
    <div class="Triangle">
        <h2></h2>
    </div>
    <ul>
        <li><a href="http://www.shikefood.com/mobile/index.php"><span class="menu1"></span><i>首页</i></a></li>
        <li><a href="http://www.shikefood.com/mobile/catalog.php"><span class="menu2"></span><i>分类</i></a></li>
        <li><a href="http://www.shikefood.com/mobile/flow.php?filter=activity"><span class="menu3"></span><i>购物车</i></a>
        </li>
        <li style=" border:0;"><a href="http://www.shikefood.com/mobile/user.php"><span
                    class="menu4"></span><i>我的</i></a></li>
    </ul>
</div>

<div class="container">
    <div class="category-box" style="height: 640px;">
        <div class="category1" style="outline: none; overflow: hidden; cursor: -webkit-grab;" tabindex="5000">
            <ul class="clearfix" style=" padding-top:45px;">
                <li >全部产品</li>

            </ul>
        </div>

        <div class="category2" style=" outline: none; overflow-y:scroll" tabindex="5001">
            <dl style="display: none; padding-top:45px;display: block;">

                <dt><a href="#">全部产品</a></dt>
                <dd>

                    <div class="fenimg">
                        @foreach($data as $item)
                        <div class="fen">

                            <a href="{{url('goods')}}/{{$item->id}}" style="height: 120px;">
                                <div class="fen_detailImg"><img src="{{$item->商品首页图片}}" alt=""
                                                                style="width: 80px;height: 80px;"></div>
                                <span>{{$item->名称}}</span>
                            </a>

                        </div>
                            @endforeach
                    </div>
                </dd>

            </dl>

        </div>
    </div>
</div>
<div class="blanks" style="width:100%;height:51px"></div>

<div style="height:45px;line-height:50px; clear:both;"></div>


<div class="footer_nav">
    <div class="footer-menu">
        <ul style="width: 75%;">
            <li><a href="/"><i class="menuicon menuicon1"></i><p>首页</p></a></li>
            <li  class="current"><a href="/fenlei"><i class="menuicon menuicon2"></i><p>分类</p></a></li>
            <li><a href="/search"><i class="menuicon menuicon3"></i><p>搜索</p></a></li>
            <li><a href="/user"><i class="menuicon menuicon4"></i><p>个人中心</p></a></li>
        </ul>
        <div class="shopcart">
            <a href="">
                <span class="count global-nav__nav-shop-cart-num" id="ECS_CARTINFO"> 0 </span>
            </a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        lightmenu();
    })
    //重新加载购物车商品数量
    update_cart_goods_count();

    function update_cart_goods_count() {
        $.ajax({
            type: "POST",
            url: "index.php?act=update_cart_goods_count",
            success: function (data) {
                $("#ECS_CARTINFO").text(data);
            }
        });
    }
</script>


<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f84308146ad12f1098c0af9e25217e46";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script src="{{url('js')}}/category.js"></script>
<script src="{{url('js')}}/jquery.nicescroll.min.js"></script>

<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr"
     style="width: 0px; z-index: auto; cursor: -webkit-grab; position: absolute; top: 0px; left: 90px; height: 291px; touch-action: none; display: none;">
    <div class="nicescroll-cursors"
         style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: 0px; background-clip: padding-box; border-radius: 5px; touch-action: none;"></div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr"
     style="height: 0px; z-index: auto; top: 291px; left: 0px; position: absolute; display: none;">
    <div class="nicescroll-cursors"
         style="position: absolute; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: 0px; background-clip: padding-box; border-radius: 5px;"></div>
</div>
</body>
</html>
