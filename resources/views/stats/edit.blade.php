@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/stats/update/{{$stat->id}}">
        <label for="cname">Casino Name:</label><br>
        <input value={{$stat->casino_name}} type="text" id="cname" name="cname"><br>
        <label for="buyin">Amount Bought In:</label><br>
        <input value={{$stat->buyin}} type="number" id="buyin" name="buyin"><br>
        <label for="buyout">Amount Cashed Out:</label><br>
        <input value={{$stat->cashout}} type="number" id="buyout" name="buyout"><br>
        <label for="time">Total Time Played (Minutes):</label><br>
        <input value={{$stat->time_played}} type="number" id="time" name="time"><br>
        <input style="margin-top: 10px" class="buttons" type="submit" value="Submit">
    </form>
</div>
@endsection