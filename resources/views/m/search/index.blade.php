<!DOCTYPE html>
<!-- saved from url=(0047)http://www.shikefood.com/mobile/searchindex.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <!-- <title>食恪生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家  </title> -->
    <title>食恪生鲜</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/index.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/category.css">
    <style>
        .mix_recently_search h3 i{
            width:0px;
        }
        .mix_recently_search h3{
            width:auto;
        }
        .Delete{
            margin-top: 5px;
        }
        .mix_recently_search ul li{
            border: 1px solid #6cc923;
        }
        .mix_recently_search ul li a{
            color: #6cc923;
        }
    </style>
    <script src="{{url('js')}}/hm.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.json.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
</head>
<body style="cursor: auto;">
<header id="head_search_box" style="position: fixed; top: 0px; width: 100%; z-index:9999;">
    <div class="cate_header">
        <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
        <div class="cate_mid">
            <form id="searchForm" name="searchForm" method="get" action="http://www.shikefood.com/mobile/search.php" onsubmit="return checkSearchForm()">
                <div class="text_box" name="list_search_text_box" onclick="return 1;">
                    <input id="keyword" name="keywords" type="text" placeholder="请输入商品名称 货号" class="text" value="">
                    <input type="submit" value="" class="submit" id="list_search_submit">
                </div>
            </form></div>
        <div class="cate_right">

            <li style=" margin-right:-7px;"><a href="javascript:;" class="show_type ">&nbsp;</a></li>
        </div>
    </div>
</header>
<div id="search_hide" class="search_hide">
    <h2> <span class="close"><a href="http://www.shikefood.com/mobile/index.php"><img src="{{url('css')}}/close.png"></a></span>关键搜索</h2>
    <div id="search_goods">
        <section class="mix_recently_search"><h3><i class="search_h1"></i><span>搜索记录</span><a href="javascript:del_session_search(&#39;search_goods&#39;)" class="Delete" style="color:#999;">删除</a> </h3>
            <ul></ul>
        </section>
    </div>
    <section class="mix_recently_search"><h3>热门搜索</h3>
        <ul>
            <li>
                <a href="http://www.shikefood.com/mobile/search.php?keywords=%E6%B0%B4%E6%9E%9C">水果</a>
            </li>
            <li>
                <a href="http://www.shikefood.com/mobile/search.php?keywords=%E8%94%AC%E8%8F%9C">蔬菜</a>
            </li>
            <li>
                <a href="http://www.shikefood.com/mobile/search.php?keywords=%E6%B5%B7%E9%B2%9C">海鲜</a>
            </li>
            <li>
                <a href="http://www.shikefood.com/mobile/search.php?keywords=%E8%99%BE">虾</a>
            </li>
            <li>
                <a href="http://www.shikefood.com/mobile/search.php?keywords=%E6%A4%B0%E9%9D%92">椰青</a>
            </li>
        </ul>
    </section>
</div>

<script>
    $('.search-type li').click(function() {
        $(this).addClass('cur').siblings().removeClass('cur');
        $('#searchtype').val($(this).attr('num'));
    });
    $('#searchtype').val($(this).attr('0'));
    window.onload = function(){
        Ajax.call('search.php?is_ajax=1&act=get_session_search_goods', '', session_search_goods , 'POST', 'JSON');
    }
    function session_search_goods(request){
        $("#search_goods ul").html(request);
    }
    function search_key(key){
        document.getElementById('keyword').value = key;
        document.getElementById('searchForm').submit();
    }
    function del_session_search(name){
        Ajax.call('search.php?is_ajax=1&act=del_session_search','name='+name, delSearchResponse, 'GET', 'JSON');
    }
    function delSearchResponse(result){
        if(result>0){
            $("#search_goods ul").html("");
        }
    }
</script>
<div class="blanks" style="width:100%;height:51px"></div>
<div style="height:45px;line-height:50px; clear:both;"></div>


<div class="footer_nav">
    <div class="footer-menu">
        <ul style="width: 75%;">
            <li><a href="/"><i class="menuicon menuicon1"></i><p>首页</p></a></li>
            <li><a href="/fenlei"><i class="menuicon menuicon2"></i><p>分类</p></a></li>
            <li class="current"><a href="/search"><i class="menuicon menuicon3"></i><p>搜索</p></a></li>
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
