<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public static function sendMail($data)

    {

        $data['title'] = "Welcome to Web24h";
        $result = Mail::send('admin.emails.email', $data, function($message) use ($data){

            $message->to($data['email'])

                ->subject('Information Account Mail');

        });
    }

}
