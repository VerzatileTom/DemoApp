@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Article Form: {{ $article->title }}</div>

                <div class="card-body">
                    <form action="{{ route('articles.update', $article->id) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                            @if ($errors->has('title'))
                                <small class="help-block text-danger">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" rows="5">{{ $article->content }}</textarea>
                            @if ($errors->has('content'))
                                <small class="help-block text-danger">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
