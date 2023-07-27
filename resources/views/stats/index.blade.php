@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($stats) > 0)
        @foreach($stats as $stat)
            <div class="entry col-md-6">
                <div class="d-flex title"><h3>Casino: {{$stat->casino_name}}</h3>
                    <div>
                        <button>Edit</button>
                        <button>Delete</button>
                    </div>
                </div>
                <div>Time Played: {{$stat->time_played}} minutes</div>
                <div>Buy In: {{$stat->buyin}}</div>
                <div>Cash Out: {{$stat->cashout}}</div>
                <div>Net Profit: 
                    @if($stat->cashout - $stat->buyin > 0)
                    <span class="pos">
                    @else
                    <span class="neg">
                    @endif
                    {{$stat->cashout - $stat->buyin}}
                    </span>
                </div>
            </div>
        @endforeach
    @else
        <p>No entries found</p>
        <a href="/stats/create">Submit Your First Entry</a>
    @endif
</div>
@endsection