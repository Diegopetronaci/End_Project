@extends('layouts.admin.dashboard')

@section('content')

    <div class="show_restaurant">
        <h1>
            {{$restaurant->name}}
            {{-- <span class="{{$restaurant->available ? 'green' : 'red'}}">
                <i class="fas fa-circle"></i>
            </span> --}}
        </h1>
        <p>{{$restaurant->address}}</p>

        <div class="types">
            Types: 
            @if (count($restaurant->types) > 0)
                @foreach ($restaurant->types as $type)
                    <span>{{ $type->name }}</span>
                @endforeach
            @else
                <span>N/A</span>
            @endif
        </div>
    </div>
    
@endsection