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
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="head">Head</label>
                    <input type="text" name="big_title" id="head" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sub_title">Sub-title</label>
                    <input type="text" name="sub_title" id="sub_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add new Article</button>

            </form>
        </div>
    </div>
@endsection
