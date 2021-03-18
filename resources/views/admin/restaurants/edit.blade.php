@extends('layouts.admin.dashboard')

@section('content')
    <h1>Edit a new Restaurant</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.restaurants.update', ['restaurant'=>$restaurant->slug])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- name --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$restaurant->name}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- phone --}}
        <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" value="{{$restaurant->phone}}">
        </div>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- address --}}
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" id="address" value="{{$restaurant->address}}">
        </div>
        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- cover --}}
        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverHelper">
            <small id="coverHelper" class="form-text text-muted">Add a cover image for the current restaurant</small>
        </div>
        @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- types --}}
        <div class="form-group">
            <label for="types">Types</label>
            <select class="form-control" name="types[]" id="types" multiple>
                @if ($types)
                    @foreach($types as $type)
                        <option value="{{ $type->id}}" {{ $restaurant->types->contains($type) ? 'selected' : ''}}>{{ $type->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        @error('types')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection