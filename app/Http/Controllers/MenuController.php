<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5
 * Time: 9:59
 */

namespace App\Http\Controllers;
use App\Menu;

class MenuController extends Controller{
    public function index(){
        $menus = Menu::all();
        //var_dump($menus);
        //exit;
        return view('menu.index');
    }

    public  function getMenu(){
        $menu = Menu::all();
        $tree = $this->getTree($menu,0);
    }

    public  function getTree($items,$pid){

    }
}