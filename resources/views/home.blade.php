@extends('layouts.app')

@section('content')
    <div class="app-title">
        <h1>Poker Tracker</h1>
        <p>Sign up for a free account <br>
        to start tracking stats and sessions</p>
    </div>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{URL::asset('/images/poker-img.jpg')}}" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/poker_felt.jpg')}}" class="d-block" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
@endsection
