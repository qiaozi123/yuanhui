<!DOCTYPE html>
<!-- saved from url=(0040)http://www.shikefood.com/mobile/user.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <!-- <title>用户中心_食恪生鲜-全程冷链，鲜活天然，产地直采，一站式生鲜服务管家  </title> -->
    <title>用户中心-远辉生鲜</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/login.css">

    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
    <script type="text/javascript" src="{{url('js')}}/utils.js"></script>
    <script type="text/javascript" src="{{url('js')}}/user.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>
</head>
<body class="body_bj">
<header id="header" class="header">
    <div class="h-left"><a href="javascript:history.back(-1)" class="sb-back"></a></div>
    <div class="h-mid">登录     </div>

    <div class="h-right"><a href="{{url('regist')}}" class="sb-regist">注册</a></div> </header>
<div class="denglu">
    <form  method="get" id="login">
        {{csrf_field()}}
        <div>
            <div class="Login" id="shike_login">
                <dl class="formbox">
                    <label for="username" class="Gicon icon_username"></label>
                    <dt class="hidden">用户名</dt>
                    <dd><input type="text" name="username" placeholder="手机号" value=""></dd>
                </dl>
                <dl class="formbox">
                    <label for="password" class="Gicon icon_password"></label>
                    <dd>
                        <script>
                            function change_p_type(){
                                if($("#p_password").attr("type") == "password"){
                                    $("#p_type").addClass("on");
                                    document.getElementById("p_password").type="text";
                                }
                                else{
                                    $("#p_type").removeClass("on");
                                    document.getElementById("p_password").type="password";
                                }
                            }
                        </script>
                        <input type="password" name="password" placeholder="密码" id="p_password"> </dd>
                    <span onclick="change_p_type()" class="p_type" id="p_type"></span>
                </dl>

            </div>
        </div>
        <div class="Login">
            <div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
                <input type="button" class="btn_big1" id="btn_big1"  value="登 录">
                <a href="{{url('regist')}}" class="btn_big2">注册即送好礼</a>
                <input type="hidden" name="act" value="act_login">
                <input type="hidden" name="back_act" value="http://localhost:8000/">
            </div>
            <script>
                $('#btn_big1').click(function(){

                    data = $("#login").serializeArray();
                    $.ajax({
                        url:"/login", //处理页面的路径
                        data:data, //要提交的数据是一个JSON
                        type:"POST", //提交方式
                        dataType:"TEXT", //返回数据的类型
                        //TEXT字符串 JSON返回JSON XML返回XML
                        success:function(res){ //回调函数 ,成功时返回的数据存在形参data里
                            console.log(res.status)
                            if(res.status=200)  //trim()方法会去掉页面中的冗余空格
                            {
                                window.location.href = "/user";
                            } else
                            {
                                $('#mobile_code_notice').html(res.msg)
                            }
                        }
                    });
                    return false;
                });
            </script>
            <div class="ng-foot">

                <div class="ng-link-area">

                    <span class="user_line"></span>
                    <span>
                  <a href="{{url('/user/forget')}}">忘记密码？</a>

                </span>
                </div>

            </div>
        </div>
    </form>
</div>


</body></html>
