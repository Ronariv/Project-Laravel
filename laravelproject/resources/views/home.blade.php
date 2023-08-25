@extends('template.template')

@section('content')
    <div style="margin: 0px 150px">
        <div class="row">
            @foreach ($books as $book)
            <div class="card m-2 p-1" style="width:13%;">
                <a href="{{url('detail/'.$books->id)}}">
                <img class="card-img-top" src="{{ url($books->cover) }}" alt="Card image cap" style="max-height:60%">
                <div class="card-body">
                    <h5 class="card-title">{{ $books->title }}</h5>
                        <p class="card-text">$ {{ $books->price }}</p>
                </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

    @if($books->lastPage() > 1 )
        <div style="justify-content:space-around; margin-top:50px" >
            <div>
                <div class="d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="{{ $books->previousPageUrl() }}">&laquo;</a>
                        </li>
                        @for ($i = 1; $i <= $books->lastPage(); $i++)
                            @if($i == $books->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{ $i }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $books->url($i) }}">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{ $books->nextPageUrl() }}">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection
