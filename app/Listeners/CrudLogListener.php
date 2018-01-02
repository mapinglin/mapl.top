<?php

namespace App\Listeners;

use App\Events\CrudLogEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class CrudLogListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CrudLogEvent  $event
     * @return void
     */
    public function handle(CrudLogEvent $event)
    {
        $user = $event->user;
        $method = $event->method;
        Log::info('用户'.$user->name.$method.'操作成功',$user->toArray());
    }
}
