<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBehaviorController extends Controller
{
    public function logBehavior(Request $request)
{
    $data = $request->validate([
        'user_id' => 'required',
        'behavior' => 'required',
    ]);

    DB::table('user_behaviors')->insert([
        'user_id' => $data['user_id'],
        'behavior' => $data['behavior'],
        'timestamp' => now(),
    ]);

    return response()->json(['message' => 'Behavior logged successfully']);
}

}
