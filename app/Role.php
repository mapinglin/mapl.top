<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/4
 * Time: 18:16
 */

namespace App;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

//        public function users(){
//            return $this->belongsToMany('App\User');
//        }

    protected $fillable = ['name','display_name','description'] ;
}