<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;

use MongoDB;


class TwitterController extends Controller
{
    //
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Twitter.SearchPage');
    }


    public function toptweet()
    {
        return view('Twitter.TopTweet');
    }
}
