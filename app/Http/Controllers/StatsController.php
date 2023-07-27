<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $stats = Stats::where('user_id', $userId)
        ->orderBy('created_at', 'desc')->get();
        $totalTime = 0;
        $cashout = 0;
        $buyin = 0;
        foreach ($stats as $stat) {
            $totalTime += $stat->time_played;
            $cashout += $stat->cashout;
            $buyin += $stat->buyin;
        }
        $earnings = $cashout - $buyin;
        return view('stats/index')->with([
            'stats' => $stats,
            'earnings' => $earnings,
            'total_time' =>  $totalTime
        ]);
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
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('stats/create')->with('success', 'Session Stored!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stats $stats)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stat = Stats::find($id);
        return view('stats/edit')->with('stat', $stat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stat = Stats::find($id);
        $stat->casino_name = $request->input('cname');
        $stat->buyin = $request->input('buyin');
        $stat->cashout = $request->input('buyout');
        $stat->time_played = $request->input('time');
        $stat->save();

        return redirect('stats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stats $stats)
    {
        //
    }
}
