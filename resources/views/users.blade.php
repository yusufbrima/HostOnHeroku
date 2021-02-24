@extends('layouts.app')

@section('title')
Users
@endsection

@section('header')
<x-header data="users" />
@endsection 

@section('navbar')
<x-navbar data="users" />
@endsection

@section('main')
<div class="row">
    <div class="col-sm-4">
      <img src="{{ asset('images/undraw_voting_nvu7.svg') }}" class="img-responsive" />
    </div>
    <div class="col-sm-8">
        @if($users)
          <table class="table">
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Joined Since</th>
            </tr>
            @foreach($users as $user)
               <tr> 
                   <td> {{ $user->name }} </td>
                   <td>  {{ $user->email  }} </td>
                   <td>  {{ $user->created_at  }} </td>
               </tr>

            @endforeach
            </table>
        @endif 
    </div>
  </div>
@endsection