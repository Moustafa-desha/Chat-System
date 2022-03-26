<?php

namespace App\Http\Controllers\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ConversationController extends Controller
{
    protected function index(Request $request)
    {

        $conversations = $request->user()->conversations;

        return view('conversations.index',compact('conversations'));
    }

    public function create(Request $request)
    {
        $conversations = $request->user()->conversations;

        return view('conversations.create',compact('conversations'));
    }


    public function show(Conversation $conversation, Request $request)
    {
//        $this->authorize('show', $conversation);

        $conversations = $request->user()->conversations;


        /* this to update automatic with event  */
        $request->user()->conversations()->updateExistingPivot($conversation, [
            'read_at' => now()
        ]);


        return view('conversations.show', compact('conversation','conversations'));
    }
}
