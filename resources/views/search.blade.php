
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md col-sm">
            @if(!empty($articles))
            <h4>Search Results: </h4>
            @endif

            <ul>
                @foreach($articles as $author)
                    <li><a href="{{{route('articles.show', $author->id)}}}" class="text-black-50">{{$author->author}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
