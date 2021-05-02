@extends('layouts.app')
@section('css')
<link href="{{ asset('css/posts.css') }}" rel="stylesheet">
@endsection
@section('content')

@foreach ($posts as $post)
<div class="card border-secondary mb-3">
    <div class="card-header">{{ $post->title }}</div>
    <div class="card-body text-secondary">
      {{-- <h5 class="card-title">Secondary card title</h5> --}}
      <p class="card-text">{{ $post->body }}</p>
      <div class="card-footer post-footer">
          <a href="{{ route('posts.show',['post' => $post->id ]) }}" class="card-link d-inline-flex ">
            <span class="material-icons mr-1">
                visibility
            </span>
            <p>View</p> 
           </a>
          <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="card-link d-inline-flex ">
            <span class="material-icons mr-1">
                edit
            </span>
            <p>Edit</p> 
           </a>
          <a href="{{ route('posts.destroy',['post' => $post->id ]) }}" class="card-link d-inline-flex ">
            <span class="material-icons text-danger mr-1">
                delete
            </span>
            <p class="text-danger">Delete</p> 
           </a>
      </div>
    </div>
  </div>
@endforeach
    
@endsection