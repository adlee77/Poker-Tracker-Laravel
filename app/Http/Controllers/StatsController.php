<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = Stats::orderBy('created_at', 'desc')->get();
        return view('stats/index')->with('stats', $stats);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stats/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Stats;
        $post->casino_name = $request->input('cname');
        $post->buyin = $request->input('buyin');
        $post->cashout = $request->input('buyout');
        $post->time_played = $request->input('time');
        $post->save();

        return redirect('stats/create')->with('success', 'Session Stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stats $stats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stats $stats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stats $stats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stats $stats)
    {
        //
    }
}
