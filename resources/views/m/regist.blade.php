<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta name="viewport" content="width=device-width">
    <title>食恪生鲜</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/public.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/login.css">
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/common.js"></script>
    <script type="text/javascript" src="{{url('js')}}/utils.js"></script>
    <script type="text/javascript" src="{{url('js')}}/register.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background:#f2f2f2">
<header id="header" class="header">
    <div class="h-left"><a href="javascript:history.back(-1)" class="back"></a></div>
    <div class="h-mid">用户注册</div>
</header>
<div id="tbh5v0">
    <script type="text/javascript">

        $().ready(function(){

            setCurrentForm($("#mobileForm"));

            //判断点击验证码
            var is_mob_log = true;

            $("#mobileForm").find(".check-code-img").click();

            //登录切换
            $("#logRegTab li").bind("click", function () {
                if (this.id == "mob_log") {

                    if(is_mob_log){
                        return;
                    }

                    is_mob_log = true;

                    $("#mob_log").removeClass("currl");
                    $("#acc_log").addClass("currr");
                    $("#phonearea").removeClass("hide");
                    $("#accountarea").addClass("hide");

                    setCurrentForm($("#mobileForm"));

                    $("#mobileForm").find(".check-code-img").click();
                } else {

                    if(!is_mob_log){
                        return;
                    }

                    is_mob_log = false;

                    $("#acc_log").removeClass("currr");
                    $("#mob_log").addClass("currl");
                    $("#phonearea").addClass("hide");
                    $("#accountarea").removeClass("hide");

                    setCurrentForm($("#emailForm"));

                    $("#emailForm").find(".check-code-img").click();
                }
                $(".btn_log").css("color","#FFFEFE");

            });
        });
    </script>
    <div class="log_reg_box">
        <ul class="tab clearfix" id="logRegTab">
            <!--
            <li id="mob_log" class="curr">
                <span>
                    <font>手机注册</font>
                </span>
            </li>
            <li id="acc_log" class="curr currr">
                <span>
                    <font>邮箱注册</font>
                </span>
            </li>
            -->
        </ul>
        <div id="logRegTabCon">
            <div class="log_reg_item" id="phonearea">
                <form  id="mobileForm" name="mobileForm" >
                    <input type="hidden" id="register_type" name="register_type" value="mobile">
                    <div>
                        <div class="Login register">
                            <dl class="formbox">
                                <dt class="visible">手机:</dt>
                                <dd><input type="text" id="mobile_phone" name="mobile_phone" placeholder="请输入手机号" class="" onblur="checkMobilePhone(this);"></dd>

                            </dl>
                            <div class="tips">
                                <span id="mobile_phone_notice"></span>
                            </div>

                            <dl class="formbox">
                                <dt class="visible">验证码:</dt>
                                <dd>
                                    <div class="codeTxt">
                                        <input type="text" id="mobile_code" maxlength="8" name="mobile_code" placeholder="短信验证码" class="">
                                    </div>
                                    <div class="codePhoto">
                                        <input id="zphone" type="button" value="获取验证码 " class="zphone" style="position: initial;">
                                    </div>
                                </dd>

                            </dl>
                            <div class="tips">
                                <span id="mobile_code_notice"></span>
                            </div>



                            <dl class="formbox">
                                <dt class="visible">密码:</dt>
                                <dd>
                                    <script>
                                        function change_p_type1(){
                                            if($(".password").attr("type") == "password"){
                                                $(".p_type").addClass("on");

                                                //document.getElementById("password").type="text";
                                                document.getElementsByClassName("password").item(0).type = "text";
                                            }
                                            else{
                                                $(".p_type").removeClass("on");

                                                //document.getElementById("password").type="password";
                                                document.getElementsByClassName("password").item(0).type = "password";
                                            }
                                        }
                                    </script>
                                    <input type="password" class="password" id="password" name="password" placeholder="请输入6至20位字符" onblur="check_password(this.value);">
                                    <span onclick="change_p_type1()" id="p_type1" class="p_type"></span>
                                </dd>
                            </dl>

                            <div class="tips">
                                <span id="password_notice"></span>
                            </div>









                            <!--
<dl style="border:none;" >
<dt>验证码</dt>
<dd>
<div class="codeTxt">
    <input type="text" id="mobile_code" maxlength="8"  name="mobile_code" placeholder="短信验证码" class="" />
    </div>
      <div class="codePhoto">
    <input id="zphone" type="button" value="获取验证码 " class="zphone" >
  </div>
</dd>
</dl>
-->

                            <dl class="formbox">
                                <dt class="visible" style="width: 80px;">推荐人ID:</dt>
                                <dd style="width:200px;">
                                    <input type="text" id="tuijian" name="tuijian" placeholder="请输入推荐人ID">

                                </dd>

                            </dl>



                            <dl>
                                <div class="safety">
                                    <input name="agreement" type="checkbox" value="1" checked="checked" class="checkbox">
                                    <!--
                                    <label for="remember" class="mar-b">同意《<a href="article.php?cat_id=-1" target="_blank">远辉生鲜网用户协议</a>》</label>
                                  -->
                                    <label for="remember" class="mar-b">同意《<a onclick="$(&#39;#popfuc&#39;).show();" target="_blank">远辉生鲜网用户协议</a>》</label>
                                </div>
                            </dl>

                        </div>
                    </div>


                    <div class="Login">
                        <div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
                            <input type="button" id="btn_submit" name="Submit" class="btn_big1" value="注 册">
                        </div>
                    </div>
                </form>
            </div>
            <script>
                $('#btn_submit').click(function(){
                    var aa = $('#password').val().length;
                    if(aa>20){
                        alert("登录密码不能超过20位");
                        return false;
                    }
                    var c=/^[A-Za-z0-9]+$/;
                    if (!c.test($('#password').val())) {
                        return false;
                    }
                    data = $("#mobileForm").serializeArray();
                    $.ajax({
                        url:"/regist", //处理页面的路径
                        data:data, //要提交的数据是一个JSON
                        type:"POST", //提交方式
                        dataType:"TEXT", //返回数据的类型
                        //TEXT字符串 JSON返回JSON XML返回XML
                        success:function(res){ //回调函数 ,成功时返回的数据存在形参data里
                            if(res.status=200)  //trim()方法会去掉页面中的冗余空格
                            {
                                window.location.href = "/";
                            } else
                            {
                                $('#mobile_code_notice').html(res.msg)
                            }
                        }
                    });
                    return false;
                });

            </script>
            <div class="log_reg_item hide" id="accountarea">
                <form action="https://www.shikefood.com/mobile/register.php" method="post" id="emailForm" name="emailForm">
                    <input type="hidden" id="register_type" name="register_type" value="email">

                    <div class="bgwhite">
                        <div class="Login">

                            <dl>
                                <dt>邮箱地址</dt>
                                <dd>
                                    <input type="email" name="email" placeholder="请输入邮箱地址" value="" class="" id="email" onblur="checkEmail(this.value);">
                                    <div class="tips">
                                        <span id="email_notice"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>密码</dt>
                                <dd>
                                    <script>
                                        function change_p_type(){
                                            if($(".password1").attr("type") == "password"){
                                                $(".p_type1").addClass("on");

                                                //document.getElementById("password").type="text";
                                                document.getElementsByClassName("password1").item(0).type = "text";
                                            }
                                            else{
                                                $(".p_type1").removeClass("on");

                                                //document.getElementById("password").type="password";
                                                document.getElementsByClassName("password1").item(0).type = "password";
                                            }
                                        }
                                    </script>
                                    <input type="password" name="password" id="password" onblur="check_password(this.value);" value="" placeholder="请输入6至20位字符" class="password1">
                                    <div class="tips">
                                        <span id="password_notice"> </span>
                                    </div>
                                </dd>
                                <span onclick="change_p_type()" class="p_type1" id="p_type"></span>
                            </dl>




                            <dl>
                                <dt>验证手机</dt>
                                <dd>
                                    <input type="text" name="extend_field7" value="" placeholder="验证手机" id="extend_field_7" class="">
                                    <div class="tips">
                                        <span id="7_notice"> </span>
                                    </div>
                                </dd>
                            </dl>



                            <dl style="border:none;">
                                <dt>验证码</dt>
                                <dd>
                                    <div class="codeTxt">
                                        <input type="text" id="email_code" name="email_code" placeholder="邮箱验证码" class="">

                                    </div>
                                    <div class="codePhoto">
                                        <input id="zemail" type="button" value="获取验证码 " class="zphone">
                                    </div>

                                </dd>
                            </dl>

                        </div>
                    </div>


                    <div class="Login">
                        <div class="field submit-btn" style="padding-left:0px; padding-right:0px;">
                            <input type="checkbox" style="display: none" name="agreement" value="1" checked="checked" required="">
                            <input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册">
                            <input type="hidden" name="act" value="register">
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var process_request = "正在处理您的请求...";
        var username_empty = "- 用户名不能为空。";
        var username_shorter = "- 用户名长度不能少于 3 个字符。";
        var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
        var password_empty = "- 登录密码不能为空。";
        var password_shorter = "- 登录密码不能少于 6 个字符。";
        var confirm_password_invalid = "- 两次输入密码不一致";
        var email_empty = "- Email 为空";
        var email_invalid = "- Email 不是合法的地址";
        var agreement = "- 您没有接受协议";
        var msn_invalid = "- msn地址不是一个有效的邮件地址";
        var qq_invalid = "- QQ号码不是一个有效的号码";
        var home_phone_invalid = "- 家庭电话不是一个有效号码";
        var office_phone_invalid = "- 办公电话不是一个有效号码";
        var mobile_phone_invalid = "- 手机号码不是一个有效号码";
        var msg_un_blank = "* 用户名不能为空";
        var msg_un_length = "* 用户名不得超过14个字符";
        var msg_un_format = "* 用户名含有非法字符";
        var msg_un_registered = "* 用户名已经存在,请重新输入";
        var msg_can_rg = "* 可以注册";
        var msg_email_blank = "* 邮件地址不能为空";
        var msg_email_registered = "* 邮箱已存在";
        var msg_email_format = "* 邮件地址不合法";
        var msg_blank = "不能为空";
        var no_select_question = "- 您没有完成密码提示问题的操作";
        var passwd_balnk = "- 密码中不能包含空格";
        var username_chana = "- 用户名不能有中文。";
        var msg_uname_length = "- 用户名不能超过 20 个字符。";
        var msg_un_chine = "* 用户名不能为中文";
        var msg_mobile_phone_blank = "手机号码不能为空";
        var msg_mobile_phone_registered = "手机号码已存在";
        var msg_mobile_phone_format = "* 手机号码不是一个有效号码";
        var msg_email_code_blank = "- 邮箱验证码不能为空";
        var msg_mobile_phone_code_blank = "- 手机验证码不能为空";
        var msg_captcha_blank = "- 验证码不能为空";
        var msg_register_type_blank = "- 注册类型不能为空";
        var username_exist = "用户名 %s 已经存在";
        $().ready(function(){

            $("#zemail").click(function(){
                $("#emailForm").find("#email").blur();
                $("#emailForm").find("#password").blur();
                //$("#emailForm").find("#confirm_password").blur();
                if ($("#emailForm").find("#captcha").size() > 0 && $("#emailForm").find("#captcha").val().length == 0) {
                    $("#emailForm").find("#captcha_notice").html(msg_captcha_blank);
                    $("#emailForm").find("#captcha_notice").css({color: '#900'});
                    return;
                }
                sendEmailCode($("#emailForm").find("#email"), $("#emailForm").find("#email_code"), $(this));
            });

            $("#zphone").click(function(){
                $("#mobileForm").find("#mobile_phone").blur();
                //$("#mobileForm").find("#password").blur();
                //$("#mobileForm").find("#confirm_password").blur();
                if ($("#mobileForm").find("#captcha").size() > 0 && $("#mobileForm").find("#captcha").val().length == 0) {
                    $("#mobileForm").find("#captcha_notice").html(msg_captcha_blank);
                    $("#mobileForm").find("#captcha_notice").css({color: '#900'});
                    return;
                }
                sendMobileCode($("#mobileForm").find("#mobile_phone"), $("#mobileForm").find("#mobile_code"), $(this),"{{csrf_token()}}");
            });

            $("#emailForm").submit(function(){
                return reg_by_email();
            });

            $("#mobileForm").submit(function(){
                return reg_by_mobile();
            });
        });
    </script>
    <!--
<!--
<div class="footer" >
<div class="links"  id="ECS_MEMBERZONE">           	<a href="user.php"><span>登录</span></a><a href="register.php"><span>注册</span></a><a href="javascript:window.scrollTo(0,0);"><span>回顶部</span></a>
</div>
<ul class="linkss" >
<li>
<a href="#">
<i class="footerimg_1"></i>
<span >客户端</span></a></li>
<li>
<a href="javascript:;"><i class="footerimg_2"></i><span class="gl">触屏版</span></a></li>
<li><a href="index.php?is_c=1" class="goDesktop"><i class="footerimg_3"></i><span>电脑版</span></a></li></ul>
<p class="mf_o4">&copy; 2005-2019 食恪商城 版权所有，并保留所有权利。</p>
</div>
-->
    <style>

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

            overflow: hidden;
            position: fixed;
            font-size: 12px;

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
            text-align: center;
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

    <div class="pop-main" id="popfuc" style="position: fixed;  top: 30px; display: none;"><div class="pop-header"> <span><h3>注册服务条款</h3></span><a class="pop-close" href="javascript:;" title="关闭"></a></div><div class="pop-con" style="height: 430px;overflow-x:hidden;overflow-y:auto;padding-right:15px"><div class="pop-con-tanchuang"> <p style="text-indent:38px"><span style="font-family:宋体;color:#262626">感谢您成为远辉生鲜网的注册用户。</span></p><p style="text-indent:38px"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span></p><p style="text-indent:38px"><span style="font-family:宋体;color:#262626">本协议是由远辉生鲜网网站</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">(</span><span style="font-family:宋体;color:#262626">包括</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">PC</span><span style="font-family:宋体;color:#262626">端、移动端</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">)</span><span style="font-family:宋体;color:#262626">的用户与远辉生鲜网网站的运营方即食恪电子商务（上海）有限公司之间，就网站交易平台服务等相关事宜共同缔结。当您注册、登录、使用或以任何方式使用本协议所涉及的相关服务，</span><span style="font-family:宋体;color:#262626">代表您已确认和接纳本网站的全部服务条款，本协议即构成对双方有约束力的法律文件。</span></p><p><span style="font-size:19px;font-family:&#39;Lucida Grande&#39;;color:#27384C">&nbsp;</span></p><p style="margin-left: 32px"><span style="font-family:宋体;color:#262626">一、</span><span style="font-family:宋体;color:#262626">总则</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1、 </span><span style="font-family:宋体;color:#262626">本站的各项电子服务的所有权和运营权归远辉生鲜网所有。您同意并点击确认本协议条款并完成注册程序后，才能成为远辉生鲜网的正式注册用户，并享受各类服务。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2、 </span><span style="font-family:宋体;color:#262626">远辉生鲜网有权根据国家法律法规变化及网站运营需要，对本协议条款进行修改，修改后的协议一经发布并经用户确认同意后即刻生效，并代替原来的协议。更新后的协议将会在网站上公示。用户若不同意更新后的协议，则将不能享受远辉生鲜网依据本协议提供的各项服务。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3、 </span><span style="font-family:宋体;color:#262626">本站的通知、公告、声明或其他类似内容是本协议的一部分。</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span></p><p style="margin-left: 32px"><span style="font-family:宋体;color:#262626">二、</span><span style="font-family:宋体;color:#262626">账户管理</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1、 </span><span style="font-family:宋体;color:#262626">您注册成功后，即获得一个远辉生鲜网的会员账户，作为您使用远辉生鲜网服务的唯一身份标识。该账户的所有权归属于远辉生鲜网，您仅拥有使用权。登录账户时，您可以用注册时使用的邮箱、手机号码、微信号码作为用户名，以及注册时设定的密码进行登录。请您对密码加以妥善保管，切勿将密码告知他人，因密码保管不善而造成的所有损失由您自行承担。</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2、 </span><span style="font-family:宋体;color:#262626">您通过账户所进行的活动、行为和事件依法享有权利和承担责任，且不得以任何形式转让账户、授权他人使用用户的账户以及与他人交易账户。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3、 </span><span style="font-family:宋体;color:#262626">鉴于网络服务的特殊性，远辉生鲜网无义务审核使用该组用户名及密码的是否为您本人，仅审核用户名及密码是否与数据库中保存的一致，任何人只要输入的用户名及密码与数据库中保存的一致，即可凭借该组用户名及密码登录并获得远辉生鲜网所提供的各类服务。非您本人使用账户登录并，远辉生鲜网将不承担因此而产生的任何责任。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4、 </span><span style="font-family:宋体;color:#262626">您在远辉生鲜网可通过参加网站活动等方式获得各种优惠奖励，包括但不限于积分、返利和抵用券。优惠奖励可能具有特定的使用规则和有效期，逾期将被清零；请您保持对账户中所有的优惠奖励的关注。如您未及时使用使优惠奖励过期，远辉生鲜网不对此负责。对于恶意购买和不正当手段获得的积分和抵用券，远辉生鲜网有权作出独立判断并采取包括但不限于冻结您的用户账户或清空积分、抵用券等措施。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">5、 </span><span style="font-family:宋体;color:#262626">在下列情况下，远辉生鲜网可以通过注销用户账户的方式单方解除本协议：</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">在用户违反本协议相关规定时，远辉生鲜网有权暂停或终止向该用户提供服务。如该用户在远辉生鲜网暂停或终止提供服务后，再一次直接或间接或以他人名义注册为远辉生鲜网用户的，则远辉生鲜网有权再次暂停或终止向该用户提供服务；</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">一经发现您注册信息中的内容是虚假的，远辉生鲜网即有权终止向您提供服务；</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">本协议修改或更新时，如用户表示不愿接受新的服务协议的，远辉生鲜网有权终止向该用户提供服务；</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">远辉生鲜网认为需终止提供服务的其他情况。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">6、 </span><span style="font-family:宋体;color:#262626">您理解并同意，即便在本协议终止及用户的服务被终止后，远辉生鲜网仍有权：</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">继续保存并使用您的用户信息；</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2)<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">继续向您主张在其使用远辉生鲜网交易平台服务期间因违反法律法规、本协议及平台规则而应承担的责任。</span></p><p><span style="font-family:宋体;color:#262626">二、</span> <span style="font-family:宋体;color:#262626">商品交易</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">1、<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">在交易过程中，您和远辉生鲜网具有同等的法律地位。双方在交易时都应遵守所有适用的中国法律、法规、条例和地方性法律的要求、遵守本协议及纳入本协议的所有其他条款和规则的规定。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">2、<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">您通过远辉生鲜网订购商品，订单即为购买商品的申请或要约。但只有直接将商品发送至您指定地址时，才构成远辉生鲜网对该订单的承诺，此时合同即告成立。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">3、<span style="font-stretch: normal;font-size: 9px;font-family: &#39;Times New Roman&#39;">&nbsp;&nbsp; </span></span><span style="font-family:宋体;color:#262626">远辉生鲜网有权在发现上架的商品及订单明显错误或缺货的情况下，单方面撤回这些信息该订单，并保留对商品订购数量的限制权。</span></p><p style="margin-left: 0;text-indent: 0"><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4、 </span><span style="font-family:宋体;color:#262626">商品价格和可获性都将在远辉生鲜网上标明，显示的每一项价格都包含了增值税（按照法定税率）。配送费将另外结算，费用根据用户选择的送货方式的不同而异。本站有权随时更改这些信息而不另行通知。</span></p><p><span style="font-family:宋体;color:#262626">三、用户的权利与义务</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">、您有权拥有自己在本站注册的用户名及密码，并用该用户名和密码登录本站购买商品，且对该用户名在本站发生的行为负责。您不得以任何形式转让或授权他人使用自己的本站用户名。</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">、您有权根据本协议的约定，以及远辉生鲜网上发布的相关规则在远辉生鲜网上查询商品信息、订购具体商品、发表使用评论、参与商品讨论、邀请好友、上传商品图片、参加远辉生鲜网的有关活动，以及使用远辉生鲜网提供的其他服务。</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">、您保证在远辉生鲜网购买商品过程中遵守法律法规及遵守诚实信用原则，不扰乱远辉生鲜网交易的正常秩序。</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">4</span><span style="font-family:宋体;color:#262626">、您享有言论自由权利，并拥有适度修改、删除自己发表的文章、评价的权利。您理解并保证不在远辉生鲜网传输或发表包含以下内容的言论：</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">1)&nbsp;</span><span style="font-family:宋体;color:#262626">煽动、抗拒、破坏宪法和法律、行政法规实施的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">2)&nbsp;</span><span style="font-family:宋体;color:#262626">煽动、分裂国家，破坏国家统一的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">3)&nbsp;</span><span style="font-family:宋体;color:#262626">损害国家机关信誉的、损害国家荣誉和利益的、损害社会公共利益和涉及国家安全的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">4)&nbsp;&nbsp;&nbsp;</span><span style="font-family:宋体;color:#262626">煽动民族仇恨、民族歧视，破坏民族团结的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">5)&nbsp;</span><span style="font-family:宋体;color:#262626">任何包含对种族、性别、宗教、地域内容等歧视的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">6)&nbsp;</span><span style="font-family:宋体;color:#262626">捏造或者歪曲事实，散布谣言，扰乱社会秩序的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">7)&nbsp;&nbsp;</span><span style="font-family:宋体;color:#262626">宣扬封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">8)&nbsp;</span><span style="font-family:宋体;color:#262626">骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、不文明的、公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">9)&nbsp;&nbsp;</span><span style="font-family:宋体;color:#262626">其他违反宪法和法律行政法规的。</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">5</span><span style="font-family:宋体;color:#262626">、用户在发表使用体验、商品讨论或图片等内容时，除遵守本条款外，还应遵守远辉生鲜网的其他相关规定。</span></p><p><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">6</span><span style="font-family:宋体;color:#262626">、</span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span><span style="font-family:宋体;color:#262626">未经远辉生鲜网同意，您不能在远辉生鲜网上发布任何形式的广告。</span></p><p style="text-indent: 0"><span style="font-family:&#39;Arial Narrow&#39;,&#39;sans-serif&#39;;color:#262626">7</span><span style="font-family:宋体;color:#262626">、若您未遵守以上规定的，远辉生鲜网有权做出独立判断并采取暂停或注销您的账号、冻结账号内余额、取消相应交易订单、停止发货等措施。</span></p><p><span style="font-family:宋体;color:#262626">四、远辉生鲜网的权利和义务</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">、</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span><span style="font-family:宋体;color:#262626">远辉生鲜网有义务在现有技术的基础上维护整个网站的正常运行，并努力提升和改进技术，使您的网上交易活动得以顺利进行。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">、对您在注册和使用本站网上交易平台中所遇到的与注册或交易有关的问题及反映的情况，本站应及时作出回复；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">、对于您在本站网上交易平台上的不当行为或其它任何本站认为应当终止服务的情况，本站有权随时作出删除相关信息、终止提供服务等处理，而无须征得您的同意。</span></p><p><span style="font-family:宋体;color:#262626">五、网站规则、修改和可分性</span></p><p><span style="font-family:宋体;color:#262626">　　远辉生鲜网将尽最大努力保证用户所购商品与网站和目录上公布的价格一致，但价目表和声明仅为要约邀请，并不构成要约。如果发现错误定价，本站将采取下列措施之一：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">、价格变动规则</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）</span> <span style="font-family:宋体;color:#262626">如果某一商品的正确定价低于错误定价，本站将按照较低的定价向用户销售该商品。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）如果某一商品的正确定价高于错误定价，本站会根据具体情况决定，是否在交付前联系您寻求指示，或者取消订单并通知您。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">、商品缺货规则</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">远辉生鲜网有权对缺货的订单做取消，但本站会尽最大努力在最快时间内满足您的购买需求。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">、邮件</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">/</span><span style="font-family:宋体;color:#262626">短信服务规则</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">远辉生鲜网保留通过邮件和短信的形式，对本网站注册、购物用户发送订单信息、促销活动等告知服务的权利。如果您在本站注册、购物，表明您已默示接受此项服务。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4</span><span style="font-family:宋体;color:#262626">、送货政策</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">远辉生鲜网将会把商品送到您所指定的送货地址。如因以下情况造成订单延迟或无法配送等，本站将不承担责任：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）用户填写的收货信息不详细或错误；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">）不可抗力，例如：自然灾害、交通戒严、突发战争等。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">5</span><span style="font-family:宋体;color:#262626">、退换货政策</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">远辉生鲜网保留对商品退货、补货的解释权和限制权。在下订单的同时，您也同意了本站的退换货政策。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">6</span><span style="font-family:宋体;color:#262626">、处罚规则</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）远辉生鲜网有权对用户的注册数据及购买行为进行查阅，发现注册数据或购买行为中存在任何问题或怀疑，均有权向用户发出询问及要求改正的通知或者直接作出删除等处理。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）经国家生效法律文书或行政处罚决定确认用户存在违法行为，或者远辉生鲜网有足够事实依据可以认定用户存在违法或违反服务协议行为的，本站有权在网站上以网络发布形式公布用户的违法行为。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">）对于您在本站发布的下列各类信息，本站有权在不通知用户的前提下进行删<a name="_GoBack"></a>除或采取其它限制性措施。包括以炒作信用为目的的信息；存在欺诈等恶意或虚假内容的信息；存在与网上购物无关或不是以购物为目的的信息；存在试图扰乱正常购物秩序因素的信息；该信息违反公共利益或可能严重损害本站和其它用户合法利益的。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">7</span><span style="font-family:宋体;color:#262626">、终止</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">远辉生鲜网可以不经通知而自行决定终止全部或部分规则，或终止用户的会员资格。即使本站没有要求或强制用户严格遵守这些规则，也并不构成对属于本站的任何权利的放弃。如果用户在远辉生鲜网的客户账户被关闭，那么也将丧失相应的会员资格。对于该用户会员资格的丧失，用户对本站不能主张任何权利或为此索赔。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">9</span><span style="font-family:宋体;color:#262626">、责任限制</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; </span><span style="font-family:宋体;color:#262626">除了远辉生鲜网的使用规则中规定的其它限制和除外情况之外，在中国法律法规所允许的限度内，对于因在本站购物引起的或与之有关的任何直接的、间接的、特殊的、附带的、后果性的或惩罚性的损害，或任何其它性质的损害，本站、本站的董事、管理人员、雇员、代理或其它代表在任何情况下都不承担责任。这些责任排除和限制条款将在法律所允许的最大限度内适用，并在用户资格被撤销或终止后仍继续有效。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span></p><p><span style="font-family:宋体;color:#262626">五、</span> <span style="font-family:宋体;color:#262626">服务的中断和终止</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1. </span><span style="font-family:宋体;color:#262626">当您向远辉生鲜网提出注销注册用户身份时，经远辉生鲜网审核同意，由远辉生鲜网注销该注册用户，用户即解除与本站的服务协议关系。但注销该用户账号后，本站仍保留下列权利：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）用户注销后，本站有权保留该用户的注册数据及以前的交易行为记录；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）</span> <span style="font-family:宋体;color:#262626">用户注销后，如用户在注销前在本站交易平台上存在违法行为或违反合同的行为，本站仍可行使本服务协议所规定的权利。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">、在下列情况下，本站可以通过注销用户的方式终止服务：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）在用户违反本服务协议相关规定时，本站有权终止向该用户提供服务。本站将在中断服务时通知用户。但如该用户在本站终止提供服务后，再一次直接或间接或以他人名义注册为本站用户的，本站有权再次单方面终止向该用户提供服务；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）如本站通过用户提供的信息与用户联系时，发现用户在注册时填写的电子邮箱已不存在或无法接收电子邮件的，经本站以其它联系方式通知用户更改，而用户在三个工作日内仍未能提供新的电子邮箱地址的，本站有权终止向该用户提供服务；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">）</span> <span style="font-family:宋体;color:#262626">一经本站发现用户注册数据中主要内容是虚假的，本站有权随时终止向该用户提供服务；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4</span><span style="font-family:宋体;color:#262626">）本服务协议终止或更新时，用户明示不愿接受新的服务协议的；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">5</span><span style="font-family:宋体;color:#262626">）</span> <span style="font-family:宋体;color:#262626">其它本站认为需终止服务的情况。</span></p><p><span style="font-family:宋体;color:#262626">六、</span> <span style="font-family:宋体;color:#262626">适用的法律和管辖权</span></p><p><span style="font-family:宋体;color:#262626">　　用户和本站之间的契约将适用中华人民共和国的法律，所有的争端将诉诸于本站所在地的人民法院。</span></p><p><span style="font-family:宋体;color:#262626">七、</span> <span style="font-family:宋体;color:#262626">版权</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;&nbsp; 1. </span><span style="font-family:宋体;color:#262626">本站上的图表、标识、网页页眉、按钮图标、文字、服务品名等标示在网站上的信息都是远辉生鲜网的财产，受中国和国际知识产权法的保护。未经本站许可，用户不得以任何可能引起消费者混淆的方式或任何贬低或诽谤远辉生鲜网的方式用于与非本站的任何商品或服务上。在本站上出现的不属于上述主体的所有其他商标是其商标权利人各自的财产，这些权利人可能是也可能不是与远辉生鲜网相关联、相联系或由远辉生鲜网的关联公司赞助的。未经本远辉生鲜网或相关商标所有人的书面许可，本站上的任何东西都不应被解释为以默许或其他方式授予许可或使用网站上出现的商标的权利。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2. </span><span style="font-family:宋体;color:#262626">本站用户发表的文章仅代表作者本人观点，与本站立场无关。作者文责自负。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3. </span><span style="font-family:宋体;color:#262626">本站有权将在本网站发表的商品使用体验、商品讨论或图片自行使用或者与其他人合作使用于其他用途，包括但不限于网站、电子杂志、杂志、刊物等，使用时需为作者署名，以发表文章时注明的署名为准。文章有附带版权声明者除外。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4. </span><span style="font-family:宋体;color:#262626">用户在本站上发表的文章及图片（包括转贴的文章及图片）版权仅归原作者所有，若作者有版权声明或原作从其它网站转载而附带有原版权声明者，其版权归属以附带声明为准。</span></p><p><span style="font-family:宋体;color:#262626">任何转载、引用发表于本站的版权文章须符合以下规范：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）用于非商业、非盈利、非广告性目的时需注明作者及文章及图片的出处为</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"</span><span style="font-family:宋体;color:#262626">远辉生鲜网</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"</span><span style="font-family:宋体;color:#262626">或</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"www.shikefood.com"</span><span style="font-family:宋体;color:#262626">；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）用于商业、盈利、广告性目的时需征得文章或图片原作者的同意，并注明作者姓名、授权范围及原作出处</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"</span><span style="font-family:宋体;color:#262626">远辉生鲜网</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"</span><span style="font-family:宋体;color:#262626">或</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">"www.shikefood.com"</span><span style="font-family:宋体;color:#262626">；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">）任何文章或图片的修改或删除均应保持作者原意并征求原作者同意，并注明授权范围。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">&nbsp;</span></p><p><span style="font-family:宋体;color:#262626">九、</span> <span style="font-family:宋体;color:#262626">隐私</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">、在用户加入本站成为会员时，用户根据本站要求提供的个人注册信息；在用户使用本站服务、参加本站活动，或访问本站网页时，本站自动接收并记录的用户浏览器上的服务器数值，包括但不限于</span><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">IP</span><span style="font-family:宋体;color:#262626">地址等数据及用户要求取用的网页记录。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2.</span><span style="font-family:宋体;color:#262626">、本站收集到的用户在本站购物等的有关数据，包括但不限于购物、上传图片、发布商品使用体验、参与商品讨论、邀请关注好友和留言等数据。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">、本站通过合法途径从商业伙伴处取得的用户个人数据。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4</span><span style="font-family:宋体;color:#262626">、信息使用：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）本站不会向任何人出售或出借用户的个人信息，除非事先得到用户的许可。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）本站亦不允许任何第三方以任何手段收集、编辑、出售或者无偿传播用户的个人信息。任何用户如从事上述活动，一经发现，本站有权立即终止与该用户的服务协议，查封其账号。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">5</span><span style="font-family:宋体;color:#262626">、为服务用户的目的，本站可能通过使用用户的个人信息，向用户提供服务，包括但不限于向用户发出商品和服务信息，或者与本站合作伙伴共享信息以便他们向用户发送有关其商品和服务的信息（后者需要用户的事先同意）。</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">6. </span><span style="font-family:宋体;color:#262626">信息披露；用户的个人信息将在下述情况下部分或全部被披露：</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">1</span><span style="font-family:宋体;color:#262626">）</span> <span style="font-family:宋体;color:#262626">经用户同意，向第三方披露；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">2</span><span style="font-family:宋体;color:#262626">）如用户是合资格的知识产权投诉人并已提起投诉，应被投诉人要求，向被投诉人披露，以便双方处理可能的权利纠纷；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">3</span><span style="font-family:宋体;color:#262626">）根据法律的有关规定，或者行政或司法机构的要求，向第三方或者行政、司法机构披露；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">4</span><span style="font-family:宋体;color:#262626">）如果用户出现违反中国有关法律或者网站政策的情况，需要向第三方披露；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">5</span><span style="font-family:宋体;color:#262626">）为提供用户所要求的商品和服务，而必须和第三方分享用户的个人信息；</span></p><p><span style="font-family:&#39;Arial&#39;,&#39;sans-serif&#39;;color:#262626">6</span><span style="font-family:宋体;color:#262626">）其它本站根据法律或者网站政策认为合适的披露。</span></p><p><br></p> <a class="pop-close-shike" href="javascript:;" title="关闭">同意条款</a></div></div></div>

</div>
<script type="text/javascript">
    var process_request = "正在处理您的请求...";
    var username_empty = "- 用户名不能为空。";
    var username_shorter = "- 用户名长度不能少于 3 个字符。";
    var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
    var password_empty = "- 登录密码不能为空。";
    var password_shorter = "- 登录密码不能少于 6 个字符。";
    var confirm_password_invalid = "- 两次输入密码不一致";
    var email_empty = "- Email 为空";
    var email_invalid = "- Email 不是合法的地址";
    var agreement = "- 您没有接受协议";
    var msn_invalid = "- msn地址不是一个有效的邮件地址";
    var qq_invalid = "- QQ号码不是一个有效的号码";
    var home_phone_invalid = "- 家庭电话不是一个有效号码";
    var office_phone_invalid = "- 办公电话不是一个有效号码";
    var mobile_phone_invalid = "- 手机号码不是一个有效号码";
    var msg_un_blank = "* 用户名不能为空";
    var msg_un_length = "* 用户名不得超过14个字符";
    var msg_un_format = "* 用户名含有非法字符";
    var msg_un_registered = "* 用户名已经存在,请重新输入";
    var msg_can_rg = "* 可以注册";
    var msg_email_blank = "* 邮件地址不能为空";
    var msg_email_registered = "* 邮箱已存在";
    var msg_email_format = "* 邮件地址不合法";
    var msg_blank = "不能为空";
    var no_select_question = "- 您没有完成密码提示问题的操作";
    var passwd_balnk = "- 密码中不能包含空格";
    var username_chana = "- 用户名不能有中文。";
    var msg_uname_length = "- 用户名不能超过 20 个字符。";
    var msg_un_chine = "* 用户名不能为中文";
    var msg_mobile_phone_blank = "手机号码不能为空";
    var msg_mobile_phone_registered = "手机号码已存在";
    var msg_mobile_phone_format = "* 手机号码不是一个有效号码";
    var msg_email_code_blank = "- 邮箱验证码不能为空";
    var msg_mobile_phone_code_blank = "- 手机验证码不能为空";
    var msg_captcha_blank = "- 验证码不能为空";
    var msg_register_type_blank = "- 注册类型不能为空";
    var username_exist = "用户名 %s 已经存在";
</script>

<script type="text/javascript">

    $('.pop-sure,.sure-btn,.pop-close,.cancel-btn').click(function(){
        $('.cencel-btn').addClass('none');
        $(this).parents('.pop-main').hide();
        $('.pop-mask').hide();
    });

    $('.pop-close-shike').click(function(){
        $(".checkbox").attr("checked","checked");


        $('.cencel-btn').addClass('none');
        $(this).parents('.pop-main').hide();
        $('.pop-mask').hide();

    })

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

</body></html>
