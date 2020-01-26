<?php

namespace App\Listeners;

use App\Events\UserRegistration;
use App\Jobs\SendRegistrationMail as JobsSendRegistrationMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegistrationMail
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
     * @param  UserRegistration  $event
     * @return void
     */
    public function handle(UserRegistration $event)
    {
        if(!$event->user->hasVerifiedEmail()) {
            JobsSendRegistrationMail::dispatch($event->user);
        }
    }
}