@extends('layouts.layout')

@section('content')
    <div class="row pb-5">
        <div class="col-md-12">
            <h3>All Articles</h3>
            <div class="float-right pb-3">
                <a href="{{ route('articles.create') }}" class="btn btn-success mb-2">Add New Article</a>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teaserbild</th>
                    <th scope="col">Dachzeile</th>
                    <th scope="col">Überschrift</th>
                    <th scope="col">Teasertext</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->teaserbild}}</td>
                        <td>{{$article->dachzeile}}</td>
                        <td>{{$article->ueberschrift}}</td>
                        <td>{{$article->teasertext}}</td>
                        <td class="text-right pr-0">
                            <a href="{{{route('articles.show', $article->id)}}}" class="btn btn-secondary">view</a>
                        </td>
                        <td class="text-right pr-0">
                            <a href="{{{route('articles.edit', $article->id)}}}" class="btn btn-secondary">edit</a>
                        </td>

                        <td class="">
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal">
                                    delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deleting Article</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete this Article?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-danger">Delete Article</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $articles->links() }}
        </div>
    </div>
@endsection
