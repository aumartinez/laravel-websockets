<?php

namespace App\Http\Controllers\Api;

use App\Events\ItemCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessagesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $messages = Message::latest()->paginate(10);
      return response()->json(['data' => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
      ]);

      $message = Message::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
      ]);

      event(new ItemCreated(($message)));
      return response()->json(['data' => $message], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
      return response()->json(['data' => $message], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
      $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
      ]);

      $message->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
      ]);

      return response()->json(['data' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
      $message->delete();      
      return response()->json(['message' => 'Message deleted successfully!']);
    }
}
