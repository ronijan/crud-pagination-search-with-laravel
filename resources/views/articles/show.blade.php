@extends('layouts.app')

@section('content')

    <h2 class="text-left">Article Details</h2>
    <hr class="pb-3">

    <div class="row">
        <div class="col-md-12">
            <h2>{{$article->big_title}}</h2>
            <h4>{{$article->sub_title}}</h4>
            <p>{{$article->title}} {{$article->author}}</p>
            <p>{{$article->description}}</p>
            <img src="{{$article->image}}" class="mb-3" alt="{{$article->sub_title}}" width="200px" height="200px">
            <p><b>Created at:</b> {{$article->created_at}}</p>
            <p><b>Updated at:</b> {{$article->updated_at}}</p>
        </div>
    </div>

@endsection
