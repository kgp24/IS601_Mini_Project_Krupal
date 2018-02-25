<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function signin()
    {
        return view('pages.signin');
    }

    function signup()
    {
        return view('pages.signup');
    }

    function messages()
    {
        return view('pages.messages');
    }

    function logout()
    {
        return view('pages.logout');
    }

    function store()
    {
        // $email = $request->email;
        // return redirect()->route('contactmessage',['email' => $email]);
    }

    function contactmessage1()
    {
        return view('pages.contactmessage1');
    }

    function contactmessage2()
    {
        return view('pages.contactmessage2');
    }

    function contactmessage3()
    {
        return view('pages.contactmessage3');
    }

    function contactmessage4()
    {
        return view('pages.contactmessage4');
    }

    function contactmessage5()
    {
        return view('pages.contactmessage5');
    }
}