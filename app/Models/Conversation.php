<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* we use it in route to use uuid place id  automatic in every route */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    protected $dates = ['last_message_at'];

    protected function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('read_at')
            ->withTimestamps()
            ->latest();
    }

    public function others()
    {
        return $this->users()->where('user_id', '!=', auth()->id());
    }
    public function messages()
    {
        return $this->hasMany(Message::class)
            ->latest();
    }
}
