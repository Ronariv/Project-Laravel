@extends('template.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm m-1" style="width:40%;">
                <img src="{{ url($book->cover) }}" alt="" class="image" style="height: 100%; object-fit: fill">
            </div>
            <div class="col-sm p-2 m-2" style="width:60%;">
                <style>
                    h4{
                        font-size: 1rem;
                        color:gray;
                    }
                </style>
                <h1>{{$book->title}}</h1>
                <p>{{$book->description}}</p>
                <h3>Detail</h3>
                <div class="d-flex">
                    <div class="block">
                        <h4>Written by</h4>
                        <h3>{{ $book->author }}</h3>
                    </div>
                    <div class="block">
                        <h4>Published by</h4>
                        <h3>{{ $book->publisher }}</h3>
                    </div>
                    <div class="block">
                        <h4>Year</h4>
                        <h3>{{ $book->publication_date}}</h3>
                    </div>
                    <div class="block">
                        <h4>Stock</h4>
                        <h3>{{ $book->stock }}</h3>
                    </div>
                    <div class="block">
                        <h4>Genre</h4>
                        <h3>{{ $book->genre }}</h3>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-lg">In Stock</button>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm d-flex justify-content-between">
                <h1>$ {{$book->price}}</h1>
                <button class="btn btn-success btn-lg">Add to Cart</button>
            </div>
        </div>
        <div class="row">
            <h3>Recommendation</h3>
            @foreach ($books as $book)
            <div class="card m-2 p-1" style="width:13%;">
                <a href="{{url('detail/'.$book->id)}}">
                <img class="card-img-top" src="{{ url($book->cover) }}" alt="Card image cap" style="max-height:60%">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">$ {{ $book->price }}</p>
                </div>
                </a>
            </div>
            @endforeach
        </div>
  </div>
  <div>

  </div>
@endsection
