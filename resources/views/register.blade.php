<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ env('APP_NAME') }}::Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @include("components.styles");
</head>
<body>

<x-header data="register" />

<x-navbar data="register" />

<div class="container" style="margin-top:30px">
<div class="row">
    <div class="col-md-6">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend>Create New Account</legend>

            <!-- Name input-->
            <div class="form-group">
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

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
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
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

</div>

<x-footer>

</x-footer>

</body>
</html>
