<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function email(){
        return $this->belongsTo(Message::class);
    }
}
