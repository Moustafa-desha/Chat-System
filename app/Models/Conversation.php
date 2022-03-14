<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $fillable = [
//        'name',
//        'uuid',
//        'user_id',
//
//    ];
    protected $dateFormat = ['last_message_at'];

    protected function users()
    {
        return $this->belongsToMany(User::class);
    }
}
