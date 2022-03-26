<?php

namespace App\Http\Livewire\Conversations;

use App\Events\Conversations\MessageAdded;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationMessages extends Component
{
    public $conversation;
    public $conversationId;
    public $messages;

    public function getListeners()
    {
        return [
            'message.created' => 'prependMessage',
            "echo-private:conversations.{$this->conversationId},Conversations\\MessageAdded" => 'prependMessageFromBroadcast',
        ];
    }

    public function prependMessage($id)
    {
        $this->messages->push(Message::find($id));
    }

    public function prependMessageFromBroadcast($payload)
    {
        $this->prependMessage($payload['message']['id']);
    }



    public function mount(Conversation $conversation,Collection $messages)
    {
        $this->conversation = $conversation;

        $this->conversationId = $conversation->id;
        $this->messages = $messages->reverse();

    }


    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
