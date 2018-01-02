<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/15
 * Time: 11:26
 */


namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $table = 'post';

    public function blog(){
        return $this->belongsTo('App\Blog');
    }


    public function getBlog(){

    }

    public function getFuck(){
        
    }

}