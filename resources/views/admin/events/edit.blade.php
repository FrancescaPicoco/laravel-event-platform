@extends('layouts.admin')

@section('content')
<div class="container-sm text-light">
    <form action="{{ route('admin.events.update', $eventItem->id) }}" method="POST"> {{--non legge id--}}
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="name" class="form-label">Nome Evento</label>
              <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $eventItem->name }}">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="artist" class="form-label">Artist</label>
                    <input type="text" class="form-control @error('artist') is-invalid @enderror" id="artist" name="artist" value="{{ old('artist') ?? $eventItem->artist }} ">
                    @error('artist')
                     <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
            </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') ?? $eventItem->location }}">
              @error('location')
            <div class="invalid-feedback">{{ $message }}</div>
             @enderror
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') ?? $eventItem->city }}">
               @error('city')
                   <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>           
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
               <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') ?? $eventItem->address }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>   
          </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                 <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') ?? $eventItem->date }}">
                  @error('date')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>   
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
              <div class="mb-3">
                <label for="tickets" class="form-label">Tickets</label>
                 <input type="text" class="form-control @error('tickets') is-invalid @enderror" id="tickets" name="tickets" value="{{ old('tickets') ?? $eventItem->tickets }}">
                  @error('tickets')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>   
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
              <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                 <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{ old('poster') ?? $eventItem->poster }}">
                  @error('poster')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>   
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                 <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $eventItem->price }}">
                  @error('price')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>   
            </div>
        </div>

        <div class="col-12 text-center"> 
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>
@endsection