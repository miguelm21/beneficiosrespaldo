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
        $fields = array( 
		'app_id' => "876b6875-5142-4bb5-a1b5-7b585341e078",
		'identifier' => "ce777617da7f548fe7a9ab6febb56cf39fba6d382000c0395666288d961ee566",
		'language' => "en",
		'timezone' => "-28800",
		'game_version' => "1.0",
		'device_os' => "4.4.4",
		'device_type' => "1",
		'device_model' => "iPhone 8,2",
		'tags' => array("foo" => "bar")
		);

		$fields = json_encode($fields); 
		/*print("\nJSON sent:\n"); 
		print($fields); */

		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/players"); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
		curl_setopt($ch, CURLOPT_HEADER, FALSE); 
		curl_setopt($ch, CURLOPT_POST, TRUE); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);


		$response = curl_exec($ch); 
		curl_close($ch); 

		$return["allresponses"] = $response; 
		$return = json_encode( $return["allresponses"]);

		/*print("\n\nJSON received:\n"); 
		print($return); 
		print("\n");*/

		$a = explode('\\\"', $return);
		$c = [];

		$b = explode('\"', $a[0]);

		return response()->json(['response' => $b[5]], 200);
            
    }

    public function sendMessage() {
		$content      = array(
		    "en" => 'English Message'
		);
		$hashes_array = array();
		array_push($hashes_array, array(
		    "id" => "like-button",
		    "text" => "Like",
		    "icon" => "http://i.imgur.com/N8SN8ZS.png",
		    "url" => "https://yoursite.com"
		));
		$fields = array(
		    'app_id' => "876b6875-5142-4bb5-a1b5-7b585341e078",
		    'include_player_ids' => array(),
		    'contents' => $content,
		    'web_buttons' => $hashes_array
		);

		$fields = json_encode($fields);
		print("\nJSON sent:\n");
		print($fields);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json; charset=utf-8',
		    'Authorization: Basic YjE5N2IzZGUtYTE4ZC00YTZjLWEyYmYtNjhlMTcwZTQ2ZTA3'
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);

		return $response;
	}

	public function Message()
	{
		$response = $this->sendMessage();
		$return["allresponses"] = $response;
		$return = json_encode($return);

		$data = json_decode($response, true);
		print_r($data);
		$id = $data['id'];
		print_r($id);

		print("\n\nJSON received:\n");
		print($return);
		print("\n");
	}
}
