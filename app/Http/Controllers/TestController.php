<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 11:24
 */

namespace App\Http\Controllers;
use JPush\Client as JPush;
class TestController extends Controller{
    public function index(){
        $this->middleware('test');
    }

    public function push(){
        $jpush = new JPush('','');
    }
}