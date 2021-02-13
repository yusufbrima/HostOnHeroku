<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ env('APP_NAME') }}::Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @include("components.styles");
</head>
<body>

<x-header data="users" />

<x-navbar data="users" />

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <img src="{{ asset('images/undraw_voting_nvu7.svg') }}" class="img-responsive" />
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>
        @if(isset($user))
          @foreach($user as $usr)
                Hello {{ $usr }} <br />
          @endforeach
        @endif

        <!-- @for($i = 0; $i <= 10; $i++)
          Hello {{ $i }} <br />
        @endfor -->
      </p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<x-footer>

</x-footer>
@csrf
</body>
<script>
  var data =  @json($user);
  console.log(data);
</script>
</html>
