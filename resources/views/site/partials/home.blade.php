<div class="container">

    <h1><a href="index.html">Narmin Alasova</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    <h2>Analytic minded, Goal-oriented
        <span>BackEnd developer</span>
    </h2>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link active" href="#header">Home</a></li>
            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link" href="#resume">Resume</a></li>
            <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
            <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="social-links">
        @if($about->linkedin != null)
            <a href="{{$about->linkedin}}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        @endif
        @if($about->facebook != null)
            <a href="{{$about->facebook}}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        @endif
        @if($about->instagram != null)
            <a href="{{$about->instagram}}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        @endif
        @if($about->github != null)
            <a href="{{$about->github}}" class="github" target="_blank"><i class="bi bi-github"></i></a>
        @endif
    </div>

</div>
</header><!-- End Header -->
