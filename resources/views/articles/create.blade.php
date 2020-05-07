@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-left">Add new Article</h2>
            <hr class="pb-3">

            <form action="{{ route('articles.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Enter Author">
                </div>

                <div class="form-group">
                    <label for="teaserbild">Teaserbild</label>
                    <input type="text" name="teaserbild" id="teaserbild" class="form-control" placeholder="Enter Teaserbild">
                </div>
                <div class="form-group">
                    <label for="dachzeile">Dachzeile</label>
                    <input type="text" name="dachzeile" id="dachzeile" class="form-control" placeholder="Enter Dachzeile">
                </div>
                <div class="form-group">
                    <label for="ueberschrift">Überschrift</label>
                    <input type="text" name="ueberschrift" id="ueberschrift" class="form-control" placeholder="Enter Überschrift">
                </div>
                <div class="form-group">
                    <label for="teasertext">Teasertext</label>
                    <textarea class="form-control" col="4" name="teasertext" id="teasertext" placeholder="Enter Teasertext"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add new Article</button>

            </form>
        </div>
    </div>
@endsection
