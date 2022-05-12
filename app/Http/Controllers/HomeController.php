<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\WebsocketDemoEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        broadcast(new WebsocketDemoEvent('Welcome to project LAMBAT public channel'));
        // return view('home');
        return redirect('chats');
    }
}
