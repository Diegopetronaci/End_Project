@extends('layouts.admin.dashboard')

@section('content')
    <h1>Create a new Restaurant</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.restaurants.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- name --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name')}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- phone --}}
        <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone')}}">
        </div>
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- address --}}
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" id="address" value="{{ old('address')}}">
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
                @foreach($types as $type)
                    <option value="{{ $type->id}}">{{ $type->name}}</option>
                @endforeach
            </select>
        </div>
        @error('types')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection