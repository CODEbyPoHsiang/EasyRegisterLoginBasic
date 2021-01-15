<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $chk_duplicate_user = User::where('name', $request->name)->orWhere('email', $request->email)->first();

        //檢查是否帳號或名稱重複
        if (!$chk_duplicate_user) {
            //執行表單驗證
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password'=>'required|min:6|confirmed'
            ];
            $messages = [
                //驗證未通過的訊息提示
                'name.required' => '請填入帳號名稱',
                'email.required' => '請填入email信箱',
                'email.email' => '請填入正確的email信箱格式',
                'password.required' => '請填入密碼',
                'password.min' => '密碼至少要大於六個字元',
              
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                $messages = $validator->messages();
                $errors = $messages->all();
                $response = [
                    'success' => false,
                    'data' => "Error",
                    'message' => $errors[0],
                ];
                return response()->json($response, 202);
            }
           
            // 通過驗證後，執行新增操作
            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $response = [
                'success' => true,
                'data' => $data,
                'message' => '資料已成功新增',
            ];

            return response()->json($response, 200);
        } else {
            // 新增帳號或信箱重複時的錯誤訊息
            $response = [
                'success' => false,
                'message' => '輸入的名稱或信箱已重複，請重新操作',
            ];
            return response()->json($response, 202);
        }
    }
}
