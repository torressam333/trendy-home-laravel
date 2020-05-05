<?php

namespace App\Http\Controllers;

use App\Mail\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Message;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1',
            'email' => 'required|min:3|max:255',
            'phone'=> 'required|max:14',
            'subject' => 'required|min:3',
            'message' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() . '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $message = Message::create($request->all());

        Mail::to($message->email)->queue(
            new MessageCreated($message)
        );

        return redirect()->route('home')
            ->with('flash.message', 'Your message has been
            successfully sent. We will reach out to you soon!')
            ->with('flash.class', 'success');
    }
}
