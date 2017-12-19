<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 15:23
 */

namespace App\Http\Controllers;
use App\Jobs\SendReminderEmail;
use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PodcastController extends Controller{

    private $podcast;
    public function __construct(Podcast $podcast)
    {
        $this->podcast = $podcast;
    }

    public function store(Request $request){
//        $this->podcast->id = 6;
//        $this->podcast->name = $request->input('name');
//        $this->podcast->des = $request->input('des');
////       // DB::insert("insert into podcast(name,des) VALUES('good','成功')");
////        $this->podcast->save();
        dispatch(new SendReminderEmail());
//        //$podcast = $this->podcast::find(2);
//        //dispatch((new SendReminderEmail($this->podcast))->onQueue('test'));
//        echo 'success';
//        for($i = 0 ;$i<=100;$i++){
//            dispatch(new SendReminderEmail('sss'.$i));
//        }
    }

    public function showForm(){
        return view('blog');
    }

    public function addPost(){
        Podcast::create([
            'title'=>'my Project',
            'body'=>'this is my post content'
        ]);
        return back();
    }

    public function getTest(){
        Podcast::find(2)->number;
    }
}