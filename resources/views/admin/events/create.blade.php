@extends('layouts.admin')

@section('content')
<div class="container-sm text-light">
    <form action="{{ route('admin.events.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome Evento</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}} ">
                @error('name')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
        </div>
     </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location')}} ">
              @error('location')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="city" class="form-label">Città</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city')}} ">
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address')}} ">
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control @error('artist') is-invalid @enderror" id="artist" name="artist" value="{{ old('artist')}} ">
            @error('artist')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date')}} ">
            @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="tickets" class="form-label">Tickets</label>
                <input type="text" class="form-control @error('tickets') is-invalid @enderror" id="tickets" name="tickets" value="{{ old('tickets')}} ">
            @error('tickets')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{ old('poster')}} ">
            @error('poster')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price')}} ">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
        

    {{-- <select name="technologies[]" id="technologies" class="form-select" multiple aria-label="Multiple select example"> --}}
        {{-- <option selected>Open this select menu</option> --}}
          {{-- @foreach($technologies as $technology)
            <option value="{{$technology->id}}">{{$technology->name}}</option>
           @endforeach --}}
        {{-- <option value="1">name1</option>
        <option value="2">name2</option>
        <option value="3">name3</option> --}}
    {{-- </select> --}}
 
        <div class="col text-center">  
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>
@endsection