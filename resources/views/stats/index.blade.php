@extends('layouts.app')

@section('content')
<div class="container welcome-div">
    <h2>Welcome {{ Auth::user()->name }}</h2>
    <p>Your total earnings: <span class=@if($earnings > 0) "pos" @else "neg" @endif>{{$earnings}}</span></p>
    <p>Total time played: {{$total_time}}</p>
</div>
<div class="container stat-container">
    @if(count($stats) > 0)
        @foreach($stats as $stat)
            <div class="entry">
                <div class="d-flex title"><h3>Casino: {{$stat->casino_name}}</h3>
                    <div>
                        <a href="/edit/{{$stat->id}}"><button class="buttons">Edit</button></a>
                        <a href="/delete/{{$stat->id}}"><button class="buttons">Delete</button></a>
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

<script>
    function edit(id) {
        $.ajax({
            url: '/edit',
            data: {id: id}
        })
    }
</script>
@endsection