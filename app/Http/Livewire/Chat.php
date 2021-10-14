<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $message, $sender, $reciever, $user_id, $users;


    public function mount(){
        $this->user = User::find($this->user_id);
        $this->users = User::get();
    }

    public function sendMSG()
    {
        $message = Message::create([
            'sender_id' => Auth::user()->id,
            'reciever_id' => $this->user_id,
            'message' => $this->message,
            'is_seen' => 0
        ]);

        broadcast(new MessageSent(auth()->user(), $message));

        $this->message = '';
    }
    
    public function chaneUser($user_id)
    {
        // dd($user_id);
        $this->user_id = $user_id;
    }

    public function render()
    {
        return view('livewire.chat', [
            'messages' => Message::where(function($query)  {
                $query->where('sender_id', Auth::user()->id)->where('reciever_id', $this->user_id);
            })->orWhere(function ($query) {
                $query->where('sender_id', $this->user_id)->where('reciever_id', Auth::user()->id);
            })->orderBy('created_at', 'ASC')->limit(10)->get()
        ]);
    }
}
