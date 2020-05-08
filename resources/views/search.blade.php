@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md col-sm">
            @if(!empty($articles))
                <h1>Search Results: </h1>
                @foreach($articles as $article)
                    <div class="p-3 border border-info">
                        {{$article->title}} <b><a
                                href="{{{route('articles.show', $article->id)}}}">{{$article->author}}</a></b>
                        <h3> {{$article->big_title}}</h3>
                        <h5> {{$article->sub_title}}</h5>
                        <p>{{$article->description}} </p>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
    </div>
@endsection
