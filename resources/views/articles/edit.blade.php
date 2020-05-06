@extends('layouts.layout')

@section('content')
    <h2 style="margin-top: 12px;" class="text-center">Edit Product</h2>
    <br>


    <form action="{{ route('articles.update', $article->id) }}" method="POST" name="update_product">
        {{ csrf_field() }}
        @method('PATCH')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Teaserbild</strong>
                    <input type="text" name="teaserbild" class="form-control" placeholder="Enter Teaserbild" value="{{ $article->dachzeile }}">
                    <span class="text-danger">{{ $errors->first('teaserbild') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Dachzeile</strong>
                    <input type="text" name="dachzeile" class="form-control" placeholder="Enter Dachzeile" value="{{ $article->dachzeile }}">
                    <span class="text-danger">{{ $errors->first('dachzeile') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Überschrift</strong>
                    <textarea class="form-control" col="4" name="ueberschrift" placeholder="Enter Überschrift" >{{ $article->ueberschrift }}</textarea>
                    <span class="text-danger">{{ $errors->first('ueberschrift') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong> Teasertext</strong>
                    <textarea class="form-control" col="4" name="teasertext" placeholder="Enter Teasertext" >{{ $article->teasertext }}</textarea>
                    <span class="text-danger">{{ $errors->first('teasertext') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
