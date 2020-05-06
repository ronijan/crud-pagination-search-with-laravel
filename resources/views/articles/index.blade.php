@extends('layouts.layout')

@section('content')
            <h3>Alle Artikeln</h3>
            <a href="{{ route('articles.create') }}" class="btn btn-success mb-2">Add New Article</a>
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
                        <td class="text-right">
                            <a href="{{{route('articles.show', $article->id)}}}" class="btn btn-info">view</a>
                        </td>   <td class="text-right">
                            <a href="{{{route('articles.edit', $article->id)}}}" class="btn btn-info">edit</a>
                        </td>

                        <td class="text-right">
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $articles->links() }}
@endsection
