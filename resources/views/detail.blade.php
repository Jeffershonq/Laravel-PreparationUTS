@extends('layout.main')

@section('content')
    <h1>{{$data->title}}</h1>

    @forelse ($list as $item)
        <div class="row">
            <p>{{$item->episode}}</p>
            <p>{{$item->title}}</p>
        </div>
    @empty
        <h1>No Data Available</h1>
    @endforelse
    <a href="{{url('/')}}">Back</a>
@endsection