<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('name', $request->name)->orWhere('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['帳號或密碼有錯誤，請重新輸入']
            ], 404);
        }

        //產生新的token並更新
        $token = bin2hex(random_bytes(32));
        $user->api_token = $token;
        $user->save();

        $response = [
            'success' => true,
            'data' => $user,
            'message' => '登入成功'
        ];
        return response()->json($response, 200);

        // $request->validate([
        //     'name' => 'required|string',
        //     'password' => 'required|string',
        // ]);

        // $credentials = $request->only('name', 'password');

        // if (Auth::attempt($credentials)) {
        //     return response('ok');
        // }

        // return response('error', 'Oppes! You have entered invalid credentials');
    }

    //帳號登出
    public function logout(Request $request)
    {
        $user_name = $request->name;
        $user = User::find($user_name);
        $user->api_token = null;
        $user->save();
        $response = [
            'success' => true,
            'message' => '您已成功登出',
        ];
        return response()->json($response, 200);
    }

    //帳號清單
    public function user_list(Request $request)
    {
        $user_list = User::all();

        $response = [
            'success' => true,
            'data' => $user_list,
            'message' => '資料載入成功',
        ];
        return response()->json($response, 200);
    }
}
