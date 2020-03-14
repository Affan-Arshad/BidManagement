<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Task;
use App\User;
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

        return view('dashboard.index', compact('bids', 'tasks', 'users'));
    }
}