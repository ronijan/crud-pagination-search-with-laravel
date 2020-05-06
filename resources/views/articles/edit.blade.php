@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-left pb-2">Edit Article</h2>
            <hr class="pb-3">
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                {{ csrf_field() }}
                @method('PATCH')

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bild">Teaserbild</label>
                            <input type="text" name="teaserbild" id="bild" class="form-control"
                                   placeholder="Enter Teaserbild"
                                   value="{{ $article->dachzeile }}">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="dachzeile">Dachzeile</label>
                            <input type="text" name="dachzeile" id="dachzeile" class="form-control"
                                   placeholder="Enter Dachzeile"
                                   value="{{ $article->dachzeile }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ueberschrift">Überschrift</label>
                            <input type="text" name="ueberschrift" id="ueberschrift" class="form-control"
                                   placeholder="Enter Überschrift"
                                   value="{{ $article->ueberschrift }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="teasertext">Teasertext</label>
                            <textarea class="form-control" rows="5" name="teasertext" id="teasertext"
                                      placeholder="Enter Teasertext">{{ $article->teasertext }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Edit Article</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
