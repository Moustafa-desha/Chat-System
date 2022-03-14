<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Livewire\Component;

class ConversationList extends Component
{

    public $conversations;

    public function mount()
    {
        $this->conversations = Conversation::get();

    }

    public function render()
    {
        return view('livewire.conversations.conversation-list');
    }
}
