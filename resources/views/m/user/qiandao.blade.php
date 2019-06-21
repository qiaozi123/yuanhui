<!DOCTYPE html>
<html style="height:100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="viewport" content="width=device-width">
    <!-- <title>每日签到</title> -->
    <title>远辉生鲜签到</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/weixin.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/reset.css">
    <link rel="stylesheet" type="text/css" href="{{url('css')}}/main.css">
    <script type="text/javascript" src="{{url('js')}}/jquery.js"></script>
    <script type="text/javascript" src="{{url('js')}}/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.json.js"></script>
    <script type="text/javascript" src="{{url('js')}}/transport.js"></script>
    <script type="text/javascript" src="{{url('js')}}/jquery.more.js"></script>
    <link rel="stylesheet" href="{{url('css')}}/toast.css">
    <script src="{{url('js')}}/toast.js"></script>
    <link type="text/css" rel="stylesheet" href="{{url('css')}}/animate.css">
    <script type="text/javascript" src="{{url('js')}}/common.js"></script></head>
<body style="height:100%;">
<div class="test" style="width: 100%;height: auto;margin-top: 200px;position: absolute;">
    <div class="toast_div" style="width:400px;margin-top: 20px;margin:0 auto"></div>
</div>
<div class="page" style="background:url(&#39;/images/qiandao.jpg&#39;) no-repeat center; background-size: 100% 100%;height:100%;">
	<span style="margin-left: 37vw;top: 38vh;position: absolute;">
		<span style="font-size: 17vw;width:18vw;text-align: center;display: inline-block;color:#ff5a81;">0</span>
		<span style="font-size: 5vw;">天</span>
	</span>
    <img src="{{url('css')}}/button_none.png" style="width: 27vw;margin-top: 58vh;margin-left: 20vw;" onclick="javascript:qiandao()">
    <img src="{{url('css')}}/button_jiangli.png" style="width: 27vw;margin-top: 58vh;margin-left: 6vw;" onclick="window.location.href=&#39;user.php?act=user_sign&#39;">
</div>



<script>
    function qiandao(){
        $.ajax({
            url:"qd.php?act=qd",
            success:function(res){
                if(res == 0){
                    showtoastFromDiv("请先绑定用户");
                    setTimeout('window.location.href = "user.php"',"2000");
                }else{
                    if(res == 1){
                        showtoastFromDiv("签到成功");
                        window.location.reload();
                    }else{
                        showtoastFromDiv(res);
                    }
                }
            }
        })
    }
    function showtoastFromDiv(msg){
        $('.toast_div').toast({
            content:msg,
            duration:1500
        });
    }

</script>
</body></html>
