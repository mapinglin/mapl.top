<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    public $timestamps = false;
    protected $table = 'podcast';

    public function phone(){
        return $this->belongsTo('App\Phone');
    }
}



