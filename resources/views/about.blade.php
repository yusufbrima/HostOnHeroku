@extends('layouts.app')

@section('title')
About
@endsection

@section('header')
<x-header data="about" />
@endsection 

@section('navbar')
<x-navbar data="about" />
@endsection

@section('main')
<div class="row">
    <div class="col-sm-4">
      <img src="{{ asset('images/undraw_voting_nvu7.svg') }}" class="img-responsive" />
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
@endsection