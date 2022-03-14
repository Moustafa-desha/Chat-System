<?php

namespace App\Http\Controllers\Conversatins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    protected function index()
    {

        return view('conversations.index');
    }
}
