<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- <a class="navbar-brand" href="/">AppFest</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='welcome') ? 'active' : '' }}}" href="{{{  route('index') }}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='services') ? 'active' : '' }}}" href="{{{  route('services') }}}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='posts') ? 'active' : '' }}}" href="{{{  route('posts') }}}">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='users') ? 'active' : '' }}}" href="{{{  route('users') }}}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='about') ? 'active' : '' }}}" href="{{{  route('about') }}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='contact') ? 'active' : '' }}}" href="{{{  route('contact') }}}">Contact</a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
        @if (Auth::check())
          <li class="nav-item">
                <a class="nav-link {{{ ($active=='index') ? 'active' : '' }}}"  href="{{{  route('index') }}}">Hi {{ Auth::user()['name'] }}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{{ ($active=='logout') ? 'active' : '' }}}"  href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                            Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                 </form>
            </li>
        @else

            <li class="nav-item">
                <a class="nav-link {{{ ($active=='login') ? 'active' : '' }}}"  href="{{{  route('login') }}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{{ ($active=='register') ? 'active' : '' }}}"  href="{{{  route('register') }}}">Register</a>
            </li>
        @endif
        </ul>
  </div>

</nav>
