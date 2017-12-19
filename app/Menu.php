<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5
 * Time: 9:57
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model{
    protected  $table = 'menu';

    public function getTree($items,$pid){
        $tree = array();
        foreach($items as $value){
            if($value['parent_id'] == $pid){
                $value['child'] = $this->getTree($items,$value['id']);
                if($value['child'] == null){
                    unset($value['child']);
                }
                $tree[] = $value;
            }
        }
        return $tree;
    }

    public function getMenu(){
        $me = $this->all();
        $pid = 0;
        $menus = $this->getTree($me,$pid);
        return $menus;
    }
}