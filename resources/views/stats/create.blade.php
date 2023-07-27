@extends('layouts.app')

@section('content')
<div class="container entry-container">
    <h2>Log a Session</h2>
    <form action="/stats/submit-session">
        <label for="cname">Casino Name:</label><br>
        <input type="text" id="cname" name="cname"><br>
        <label for="buyin">Amount Bought In:</label><br>
        <input type="number" id="buyin" name="buyin"><br>
        <label for="buyout">Amount Cashed Out:</label><br>
        <input type="number" id="buyout" name="buyout"><br>
        <label for="time">Total Time Played (Minutes):</label><br>
        <input type="number" id="time" name="time"><br>
        <input style="margin-top: 10px" class="buttons" type="submit" value="Submit">
    </form>
    <p>{{ session('success') }}</p>
</div>
@endsection