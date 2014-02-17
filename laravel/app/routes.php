<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    if (!Cache::has('tweet')) {
        $tweet = Twitter::getUserTimeline(array('screen_name' => 'aucareer', 'count' => 1, 'format' => 'json'));
        $tweet = json_decode($tweet, true);
        if (array_key_exists(0, $tweet)) {
            $tweet = $tweet[0]['text'];
            $tweet = Twitter::linkify($tweet);
            Cache::put('tweet', $tweet, 10);
        }
    }

	return View::make('index', array('tweet' => Cache::get('tweet', 'No recent tweets.')));
//    return View::make('index', array('tweet' => 'No recent tweets.'));
});