<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 15:15
 */

namespace App;
use Illuminate\Support\Facades\Log;

class Model extends \Illuminate\Database\Eloquent\Model{



    public function delete()
    {

    }

    public function update(array $attributes = [], array $options = [])
    {
        Log::info('good','idea');
    }

    public function create(){

    }

    public function event($method,User $user){

    }
}