<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/15
 * Time: 10:48
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model {
    protected $table = 'phone';


    public function podcsat(){
        return $this->hasOne('App\Podcast');
    }
}