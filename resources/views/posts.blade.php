@extends('layouts.app')

@section('title')
Posts
@endsection

@section('header')
<x-header data="posts" />
@endsection

@section('navbar')
<x-navbar data="posts" />
@endsection

@section('main')
<div class="row">
          @foreach($posts as $post)
          <div class="col-sm-8">
                <h5>{{ $post->title  }}   {{  $post->created_at }} </h5>
                <div class="fakeimg">Fake Image</div>
                <p>{{{  $post->body }}} </p>
                <footer> PID {{ $post->id }}</footer>
            </div>
          @endforeach
  </div>
@endsection
