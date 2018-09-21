<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\Welcome;

class SendWelcomeEmail implements ShouldQueue
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
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {


        \Mail::to($event->user)->send(new Welcome($event->user));

    }
}
