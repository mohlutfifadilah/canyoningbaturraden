<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('logo.png') }}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) === null ? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item {{ Request::segment(1) === 'package-tour' ? 'active' : '' }}"><a class="nav-link" href="/package-tour">Package Tour</a></li>
                <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : '' }}"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item {{ Request::segment(1) === 'faqs' ? 'active' : '' }}"><a class="nav-link" href="/faqs">FAQ's</a></li>
                <li class="nav-item {{ Request::segment(1) === '/contact' ? 'active' : '' }}"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
