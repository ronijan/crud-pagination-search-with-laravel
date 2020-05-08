@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            <h3 class="mb-4">CRUD, Pagination, Search With Laravel</h3>
            <hr>
        </div>
        <div class="col-md-6 float-right">
            <form class="search float-right" action="{{route('search')}}" method="GET">
                @csrf
                <label for="search"></label>
                <input type="text" id="search" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-md-12">
            <h3>All Articles</h3>
            <div class="pb-3 float-right">
                <a href="{{ route('articles.create') }}" class="btn btn-success mb-2">Add New Article</a>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Image</th>
                    <th scope="col">Head</th>
                    <th scope="col">Sub-title</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->author}}</td>
                        <td><img src="{{$article->image}}" width="42px"  height="42px" alt=""></td>
                        <td>{{$article->big_title}}</td>
                        <td>{{$article->sub_title}}</td>
                        <td>{{$article->description}}</td>
                        <td class="text-right pr-0">
                            <a href="{{{route('articles.show', $article->id)}}}" class="btn btn-secondary btn-sm">view</a>
                        </td>
                        <td class="text-right pr-0">
                            <a href="{{{route('articles.edit', $article->id)}}}" class="btn btn-secondary btn-sm">edit</a>
                        </td>

                        <td class="">
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
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
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete Article</button>
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
