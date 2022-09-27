<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();
        $tasks = Task::all();
        $users = User::where('name', '!=', 'Admin')->get();
        $redirect = "/dashboard";
        
        return view('dashboard.index', compact('bids', 'tasks', 'users', 'redirect'));
    }
}