<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatRequest;
use App\Http\Requests\UpdateChatRequest;
use App\Models\Chat;

class ChatController extends Controller
{
    public function room_chat()
    {
        return view('dashboard.roomchat.roomchatView', [
            'title' => 'Chat'
        ]);
    }
}
