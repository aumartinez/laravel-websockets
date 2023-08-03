<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\ItemCreated;

class MessagesController extends Controller
{
    //
  public function index()
  {
    $messages = Message::latest()->paginate(10);
    return view('messages.index', compact('messages'));
  }

  public function create()
  {
    return view('messages.create');
  }

  public function edit (Message $message)
  {
    return view('messages.edit', compact('message'));
  }
}
