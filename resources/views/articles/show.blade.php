@extends('layouts.layout')

@section('content')

    <h2 class="text-left">Article Details</h2>
    <hr class="pb-3">

    <div class="row">
        <div class="col-md-12">
{{--            dachzeile--}}
            <h2>{{$article->dachzeile}}</h2>
{{--            Überschrift--}}
            <h4>{{$article->ueberschrift}}</h4>
{{--            Title Author --}}
            <p>{{$article->title}} {{$article->author}}</p>
{{--            TeaseText--}}
            <p>{{$article->teasertext}}</p>
{{--             <img src="{{$article->teaserbild}}" alt="test bild">--}}
            <p><b>Created at:</b> {{$article->created_at}}</p>
            <p><b>Updated at:</b> {{$article->updated_at}}</p>
        </div>
    </div>

@endsection
