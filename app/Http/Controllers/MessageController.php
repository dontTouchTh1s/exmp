<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        return view('contactus');
    }
    public function store(StoreMessageRequest $request)
    {
        Message::create($request->all());
        return back()->with('success', 'پیامو فرسادیم');
    }
    public function show()
    {
        return view('show-messages')->with('messages', Message::all()->toArray());
    }
}
