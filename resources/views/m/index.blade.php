<!DOCTYPE html>
<!-- saved from url=(0032)http://www.shikefood.com/mobile/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta name="viewport" content="width=device-width">
    <!-- <title>食恪商城-手机版</title> -->
    <title>远辉生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家-移动站</title>
    <meta name="Keywords" content="远辉,批发生鲜,水果,粮油,水果,蔬菜,肉类,羊肚菌,松茸,羊肝菌,鹿茸菌,鸡油菌,竹荪,虫草花">
    <meta name="Description" content="远辉生鲜，生鲜菌类食品购买平台，致力于改善中国食品现状，本网买手从云南,阿坝州等地采集优质食材，真正实现基地直送，全程冷链配送，新鲜！">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/index.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/chongchou.css">
    <link rel="shortcut icon" href="http://www.shikefood.com/mobile/favicon.ico">
    <script src="{{url('js')}}/hm.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.json.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>  <!--<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>-->
    <script type="text/javascript" src="{{url('js')}}/jquery.more.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
    <script>
        $(document).ready(function(){
            var imgSrc = $('#advertise img').attr('src');
            var localImg = localStorage.getItem('advindex');
            var localtime = localStorage.getItem('advtime');

            if( localImg !=null && localImg == imgSrc ){
                //不显示广告

                $('#advertise').css('display','none');
            }
            else{
//				showAdv();
//
//				localStorage.setItem('advindex', imgSrc);
//				localStorage.setItem('advtime', new Date().getTime());
                $('#advertise').css('display','none');
            }
        });
        function showAdv(){
            var t = 5;
            $('#advertise').fadeIn(1);
            var intervalkey = setInterval(function(){
                if(t>0){
                    $('#advertise span i').html(t);
                    t = t-1;
                }
                else{
                    clearInterval(intervalkey);
                    $('#advertise').fadeOut('slow');
                }
            }, 1000);
        }

        function closeAdv(){
            $('#advertise').fadeOut('slow');
        }
    </script>

</head>
<body>
<div class="advertise" id="advertise" style="display:none;">
    <a href="http://www.shikefood.com/mobile/#"><img src="{{url('css')}}/page5.jpg"></a>
    <span>跳过<i>5</i></span>
    <span onclick="closeAdv();">跳过<i>5</i></span>
</div>
<div class="body_bj">
    <header id="header"> <script type="text/javascript">
            var process_request = "正在处理您的请求...";
        </script>
        <script language="javascript">
            <!--
            /*屏蔽所有的js错误*/
            function killerrors() {
                return true;
            }
            window.onerror = killerrors;
            //-->
            function checkSearchForm()
            {
                if(document.getElementById('searchtype').value == 0){
                    if(document.getElementById('keyword').value != '' && document.getElementById('keyword').value != '请输入关键词')
                    {
                        return true;
                    }
                    else
                    {
                        alert("请输入关键词！");
                        return false;
                    }
                }else{
                    if(document.getElementById('keyword').value == '' || document.getElementById('keyword').value == '请输入关键词'){
                        document.getElementById('keyword').value = '';
                        return true;
                    }
                }
            }
        </script>
        <a href="/fenlei" class="top_bt"></a>
        <!--<a href="flow.php" class='user_btn'></a>-->
        <script type="text/javascript" src="{{url('css')}}/api"></script><script type="text/javascript" src="{{url('css')}}/getscript"></script>
        <script type="text/javascript">
            // 百度地图API功能
            //var point = new BMap.Point(116.331398,39.897445);
            function myFun(result){
                var cityName = result.name;
                document.getElementById("demo").innerHTML=cityName;
            }
            var myCity = new BMap.LocalCity();
            myCity.get(myFun);
        </script>
        <a href="javascript:showDialog()" class="selectPos"><i></i><span id="demo">眉山市</span></a>
        <span href="javascript:void(0)" class="logo"><i class="icon_logo"></i></span> </header>

    <style>
        .scrollimg{position:relative; overflow:hidden; margin:0px auto; /* 设置焦点图最大宽度 */}
        .scrollimg .hd{ position: absolute;
            bottom:0px;
            text-align: center;
            width: 100%;}
        .scrollimg .hd li{display: inline-block;
            width: .4em;
            height: .4em;
            margin: 0 .4em;
            -webkit-border-radius: .8em;
            -moz-border-radius: .8em;
            -ms-border-radius: .8em;
            -o-border-radius: .8em;
            border-radius: .8em;
            background: #FFF;
            filter: alpha(Opacity=60);
            opacity: .6;
            box-shadow: 0 0 1px #ccc; text-indent:-100px; overflow:hidden; }
        .scrollimg .hd li.on{ filter: alpha(Opacity=90);
            opacity: .9;
            background:#E71F19;
            box-shadow: 0 0 2px #ccc; }
        .scrollimg .bd{position:relative; z-index:0;}
        .scrollimg .bd li{position:relative; text-align:center;}
        .scrollimg .bd li img{background:url(themesmobile/68ecshopcom_mobile/images/loading.gif) center center no-repeat;  vertical-align:top; width:100%;/* 图片宽度100%，达到自适应效果 */}
        .scrollimg .bd li a{-webkit-tap-highlight-color:rgba(0,0,0,0);}  /* 去掉链接触摸高亮 */
        .scrollimg .bd li .tit{display:block; width:100%;  position:absolute; bottom:0; text-indent:10px; height:28px; line-height:28px; background:url(themesmobile/68ecshopcom_mobile/images/focusBg.png) repeat-x; color:#fff;  text-align:left;}
    </style>
    <div id="scrollimg" class="scrollimg">
        <div class="bd">
            <div class="tempWrap" style="overflow:hidden; position:relative;">
                <ul style="width: 2250px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translate(-1500px, 0px) translateZ(0px);">
                    @foreach($lunbo as $item)
                    <li style="display: table-cell; vertical-align: top; width: 375px;">
                        <a href="{{$item->href}}"><img src="{{$item->img_url}}" width="100%"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="hd">
            <ul><li class="">1</li><li class="">2</li><li class="">3</li><li class="on">4</li></ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#scrollimg",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"leftLoop",
            autoPage:true,//自动分页
            autoPlay:true //自动播放
        });
    </script>
    <!--
    <div class="index_search">
      <div class="index_search_mid"> <a href="searchindex.php"> <em>请输入您所搜索的商品</em> <span><img src="themesmobile/68ecshopcom_mobile/images/icosousuo.png"></span> </a> </div>
    </div>
    -->
    <div class="entry-list clearfix">
        {{--<nav id="scrollnav" class="scrollnav">--}}
            {{--<div class="bd">--}}
                {{--<div class="tempWrap" style="overflow:hidden; position:relative;">--}}
                    {{--<ul style="width: 1125px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translate(-375px, 0px) translateZ(0px);">--}}
                        {{--<ul style="display: table-cell; vertical-align: top; width: 375px;">--}}
                            {{--<li>--}}
                                {{--<a href="http://www.shikefood.com/mobile/home.php?id=380">--}}
                                    {{--<img alt="家乡味道" src="{{url('images')}}/1476542683363454754.png">--}}
                                    {{--<span>家乡味道</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="http://www.shikefood.com/mobile/recommend.php?id=420">--}}
                                    {{--<img alt="新品推荐" src="{{url('images')}}/1476542752380171501.png">--}}
                                    {{--<span>新品推荐</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="http://www.shikefood.com/mobile/group_buy.php">--}}
                                    {{--<img alt="团购" src="{{url('images')}}/1476542785290341410.png">--}}
                                    {{--<span>团购</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="http://www.shikefood.com/mobile/j_seckill_goods.php">--}}
                                    {{--<img alt="限时抢购" src="{{url('images')}}/1478239002678884818.png">--}}
                                    {{--<span>限时抢购</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="http://www.shikefood.com/mobile/user.php?act=order_list">--}}
                                    {{--<img alt="我的订单" src="{{url('images')}}/1476542909702728774.png">--}}
                                    {{--<span>我的订单</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}

                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="hd">--}}
                {{--<ul><li class="on">1</li></ul>--}}
            {{--</div>--}}
        {{--</nav>--}}

        <script type="text/javascript">
            TouchSlide({
                slideCell:"#scrollnav",
                titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                mainCell:".bd ul",
                effect:"leftLoop",
                autoPage:true,//自动分页
                autoPlay:false //自动播放
            });
        </script>

    </div>

    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="{{url('js')}}/touchslider.dev.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.more.js"></script>
    <style>
        .scrollimg{position:relative; overflow:hidden; margin:0px auto; /* 设置焦点图最大宽度 */}
        .scrollimg .hd{ position: absolute;
            bottom:0px;
            text-align: center;
            width: 100%;}
        .scrollimg .hd li{display: inline-block;
            width: .4em;
            height: .4em;
            margin: 0 .4em;
            -webkit-border-radius: .8em;
            -moz-border-radius: .8em;
            -ms-border-radius: .8em;
            -o-border-radius: .8em;
            border-radius: .8em;
            background: #FFF;
            filter: alpha(Opacity=60);
            opacity: .6;
            box-shadow: 0 0 1px #ccc; text-indent:-100px; overflow:hidden; }
        .scrollimg .hd li.on{ filter: alpha(Opacity=90);
            opacity: .9;
            background:#E71F19;
            box-shadow: 0 0 2px #ccc; }
        .scrollimg .bd{position:relative; z-index:0;}
        .scrollimg .bd li{position:relative; text-align:center; margin-top: 5px;}
        .scrollimg .bd li img{background:url(themesmobile/68ecshopcom_mobile/images/loading.gif) center center no-repeat;  vertical-align:top; width:100%;/* 图片宽度100%，达到自适应效果}*/
        .scrollimg .bd li a{-webkit-tap-highlight-color:rgba(0,0,0,0);}  /* 去掉链接触摸高亮 */
        .scrollimg .bd li .tit{display:block; width:100%;  position:absolute; bottom:0; text-indent:10px; height:28px; line-height:28px; background:url(themesmobile/68ecshopcom_mobile/images/focusBg.png) repeat-x; color:#fff;  text-align:left;}
    </style>
    <div id="scrollimg1" class="scrollimg" style="width: 100%;">
        <div class="bd">
            <ul style="background-color: #fff;">
            </ul>
        </div>


    </div>


    <script>
        $(document).ready(function(){
            var windowwidth = $(window).width();
            $('.recomondProList>li').css('width', windowwidth);

            $('.recomondHeader ul li').click(function(){
                var nth = $('.recomondHeader ul li').index($(this));
                $('.recomondHeader>ul>li').removeClass('current').eq(nth).addClass('current');
                $('.recomondProList>li').removeClass('current').eq(nth).addClass('current');
            });

            /*设置宽度*/
            $('.ul1').each(function(){
                var vn = $(this).find('li').length;
                var vwidth = (parseInt($(this).find('li').css("width")) +  parseInt($(this).find('li').css("margin-left")) + parseInt($(this).find('li').css("margin-right")));
                console.log(vwidth,vn);
                if(vwidth != NaN){
                    $(this).css("width",vwidth*vn);
                }
                else{
                    $(this).css("width",windowwidth);
                }
            });

        });
    </script>

    <style>
        .price-span1 {
            position: absolute;
            top: 0;
            margin-top: 17vw;
            left: 10vw;
            color: #f45a15;
            margin-left: -4px;
        }
        .price-unit1 {
            font-size: 3vw;
        }
        .goods-price1 {
            font-size: 4vw;
            margin-left:-4px;
        }
        .price-span2 {
            position: absolute;
            top: 0;
            margin-top: 14vw;
            left: 4vw;
            color: #f45a15;
            margin-left: -4px;
        }
        .price-unit2 {
            font-size: 2vw;
        }
        .goods-price2 {
            font-size: 3vw;
            margin-left:-4px;
        }
        .price-span3 {
            position: absolute;
            top: 0;
            margin-top: 14vw;
            left: 4vw;
            color: #f45a15;
            margin-left: -4px;
        }
        .price-unit3 {
            font-size: 2vw;
        }
        .goods-price3 {
            font-size: 3vw;
            margin-left:-4px;
        }
        .price-span4 {
            position: absolute;
            top: 0;
            margin-top: 15vw;
            left: 4vw;
            color: #f45a15;
            margin-left: -4px;
        }
        .price-unit4 {
            font-size: 3vw;
        }
        .goods-price4 {
            font-size: 4vw;
            margin-left:-4px;
        }
    </style>
    <div class="main">
        <div class="index-main-top">
            <div class="page-top">
                <h3><p><span class="span3 icon01"></span>新鲜菌类</p><a href="/fenlei" class="a1">&gt;</a></h3>
            </div>
            @foreach($goods as $item)
            <div class="page-center" style="position: relative;">
                <a href="/goods/{{$item->id}}">
                    <img src="{{$item->商品首页图片}}" width="100%">

                </a>
            </div>
                <span style=" padding: 0 50% 0;
    text-align: center;
    background-color: white;
    height: 1px;
"></span>
        @endforeach


        </div>
    </div>

</div>

<!--<div class="blanks" style="width:100%;height:51px"></div>-->
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
<script type="text/javascript">
    var url = 'index_bestgoods.php?act=ajax';
    $(function(){
        $('#J_ItemList').more({'address': url});
    });
</script>
<script>
    function goTop(){
        $('html,body').animate({'scrollTop':0},600);
    }
</script>
<a href="javascript:goTop();" class="gotop"><img src="{{url('images')}}/topup.png"></a>
<script type="Text/Javascript" language="JavaScript">
    function selectPage(sel)
    {
        sel.form.submit();
    }
</script>
<script type="text/javascript">
    var button_compare = "";
    var exist = "您已经选择了%s";
    var count_limit = "最多只能选择4个商品进行对比";
    var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
    var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
    var btn_buy = "购买";
    var is_cancel = "取消";
    var select_spe = "请选择商品属性";
</script>
<script>
    $(function(){
        var datename = new Date();
        //var Offset = datename.getTimezoneOffset() * 28800;
        var Offset = datename.getTimezoneOffset();

        setInterval(function(){
            $(".endtime").each(function(){
                var obj = $(this);
                var endTime = new Date(parseInt(obj.attr('value')) * 1000 - Offset*60000) ;
                var strTime = new Date(parseInt(obj.attr('startvalue')) * 1000 - Offset*60000) ;



                var show_day =  obj.attr('showday');
                var nowTime = new Date();
                var nMS=endTime.getTime() - nowTime.getTime();  //距离结束毫秒
                var eMs=strTime.getTime() - nowTime.getTime();  //距离开始毫秒

                if(nMS >=0 && eMs <= 0){
                    var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
                    var myH_show=Math.floor(nMS/(1000*60*60) % 24);
                    var myH=Math.floor(nMS/(1000*60*60));
                    var myM=Math.floor(nMS/(1000*60)) % 60;
                    var myS=Math.floor(nMS/1000) % 60;
                    var myMS=Math.floor(nMS/100) % 10;
                }
                if(eMs >= 0){
                    var syD=Math.floor(eMs/(1000 * 60 * 60 * 24));
                    var syH_show=Math.floor(eMs/(1000*60*60) % 24);
                    var syH=Math.floor(eMs/(1000*60*60));
                    var syM=Math.floor(eMs/(1000*60)) % 60;
                    var syS=Math.floor(eMs/1000) % 60;
                    var syMS=Math.floor(eMs/100) % 10;
                }

                if(myS >= 0 && eMs <= 0){
                    if(show_day == 'show')
                    {
                        var str = '距结束:'+myD+'天'+myH_show+'小时'+myM+'分'+myS+'秒';
                        obj.css('color','#F00');
                    }
                    else
                    {
                        var str = '距结束:'+myH+'时'+myM+'分'+myS+'秒';
                        obj.css('color','#F00');
                    }
                }else{
                    if(eMs > 0){
                        if(show_day == 'show')
                        {
                            var str = '距开始:'+syD+'天'+syH_show+'小时'+syM+'分'+syS+'秒';
                        }
                        else
                        {
                            var str = '距开始:'+syH+'时'+syM+'分'+syS+'秒';
                        }
                    }else{
                        var str = "已结束！";
                    }
                }
                obj.html(str);
            });
        }, 100);
    })
</script>
<script>
    //保持登录，退出状态此值会无效
    if(localStorage.getItem('MOBILE_ECS_ID')!= null && localStorage.getItem('MOBILE_ECS_ID')!= undefined){
        setCookie('MOBILE_ECS_ID',localStorage.getItem('MOBILE_ECS_ID'),'7d');
    }
</script>


</body></html>
