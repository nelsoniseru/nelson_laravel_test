<?php

namespace App\Api\V1\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Abraham\TwitterOAuth\TwitterOAuth;

class SubscriptionController extends Controller
{
  
    public function SubscribeChannel()
    {
       $userid = session()->get('app_id');
      
      $twitterOAuth = new TwitterOAuth(
        env('TWITTER_CONSUMER_KEY'),
        env('TWITTER_CONSUMER_SECRET'),
        env('TWITTER_ACCESS_TOKEN'),
        env('TWITTER_ACCESS_TOKEN_SECRET')
    );      

    //All this commented, are the features that works in the free tier you can test it
     // $tweet = $twitterOAuth->post('tweets', ['text' => 'what a beautiful day']);
     // $tweet = $twitterOAuth->delete('tweets/id');
    // $tweet = $twitterOAuth->get('users/me');
   // dd($tweet);

    // This only works when you upgrade twitter account to a paid plan
    //for more info https://www.withblaze.app/blog/understanding-the-recent-changes-to-twitter-api-a-complete-guide
        $followResult = $twitterOAuth->post('friendships/create', ['user_id' =>  $userid ]);
        if ($twitterOAuth->getLastHttpCode() == 200) {
            // Send a Direct Message to the user
            $dmResult = $twitterOAuth->post('direct_messages/events/new', [
                'event' => [
                    'type' => 'message_create',
                    'message_create' => [
                        'target' => [
                            'recipient_id' =>  $userid, 
                        ],
                        'message_data' => [
                            'text' => 'Thanks for following!.',
                        ],
                    ],
                ],
            ]);
            dd($twitterOAuth->getLastHttpCode());

            if ($twitterOAuth->getLastHttpCode() == 200) {
                return response()->json(['success' => true, 'message' => 'User subscribed successfully']);
            }
        }

        return response()->json(['success' => false, 'message' => 'oops something happened']);
    }


    
}
