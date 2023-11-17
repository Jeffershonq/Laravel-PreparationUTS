@extends('layout.main')

@section('content')
<div class="row">
    @forelse ($data as $item)
    <div class="card" style="width: 18rem;">
        <img src="cover/{{$item->photo}}" class="card-img-top" alt="foto">
        <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <a href="{{url($item->id)}}" class="btn btn-primary">Detail</a>
        </div>
    </div>
    @empty
        <h1>Empty Data</h1>
    @endforelse
</div>

   {{$data -> links()}}
@endsection