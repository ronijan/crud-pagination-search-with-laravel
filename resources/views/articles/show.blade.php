@extends('layouts.layout')

@section('content')

    <h2 class="text-left">Article Details</h2>
    <hr class="pb-3">

    <div class="row">
        <div class="col-md-12">
            <h2><b>Dachzeile:</b>{{$article->dachzeile}}</h2>
            <h4><b>Überschrift:</b>{{$article->ueberschrift}}</h4>

            <p><b>TeaseText: </b>{{$article->teasertext}}</p>

{{--             <img src="{{$article->teaserbild}}" alt="test bild">--}}

            <p><b>Created At:</b> {{$article->created_at}}</p>
            <p><b>Updated At:</b> {{$article->updated_at}}</p>

        </div>
    </div>

@endsection
