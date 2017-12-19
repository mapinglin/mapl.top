<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/20
 * Time: 11:05
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller{

    public function save(Request $request){
//        echo 'ddd';
//        exit;
        $this->validate($request,[
            'username'=>'required|max:10',
            'phone'=>'required',
            'age'=>'required',
            'address'=>'required',
        ],[
            'username.required'=>'用户名必须！！',
            'username.max'=>'用户名长度超标！！！！！'
        ]);
    }

    public function test(){
        $redis = new \Redis();
        $redis->connect('127.0.0.1','123456',6379);
        var_dump($redis);
    }
}