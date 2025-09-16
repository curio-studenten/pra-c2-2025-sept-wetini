<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    function index(){
        return view("pages.contact");
    }

    function send(Request $request){
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "message" => "required|string"
        ]);
        $content = "Message from: " . $request->name . " " . $request->email . "\n" . $request->message . "\n";
        Storage::disk('local')->append("contact.txt", $content);
        return view("pages.contact")->with("message", "Message sent");
    }
}
