<!--Home Section-->
<div id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a href="#" class="navbar-brand" alt="" id="diy3">
            <img class="d-inline-block align-top" src="img/diy4.png" width="80" height="80">
            <span class="diy3text">The Trendy Home Collective</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="navitem">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="navitem">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="navitem">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="navitem">
                    <a href="#clients" class="nav-link">Clients</a>
                </li>
                <li class="navitem">
                    <a href="#contact" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Start Landing Page-->
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner">

            </div>
        </div>
    </div>

    <div id="wrapper" class="caption text-center">
        <h1>The Trendy Home Collective</h1>
        <h3>For the love of DIY</h3>
        <a href="#projects" class="btn btn-outline-light btn-lg">Previous Projects</a>
    </div>
    <!--End Landing Page-->
    @if (session()->has('flash.message'))
        <div class="alert alert-{{ session('flash.class') }}">
            {{ session('flash.message') }}
        </div>
    @endif
</div>
<!--End Home Section-->
