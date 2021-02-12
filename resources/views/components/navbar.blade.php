<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- <a class="navbar-brand" href="/">AppFest</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='welcome') ? 'active' : '' }}}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='services') ? 'active' : '' }}}" href="services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='users') ? 'active' : '' }}}" href="users">Users</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='about') ? 'active' : '' }}}" href="about">About</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link {{{ ($active=='contact') ? 'active' : '' }}}" href="contact">Contact</a>
      </li>   
    </ul>
  </div>  
</nav>