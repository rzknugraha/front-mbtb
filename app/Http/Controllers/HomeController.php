<?php

namespace App\Http\Controllers;

use App\EmailSubscribe;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        return view('home');
    }
    public function landing()
    {
        return view('welcome');
    }
    public function emailSubscribe(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email:rfc,dns|unique:email_subscribe',

        ]);

        $es = new EmailSubscribe;

        $es->email = $request->email;
        $es->status = 1;
        $es->save();

        $request->session()->flash('message', 'Thank you for subscribe');

        return redirect('/');
    }

    public function home()
    {
        $getStory = Post::where('category', 3)->get();
        $getEvent = Post::where('category', 4)->get();

        return view('home.home', compact('getEvent', 'getStory'));
    }
}
