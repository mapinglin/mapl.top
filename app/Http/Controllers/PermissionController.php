<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5
 * Time: 9:38
 */

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller{

    private $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index(){
        $permissions = Permission::all();
        return view('permission.index',compact('permissions'));
    }
    public function showAdd(){
        return view('permission.add');
    }

    public function add(Request $request){
        //return $request->all();
//        $permission = Permission::create([
//            'name'=>$request->input('name'),
//            'display_name'=>$request->input('display_name'),
//            'http_path'=>$request->input('http_path'),
//            'description'=>'权限说明',
//            'http_method'=>json_encode($request->input('http_method'))
//        ]);
        $this->permission->name = $request->input('name');
        $this->permission->display_name = $request->input('display_name');
        $this->permission->http_path = $request->input('http_path');
        $this->permission->http_method = json_encode($request->input('http_method'));
        $this->permission->description = '权限说明';
        $permiss = $this->permission->save();
        if($permiss){
            return redirect('auth/permissions');
        }else{
            return redirect()->back();
        }
    }
}