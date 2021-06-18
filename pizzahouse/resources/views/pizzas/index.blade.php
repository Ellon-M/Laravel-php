@extends('layout')

@section('content')
<div class="pizza-index">
    <h1>Pizza Orders</h1>
          @foreach($pizzas as $pizza)
        <div class="pizza-item">
          <img src="/img/pizza.png" alt="pizza">
          <h4>
              <a href="{{ route('pizzas.show', $pizza -> id) }}">{{ $pizza-> name }}</a>
            </h4>
        </div>
          @endforeach
        </div>
@endsection
