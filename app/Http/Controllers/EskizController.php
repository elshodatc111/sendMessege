<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mrmuminov\eskizuz\Eskiz;
use mrmuminov\eskizuz\types\sms\SmsSingleSmsType;

class EskizController extends Controller{
    
    public function SendMessege(Request $request){
        $eskiz = new Eskiz(config('api.eskiz_email'),config('api.eskiz_password'));
        $eskiz->requestAuthLogin();
        $from='4546';
        $mobile_phone = "+998".$request->phone;
        $message = $request->text;
        $user_sms_id = 1;
        $callback_url = '';

        $singleSmsType = new SmsSingleSmsType(
            from: $from,
            message: $message,
            mobile_phone: $mobile_phone,
            user_sms_id:$user_sms_id,
            callback_url:$callback_url
        );
// ishladi
        $result = $eskiz->requestSmsSend($singleSmsType);
        if($result->getResponse()->isSuccess == true){
            return response()->json([
                'status' => $result->getResponse()->isSuccess,
                'message' => "SMS yuborildi"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => "SMS yuborildi"
            ], 500);
        }

    }
}
