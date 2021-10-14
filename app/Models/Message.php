<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message', 'sender_id', 'reciever_id', 'is_seen'];
    use HasFactory;

    public function reciever(){
        return $this->belongsTo(User::class, 'id');
    }

    public function sender(){
        return $this->belongsTo(User::class, 'id');
    }
}

