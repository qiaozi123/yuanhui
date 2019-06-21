<?php

namespace App\Http\Controllers\M;
include_once("CCPRestSDK.php");
use App\Model\Lunbo;
use App\Model\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $bool = Auth::check();
        if (!$bool){
            return redirect('/login');
        }
        return view('m.user.index',compact('lunbo','goods'));
    }

    public function login()
    {
        $bool = Auth::check();
        if ($bool){
            return redirect('/user');
        }
        return view('m.login');
    }

    public function dologin(Request $request)
    {
        $telphone = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['telphone'=>$telphone,'password'=>$password])){
            return response()->json(['status'=>200,'msg'=>'登陆成功']);
        }else{
            return response()->json(['status'=>500,'msg'=>'登陆失败']);
        }
    }

    public function regist()
    {
        $bool = Auth::check();
        if ($bool){
            return redirect('/user');
        }
        return view('m.regist');
    }


    public function doregist(Request $request)
    {
        $telphone = $request->input('mobile_phone');
        $mobile_code = $request->input('mobile_code');
        $password = $request->input('password');
        $tuijian = $request->input('tuijian');
        $data = User::where(['status'=>0,'telphone'=>$telphone,'code'=>$mobile_code])->first();
        if (empty($data)){
            return response()->json(['status'=>500,'msg'=>'验证码错误']);
        }else{
            $data->status = 1;
            $data->password = Hash::make($password);
            $data->tuijianren = $tuijian;
            $bool = $data->save();
            if ($bool){
                Auth::attempt(['telphone'=>$telphone,'password'=>$password]);
                return response()->json(['status'=>200,'msg'=>'注册成功']);
            }else{
                return response()->json(['status'=>500,'msg'=>'注册失败,请联系管理员']);
            }
        }


    }

    public function has_phonenumber(Request $request)
    {
        $telphone = $request->input('mobile');
        $bool = User::where(['telphone'=>$telphone,'status'=>1])->first();
        if ($bool){
           return response()->json(['status'=>500,'msg'=>'手机号已经注册']);
        }else{
           return response()->json(['status'=>200,'msg'=>'手机号没有注册']);
        }
    }

    public function registcode(Request $request)
    {
        $telphone = $request->input('mobile_phone');
        $code = rand(1000,9999);
        $user = User::where(['telphone'=>$telphone,'status'=>0])->first();
        if (empty($user)){
            $user = new User();
            $user->telphone = $telphone;
            $user->code = $code;
            $bool = $user->save();
        }else{
            $user->telphone = $telphone;
            $user->code = $code;
            $bool = $user->save();
        }

        $data = self::sendTemplateSMS($telphone,[0=>$code,1=>'5分钟'],"1");
        if ($data){
          echo 'ok';
        }else{
            echo 'false';
        }

    }

    function  sendTemplateSMS($to,$datas,$tempId)
    {
        // 初始化REST SDK
        global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
        $rest = new \REST(env('serverIP'),env('serverPort'),env('softVersion'));
        $rest->setAccount(env('accountSid'),env('accountToken'));
        $rest->setAppId(env('appId'));

        // 发送模板短信
//        echo "Sending TemplateSMS to $to <br/>";
        $result = $rest->sendTemplateSMS($to,$datas,$tempId);
        if($result == NULL ) {
            echo "result error!";
           return ;
        }
        if($result->statusCode!=0) {
            echo "error code :" . $result->statusCode . "<br>";
            echo "error msg :" . $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            return 'ok';
            //TODO 添加成功处理逻辑
        }
    }

    public function myuser()
    {
        return view('m.user.mymember');
    }

    public function youhuiquan()
    {
        return view('m.user.youhuiquan');
    }

    public function address()
    {
        return view('m.user.address');
    }

    public function pay()
    {

    }

    public function update_userinfo()
    {

    }

    public function share()
    {

    }

    public function qiandao()
    {
        return view('m.user.qiandao');
    }

}
