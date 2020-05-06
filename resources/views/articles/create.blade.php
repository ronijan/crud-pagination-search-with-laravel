@extends('layouts.layout')

@section('content')
    <h2 style="margin-top: 12px;" class="text-center">Add Product</h2>
    <br>

    <form action="{{ route('articles.store') }}" method="POST" name="add_product">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Teaserbild</strong>
                    <input type="text" name="teaserbild" class="form-control" placeholder="Enter Teaserbild">
                    <span class="text-danger">{{ $errors->first('teaserbild') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Dachzeile</strong>
                    <input type="text" name="dachzeile" class="form-control" placeholder="Enter Dachzeile">
                    <span class="text-danger">{{ $errors->first('dachzeile') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Teasertext</strong>
                    <textarea class="form-control" col="4" name="teasertext" placeholder="Enter Teasertext"></textarea>
                    <span class="text-danger">{{ $errors->first('teasertext') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Überschrift</strong>
                    <textarea class="form-control" col="4" name="ueberschrift" placeholder="Enter Überschrift"></textarea>
                    <span class="text-danger">{{ $errors->first('ueberschrift') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
