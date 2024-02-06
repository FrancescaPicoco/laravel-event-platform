@extends('layouts.admin')

@section('content')
<div class="container-sm d-flex">
 <div class="card" style="width: 18rem;">
    <img src="{{ $eventItem->poster }}" class="card-img-top" alt="{{ $eventItem->artist }}">

    <div class="card-body bg-dark text-light">
        <h5 class="card-title">{{ $eventItem->artist }} </h5>
        <p class="card-text">
            <p class="card-text"> {{ $eventItem->name }}</p>
            <p class="card-text"> {{ $eventItem->city }}</p>
            <p class="card-text"> {{ $eventItem->date }}</p>
        </p>
    </div>
  </div>
 
 <div class="mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body bg-dark text-light">
            <p class="card-text">
                <p class="card-text"> {{ $eventItem->location }}</p>
                <p class="card-text"> {{ $eventItem->address }}</p>
                <p class="card-text"> {{ $eventItem->tickets }}</p>
                <p class="card-text"> {{ $eventItem->price }}</p>
            </p>
        </div>
      </div> 
 </div>
</div>

@endsection