@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all()  as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <h1 class="card-title">Create Post </h1>
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <h3 for="post title">Post title</h3>
                        <input class="form-control form-control-lg" name="title" type="text">
                    </div>
                    <div class="form-group">
                        <h3 for="post-body">Post body</h3>
                        <textarea class="form-control" name="body" id="post-body" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Save Post</button>
                </form>
            </div>
          </div>
    </div>
@endsection