<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/4
 * Time: 17:41
 */

namespace App\Http\Controllers;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;

class RoleController extends Controller{

    public function index(){
        $roles = Role::all();
        return view('role.index',compact('roles'));
    }

    public function showAdd(){
        $permission = Permission::all();
        return view('role.add',compact('permission'));
    }

    public function add(Request $request){
//        var_dump($request->all());
//        exit;
        DB::beginTransaction();
        try{
            $role = Role::create([
                'name'=>$request->input('name'),
                'display_name'=>$request->input('display_name'),
                'description'=>'权限说明'
            ]);
            foreach($request->input('role_permission') as $value){
                $role->attachPermission(intval($value));
            }
            //$role->attachPermission(intval($request->input('role_permission')));
            DB::commit();
            return redirect('auth/roles')->with('success','添加成功');
        }catch (Exception $e){
            DB::roleback();
            return redirect()->back();
        }
    }
}