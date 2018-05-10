<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;
use Illuminate\Notifications\Notification;

class ApiPushController extends Notification
{

    public function via($notifiable)
    {
        return [OneSignalChannel::class];
    }

    public function registerPush()
    {
        $onesignal = OneSignalMessage::create()->subject("Nuevos Benficios cerca de ti!")->body("Entra a Club Beneficios UNO")->url('http://onesignal.com');
        return $onesignal;
            
    }
}
