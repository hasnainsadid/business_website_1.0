<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="{{asset('')}}assets/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{url('/')}}" class="nav-item nav-link {{request()->is('/') ? 'active' : ''}}">Home</a>
            <a href="{{url('/about')}}" class="nav-item nav-link {{request()->is('about') ? 'active' : ''}}">About</a>
            <a href="{{url('/service')}}" class="nav-item nav-link {{request()->is('service') ? 'active' : ''}}">Service</a>
            <a href="{{url('/project')}}" class="nav-item nav-link {{request()->is('project') ? 'active' : ''}}">Project</a>
            <a href="{{url('/team')}}" class="nav-item nav-link {{request()->is('team') ? 'active' : ''}}">Team</a>
            <a href="{{url('/contact')}}" class="nav-item nav-link {{request()->is('contact') ? 'active' : ''}}">Contact</a>
        </div>
        <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>