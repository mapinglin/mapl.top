<?php

namespace App\Listeners;

use App\Events\sendMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class MessageListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(sendMessage $sendMessage)
    {
        $blog =  $sendMessage->blog;
        Log::info('事件触发成功',$blog->toArray());
    }
}
