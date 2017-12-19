<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 10:59
 */

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller{

    public function manage(){
      return  view('user.manage');
    }
    public function index(){
        $user = User::paginate(5);
        return view('user.index',compact('user'));
    }

    public function showAdd(){
        $roles = Role::all();
        return view('user.add',compact('roles'));
    }

    public function add(Request $request){
            $this->validate($request,[
            'name'=>'required|max:20|min:5',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|max:20|min:5|confirmed',
            'password_confirmation'=>'required',
            'user-role'=>'integer|required'
        ],[
            'required'=>':attribute为必填项',
            'max'=>':attribute最长为20位',
            'min'=>':attribute最少为5位',
            'confirmed'=>'两次密码不一致',
        ],[
            'name'=>'用户名',
            'email'=>'邮箱',
            'password'=>'密码',
            'repassword'=>'重复密码',
        ]);
        DB::beginTransaction();
        try{
            $user = User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>bcrypt($request->input('password'))
            ]);
            $user->attachRole($request->input('user-role'));
            DB::commit();
            return redirect('auth/users')->with('success','添加成功');
        }catch (Exception $e){
            DB::rollback();//事务回滚
            return redirect()->back();
        }
    }

    public function export(Request $request){
        $data = DB::table('users')->offset(intval($request->page-1)*5)->limit(5)->get();
        $cellData = [];
        $newArray = [['用户id','用户名','用户邮箱']];
        foreach($data as $key=>$value){
            $cellData['id'] = $value->id;
            $cellData['name'] = $value->name;
            $cellData['email'] = $value->email;
            $newArray[] = $cellData;
        }
        Excel::create('用户信息',function($excel) use ($newArray){
            $excel->sheet('score', function($sheet) use ($newArray){
                $sheet->rows($newArray);
            });
        })->export('xls');
    }
}