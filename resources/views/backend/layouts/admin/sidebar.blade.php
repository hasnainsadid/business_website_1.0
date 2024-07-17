<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="{{asset('')}}backend/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Admin</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="dropdown {{request()->is('admin/dashboard') ? 'active' :''}}">
          <a href="{{route('dashboard.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown {{request()->is('admin/service') ? 'active' :''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Service</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('service.create')}}">Add New Service</a></li>
            <li><a class="nav-link" href="{{route('service.index')}}">Service list</a></li>
          </ul>
        </li>

        <li class="dropdown {{request()->is('admin/category') ? 'active' :''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('category.create')}}">Add New Category</a></li>
            <li><a class="nav-link" href="{{route('category.index')}}">Category list</a></li>
          </ul>
        </li>

        <li class="dropdown {{request()->is('admin/team') ? 'active' :''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Member</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('team.create')}}">Add New Member</a></li>
            <li><a class="nav-link" href="{{route('team.index')}}">Member list</a></li>

          </ul>
        </li>
        <li class="dropdown {{request()->is('admin/project') ? 'active' :''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file"></i><span>Project</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link"  href="{{route('project.create')}}">Add Project</a></li>
            <li><a class="nav-link"  href="{{route('project.index')}}">Project list</a></li>
             
          </ul>
        </li>
        {{-- <li class="menu-header">UI Elements</li> --}}
        
        <li class="dropdown {{request()->is('admin/client') ? 'active' :''}}">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="shopping-bag"></i><span>Clients</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link"  href="{{route('client.create')}}">Add new Clients</a></li>
            <li><a class="nav-link"  href="{{route('client.index')}}">Clients list</a></li>
             
          </ul>
        </li>
        <li class="{{request()->is('admin/contact') ? 'active' :''}}"><a class="nav-link" href="{{route('contact.index')}}"><i data-feather="mail"></i><span>Contact</span></a></li>
      </ul>
    </aside>
  </div>