<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/25
 * Time: 11:12
 */

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
    public function index(){
        return view('api/home');
    }
}