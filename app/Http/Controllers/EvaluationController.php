<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bid $bid)
    {
        return view('evaluations.create', compact('bid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bid $bid)
    {
        Evaluation::create([
            'criterion' => $request->criterion,
            'percentage' => $request->percentage,
            'bid_id' => $bid->id
        ]);
        return redirect("/bids/$bid->id?focus=criterion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid, Evaluation $evaluation)
    {
        
        $evaluation->criterion = $request->criterion;
        $evaluation->percentage = $request->percentage;
        $evaluation->bid_id = $bid->id;
        $evaluation->save();
        
        return redirect("/bids/$bid->ids#criterion");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid, Evaluation $evaluation)
    {
        $evaluation->delete();
        return redirect()->back();
    }
}
