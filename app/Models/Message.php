<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function reciever(){
        return $this->belongsTo(User::class, 'id');
    }

    public function sender(){
        return $this->belongsTo(User::class, 'id');
    }
}

