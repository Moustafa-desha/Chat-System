<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConversationMessages extends Component
{

    public $conversation;
    public $messages;

    public function mount(Collection $messages)
    {
        $this->conversation = Auth::user()->conversation;

        $this->messages = $messages;

    }

    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
