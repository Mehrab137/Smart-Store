<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\DeviceInformationIsAddedEvent;
use App\Mail\Email;

class EmailListener
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
    public function handle(DeviceInformationIsAddedEvent $event)
    {
        Mail::to($event->email)->send(new Email());
    }
}
