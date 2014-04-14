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
    
    if (!Cache::has('blog')) {
        $blog = array('title' => '', 'body' => '');
        $request = Requests::get('http://tigersprepare.blogspot.com/feeds/posts/default?alt=rss');
        $request = simplexml_load_string($request->body);
        $request = json_encode($request);
        $request = json_decode($request, true);
        if (array_key_exists('channel', $request)) {
            $blog['title'] = $request['channel']['item'][0]['title'];
            $blog['body'] = $request['channel']['item'][0]['description'];
            $blog['body'] = implode(" ", array_slice(explode(" ", strip_tags($blog['body'])), 0, 50)) . '&hellip;';
            Cache::put('blog', $blog, 10);
        }
    }

	return View::make('index', array(
        'action' => 'home',
        'tweet' => Cache::get('tweet', 'No recent tweets.'),
        'blog' => Cache::get('blog', array('title' => 'No recent posts.', 'body' => ''))
    ));
});

Route::get('/jobs', function() {
    return View::make('jobs', array(
        'action' => 'jobs'
    ));
});