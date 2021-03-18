@extends('layouts.admin.dashboard')

@section('content')
    <h1>All restaurants</h1>
    <a href="{{route('admin.restaurants.create')}}" class="btn btn-dark text-white">Create a new restaurant</a>
    
    <div class="table_admin">
        <div class="row_table_th">
            <div class="actions_th"></div>
            <div class="cover_th">Cover</div>
            <div class="name_th">Name</div>
            <div class="types_th">Types</div>
            <div class="address_th">Address</div>
            {{-- <div class="status_th"><i class="fas fa-traffic-light"></i></div> --}}
        </div>
        @foreach($restaurants as $value)
            <div class="row_table">
                <div class="actions">
                    <a href="{{ route('admin.restaurants.show', ['restaurant'=>$value->slug] )}}" class="btn"><i class="far fa-eye fa-xs fa-fw"></i></a>
                    <a href="{{ route('admin.restaurants.edit', ['restaurant'=>$value->slug] )}}" class="btn"><i class="fas fa-edit fa-xs fa-fw"></i></a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-toggle="modal" data-target="#destroy-{{$value->id}}">
                        <i class="fas fa-trash-alt fa-xs fa-fw"></i>
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="destroy-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="restaurants-destroy-{{$value->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete restaurants {{$value->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    sei sicuro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('admin.restaurants.destroy', ['restaurant'=> $value->slug]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cover">
                    @if($value->cover)
                        <img src="{{ asset('storage/' . $value->cover)}}" alt="">
                    @endif
                </div>
                <div class="name">{{$value->id}} {{$value->name}}</div>
                <div class="types">
                    @if (count($value->types) > 0)
                        @foreach ($value->types as $type)
                            <span>{{ $type->name }}</span>
                        @endforeach
                    @else
                        <span>N/A</span>
                    @endif
                </div>
                <div class="address">{{$value->address}}</div>
                
                {{-- <div class="status {{$value->available ? 'green' : 'red'}}"><i class="fas fa-circle"></i></div> --}}
            </div>
        @endforeach
    </div>
@endsection
