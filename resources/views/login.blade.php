@extends('layouts.app')

@section('title')
Login
@endsection

@section('header')
<x-header data="login" />
@endsection 

@section('navbar')
<x-navbar data="login" />
@endsection

@section('main')
<div class="row">
    <div class="col-md-6">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend>Login</legend>

            <!-- Email input-->
            <div class="form-group">
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>

            <!-- password input-->
            <div class="form-group">
              <div class="col-md-9">
                <input id="password" name="password" type="password" placeholder="Your password" class="form-control">
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/undraw_voting_nvu7.svg') }}" class="img-responsive" />
      </div>
</div>
@endsection