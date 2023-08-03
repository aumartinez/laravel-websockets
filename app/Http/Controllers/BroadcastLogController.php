<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BroadcastLogController extends Controller
{
    public function index()
    {
        $broadcastLogPath = storage_path('logs/broadcast.log');
        if (File::exists($broadcastLogPath)) {
            $broadcastLog = File::get($broadcastLogPath);
            return view('broadcast-log.index', compact('broadcastLog'));
        } else {
            return view('broadcast-log.index', ['broadcastLog' => '']);
        }
    }
}
