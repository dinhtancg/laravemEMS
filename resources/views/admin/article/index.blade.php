@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>Article</h3>
                    </div>

                    <div class="panel-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-success">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div>
                            <a href="{{ route('admin.article.create') }}">
                                <button type="button" class="btn btn-success btn-xs">New Article</button>
                            </a>
                        </div>
                            <table class="table table-striped task-table">
                                <thead>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Confirmed</th>
                                <th>Published</th>
                                <th>Created Time</th>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td class="table-text">
                                            <div> {{ $article->id }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div> {{ $article->title }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div> {{ $article->confirmed }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div> {{ $article->published }}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{$article->created_at}}</div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.article.edit', $article->id) }}">
                                                <button type="button" class="btn btn-primary btn-xs">Edit</button>
                                            </a>
                                            <form class="delete visible-lg-inline-block" action="{{ route('admin.article.destroy', $article->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $articles->render() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
