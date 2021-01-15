<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

class EnvController extends Controller
{
    public function getContent()
    {
        $keys = DotenvEditor::getKeys();
        $env_arr = [];
        foreach ($keys as $k =>$v) {
            $env_arr[$k]=$v["value"];
        }
        return $env_arr;
    }

    public function store(Request $request)
    {
        $key = $request->key;
        $val = $request->val;
        $file = DotenvEditor::setKey($key, $val)->save();
        return response(['new_key'=>$request->key,'new_value'=>$request->val]);
    }

    public function update(Request $request)
    {
        $key = $request->key;
        $val = $request->val;
        $file = DotenvEditor::setKey($key, $val)->save();
        return response(['update_key'=>$request->key,'update_value'=>$request->val]);
    }

    public function delete(Request $request)
    {
        $key = $request->key;
        $file = DotenvEditor::deleteKey( $key )->save();
        return response(['delete_key'=>$request->key]);
    }


}
