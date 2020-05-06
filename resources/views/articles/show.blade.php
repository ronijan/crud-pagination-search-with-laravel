@extends('layouts.layout')

@section('content')

    <h4>View Article</h4>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h2>{{$article->dachzeile}}</h2>
            <h4>{{$article->ueberschrift}}</h4>

            <p>{{$article->teasertext}}</p>

            {{-- <img src="{{$article->teaserbild}}" alt="test bild">--}}

            <p>Created At: {{$article->created_at}}</p>
            <p>Updated At: {{$article->updated_at}}</p>

        </div>
    </div>

@endsection
