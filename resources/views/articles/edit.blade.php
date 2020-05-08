@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-left pb-2">Edit Article</h2>
            <hr class="pb-3">
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                {{ csrf_field() }}
                @method('PATCH')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                           value="{{ $article->title }}">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control"
                           value="{{ $article->author }}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control"
                           value="{{ $article->image }}">

                </div>
                <div class="form-group">
                    <label for="head">Head</label>
                    <input type="text" name="big_title" id="head" class="form-control"
                           value="{{ $article->big_title }}">
                </div>
                <div class="form-group">
                    <label for="sub_title">Sub-title</label>
                    <input type="text" name="sub_title" id="sub_title" class="form-control"
                           value="{{ $article->sub_title }}">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="Description">{{ $article->description }}</textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Edit Article</button>
                </div>
            </form>
        </div>
    </div>
@endsection
