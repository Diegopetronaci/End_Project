@extends('layouts.admin.dashboard')

@section('content')
    <h1>All types</h1>
    
    <div class="table_admin">
        <div class="card_admin">
            <div class="card_type">
                <div class="icona">
                    <i class="fas fa-utensils fa-lg fa-fw"></i>
                </div>
                @foreach($types as $value)
                    @if($value->id < 20)
                        <div class="name">{{$value->name}}</div>
                    @endif
                @endforeach
            </div>

            <div class="card_type">
                <div class="icona">
                    <i class="fas fa-utensils fa-lg fa-fw"></i>
                </div>
                @foreach($types as $value)
                    @if($value->id > 20 && $value->id < 40)
                        <div class="name">{{$value->name}}</div>
                    @endif
                @endforeach
            </div>
            
            <div class="card_type">
                <div class="icona">
                    <i class="fas fa-utensils fa-lg fa-fw"></i>
                </div>
                @foreach($types as $value)
                    @if($value->id > 40 && $value->id < 60)
                        <div class="name">{{$value->name}}</div>
                    @endif
                @endforeach
            </div>

            <div class="card_type">
                <div class="icona">
                    <i class="fas fa-utensils fa-lg fa-fw"></i>
                </div>
                @foreach($types as $value)
                    @if($value->id > 60 && $value->id < 80)
                        <div class="name">{{$value->name}}</div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection