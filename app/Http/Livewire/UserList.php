<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users;
    
    public function mount()
    {
        $this->users = User::all();
    }
    public function testFunc($userId){
        $this->emitTo('chat','changeUser',$userId);
    }
    public function render()
    {
        return view('livewire.user-list');
    }
}
