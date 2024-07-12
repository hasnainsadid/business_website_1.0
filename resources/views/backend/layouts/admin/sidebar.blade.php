<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="{{asset('')}}backend/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name"> Admin</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Service</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('services.create')}}">Add New Service</a></li>
            <li><a class="nav-link" href="{{route('services.index')}}">Service list</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Member</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('teams.create')}}">Add New Member</a></li>
            <li><a class="nav-link" href="{{route('teams.index')}}">Member list</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Project</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link"  href="{{route('projects.create')}}">Add Project</a></li>
            <li><a class="nav-link"  href="{{route('projects.index')}}">Project list</a></li>
             
          </ul>
        </li>
        {{-- <li class="menu-header">UI Elements</li> --}}
        
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="shopping-bag"></i><span>Clients</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link"  href="{{route('clients.create')}}">Add new Clients</a></li>
            <li><a class="nav-link"  href="{{route('clients.index')}}">Clients list</a></li>
             
          </ul>
        </li>
        <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Contact</span></a></li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
             
          </ul>
        </li>
      
         
        <li class="menu-header">Pages</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="user-check"></i><span>Auth</span></a>
          <ul class="dropdown-menu">
            <li><a href="auth-login.html">Login</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
            <li><a href="auth-reset-password.html">Reset Password</a></li>
            <li><a href="subscribe.html">Subscribe</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="alert-triangle"></i><span>Errors</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="errors-503.html">503</a></li>
            <li><a class="nav-link" href="errors-403.html">403</a></li>
            <li><a class="nav-link" href="errors-404.html">404</a></li>
            <li><a class="nav-link" href="errors-500.html">500</a></li>
          </ul>
        </li>
         
         
      </ul>
    </aside>
  </div>