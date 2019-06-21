<!DOCTYPE html>
<!-- saved from url=(0059)http://www.shikefood.com/mobile/user.php?act=bonus&status=0 -->
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
    <script src="{{url('js')}}/hm.js"></script>
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
            <div class="h-mid">我的优惠券
            </div>
            <div class="h-right">
                <aside class="top_bar">
                    <div onclick="show_menu();$(&#39;#close_btn&#39;).addClass(&#39;hid&#39;);" id="show_more"><a href="javascript:;"></a> </div>
                </aside>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript" src="{{url('js')}}/mobile.js"></script>
<div class="goods_nav hid" id="menu"  >
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



    <script type="text/javascript">
        var url = 'bonus.php?act=ajax&status=0';
        $(function(){

            $('#J_ItemList').more({'address': url});
        });
    </script>








    <style>
        .bonuspopup .btest:hover .menu-bd1 {
            display: block;
        }
        .bonuspopup .menu-bd1 {
            width: 100px;
        }
        .bonuspopup .menu-bd1 {
            line-height: 1.4;
            padding: 8px 10px;
        }
        .bonuspopup .menu-bd1 {
            display: none;
            position: absolute;
            left: 0;
            top: 23px;
            background: #E4E4E4;
            opacity: .99;
            filter: alpha(opacity=99);
            z-index: 93110;
            border: solid #eee;
            border-width: 0 1px 1px;
            color: #666;
        }



        .home-category-bonus {
            display: inline-block;

            background-image:url(/mobile/images/sanjiao.png);
            background-repeat: no-repeat;
            background-position: 0px center;
            background-size: cover;
            width: 10px;
            height: 10px;

            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
        }

        .bonuspopup:hover .home-category-bonus {
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
        }
    </style>

    <form name="addBouns" action="http://www.shikefood.com/mobile/user.php" method="post" onsubmit="return addBonus()" class="add_bonus">
        <dl class="tbl_type">
            <dt>
                <input type="text" name="bonus_sn" value="" id="bonus_sn" size="30" placeholder="请输入优惠券序列号">
            </dt>
            <dd>
                <input type="submit" name="submit" value="添加优惠券">
                <input type="hidden" name="act" value="act_add_bonus">
            </dd>
        </dl>
    </form>
    <ul class="order_listtop">
        <li style="width: 33%;"><a href="http://www.shikefood.com/mobile/user.php?act=bonus&amp;status=0" class="on">未使用</a></li>
        <li style="width: 34%;"><a href="http://www.shikefood.com/mobile/user.php?act=bonus&amp;status=1">已使用</a></li>
        <li style="width: 33%;"><a href="http://www.shikefood.com/mobile/user.php?act=bonus&amp;status=2">已过期</a></li>
    </ul>



    <div id="J_ItemList" style="opacity: 1;">

        <div class="product single_item info" id="more_element_1"><div class="user_bonus">
                <ul>
                    <li>注册即享优惠券99-10</li>

                    <li>发行店铺：自营商</li>

                    <li>使用条件：满99.00可用</li>

                    <!--  <li>使用范围：0</li>-->
                    <div class="bonuspopup" style="position:relative">

                        <div class="btest" style="font-size: 12px;    line-height: 20px;">
                            使用范围：全部商品                                    <a>
                                &nbsp;
                                <i class="home-category-bonus"></i>
                            </a>

                            <div id="menu-2" class="menu-bd1" style="padding-bottom: 2px;">

                                全部商品

                            </div>
                        </div>
                    </div>

                    <li startdate="2019-06-06" enddate="2019-07-06">有效时间: 2019-06-06-2019-07-06</li>
                </ul>


                <dl>
                    <dt><i>¥</i>10.00</dt><dt>
                    </dt><dd>未使用</dd>
                </dl>
            </div>
        </div><div class="product single_item info" id="more_element_2"><div class="user_bonus">
                <ul>
                    <li>注册即享优惠券199-20</li>

                    <li>发行店铺：自营商</li>

                    <li>使用条件：满199.00可用</li>

                    <!--  <li>使用范围：0</li>-->
                    <div class="bonuspopup" style="position:relative">

                        <div class="btest" style="font-size: 12px;    line-height: 20px;">
                            使用范围：全部商品                                    <a>
                                &nbsp;
                                <i class="home-category-bonus"></i>
                            </a>

                            <div id="menu-2" class="menu-bd1" style="padding-bottom: 2px;">

                                全部商品

                            </div>
                        </div>
                    </div>

                    <li startdate="2019-06-06" enddate="2019-07-06">有效时间: 2019-06-06-2019-07-06</li>
                </ul>


                <dl>
                    <dt><i>¥</i>20.00</dt><dt>
                    </dt><dd>未使用</dd>
                </dl>
            </div>
        </div><div class="product single_item info" id="more_element_3"><div class="user_bonus">
                <ul>
                    <li>注册即享优惠券299-50</li>

                    <li>发行店铺：自营商</li>

                    <li>使用条件：满299.00可用</li>

                    <!--  <li>使用范围：0</li>-->
                    <div class="bonuspopup" style="position:relative">

                        <div class="btest" style="font-size: 12px;    line-height: 20px;">
                            使用范围：全部商品                                    <a>
                                &nbsp;
                                <i class="home-category-bonus"></i>
                            </a>

                            <div id="menu-2" class="menu-bd1" style="padding-bottom: 2px;">

                                全部商品

                            </div>
                        </div>
                    </div>

                    <li startdate="2019-06-06" enddate="2019-07-06">有效时间: 2019-06-06-2019-07-06</li>
                </ul>


                <dl>
                    <dt><i>¥</i>50.00</dt><dt>
                    </dt><dd>未使用</dd>
                </dl>
            </div>
        </div>
    </div>
    <script language="javascript">
        var scrolled1 = false;
        $(function(){


            $(window).on('scroll', function () {
                if ($(document).scrollTop() + $(window).height() > $(document).height()-10) {


                    if (scrolled1)        //防止重入
                        return false;
                    scrolled1 = true;
                    //console.log(11);
                    $('.get_more').click();
                    setTimeout('scrolled1=false', 100);
                }
            });





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


    <script language="javascript">

        $(document).ready(function(){

            $('.user_bonus').each(function(){

                $dom = $(this).find('ul li:last');

                var startDate =  $dom.attr('startdate');

                var endDate = $dom.attr('enddate');

                if((new Date(endDate).getTime()-new Date(startDate).getTime())/24/3600/1000==1){

                    $dom.html("有效时间："+startDate+"当天有效");

                }else{

                    var endTime=new Date(endDate).getTime()-24*3600*1000;

                    var year=new Date(endTime).getFullYear();

                    var month=new Date(endTime).getMonth()+1;

                    var date=new Date(endTime).getDate();

                    var month1="";

                    var date1="";

                    if(month<10){

                        month1="0"+month;

                    }else{

                        month1=month;

                    }

                    if(date<10){

                        date1="0"+date;

                    }else{

                        date1=date;

                    }

                    $dom.html("有效时间：从"+startDate+"<br/><span style='padding-left:60px'>至"+year+"-"+month1+"-"+date1+"</span>");

                }



            });

        })




    </script>

    <script type="text/javascript">
        var bonus_sn_empty = "请输入您要添加的优惠券号码！";
        var bonus_sn_error = "您输入的优惠券号码格式不正确！";
        var email_empty = "请输入您的电子邮件地址！";
        var email_error = "您输入的电子邮件地址格式不正确！";
        var old_password_empty = "请输入您的原密码！";
        var new_password_empty = "请输入您的新密码！";
        var confirm_password_empty = "请输入您的确认密码！";
        var both_password_error = "您现两次输入的密码不一致！";
        var msg_blank = "不能为空";
        var no_select_question = "- 您没有完成密码提示问题的操作";
    </script>


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
