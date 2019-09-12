<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\BidsToday;
use App\Notifications\BidsTomorrow;
use App\User;
use Auth;
use Notification;

class PushController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    
    /**
     * Store the PushSubscription.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $this->validate($request,[
            'endpoint'    => 'required',
            'keys.auth'   => 'required',
            'keys.p256dh' => 'required'
        ]);
        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key = $request->keys['p256dh'];
        $user = Auth::user();
        $user->updatePushSubscription($endpoint, $key, $token);
        
        return response()->json(['success' => true],200);
    }

    /**
     * Send Push Notifications to all users.
     * 
     * @return \Illuminate\Http\Response
     */
    public function bidsToday(){
        Notification::send(User::all(), new BidsToday);
        return redirect()->back();
    }

    /**
     * Send Push Notifications to all users.
     * 
     * @return \Illuminate\Http\Response
     */
    public function bidsTomorrow(){
        Notification::send(User::all(), new BidsTomorrow);
        return redirect()->back();
    }
    
}