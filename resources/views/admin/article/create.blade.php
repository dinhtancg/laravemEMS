@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if ($article)
                            <h3>Edit Article</h3>
                        @else
                            <h3>Create Article</h3>
                        @endif
                    </div>

                    <div class="panel-body">
                        <form method="post" action="{{ route('admin.article.createArticle') }}">
                            {{ csrf_field() }}
                            @if ($article)
                                <input type="hidden" name="id" value="{{ $article->id }}" />
                            @endif
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name ="category">
                                    {!! $categoriesHtml !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name = "title" rows="1" value="{{ $article ? old('title', $article->title) : old('title', '') }}">
                                @if ($errors->has('title'))
                                    <p class="text-danger">{{ $errors->first('title')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="img-thumbnail">Image thumbnail</label>
                                <input type="file" id="img-thumbnail" name="thumbnail" value="">
                                @if ($article)
                                    <img src="{{ asset($article->thumbnail) }}" alt="" width="200px" height="200px">
                                @endif
                                @if ($errors->has('thumbnail'))
                                    <p class="text-danger">{{ $errors->first('thumbnail')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" rows="5" id="content-ckeditor" name = "content"> {{ $article ? old('content', $article->content) : old('content', '') }}</textarea>
                                @if ($errors->has('content'))
                                    <p class="text-danger">{{ $errors->first('content')}}</p>
                                @endif
                            </div>
                            @can('confirm-article')
                            <div class="form-group">
                                <label for="confirm">Confirm</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="confirm" value= true {{ !$article || old('confirm', $article->confirmed) == true ? 'checked' : '' }}>
                                    Comfirm
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="confirm" value="false" {{ $article && old('confirm', $article->confirmed) == false ? 'checked' : '' }}>
                                    Unconfirm
                                </div>
                            </div>
                            @endcan
                            @can('publish-article')
                                <div class="form-group">
                                    <label for="publish">Publish</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publish" value= true {{ !$article || old('confirm', $article->published) == true ? 'checked' : '' }}>
                                        Publish
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="publish" value=false {{ $article && old('confirm', $article->published) == false ? 'checked' : '' }}>
                                        Unpublish
                                    </div>
                                </div>
                            @endcan
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection