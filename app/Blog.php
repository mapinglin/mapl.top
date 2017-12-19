<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 14:22
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    protected $table = 'blog';
    protected $fillable = ['title', 'author','tag','content','author_pic'];
    public function posts(){

        return $this->hasMany('App\Post','blog_id','id');
    }
}