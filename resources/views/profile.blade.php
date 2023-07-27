@extends('layouts.app')

@section('content')
<div class="profile-container">
    <h2>Welcome {{ Auth::user()->name }}</h2>
</div>
@endsection
