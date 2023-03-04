<header class="site-header" id="site-header">
    <nav class="navbar navbar-expand-xl" id="site-navbar">
        <div class="container">
            @foreach($logos as $logo)
            <a class="navbar-brand" href="index.html"><img class="img-fluid" src="{{asset($logo->logoimage)}}" alt="fungi logo" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
            </button>
            @endforeach
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    @foreach($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#{{$menu->href}}">{{$menu->menuname}}</a>
                    </li>
                    @endforeach
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#about-section">About</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#portfolio-section">Portfolio</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#service-section">Service</a>--}}
{{--                    </li>--}}
{{--                    <!--		        <li class="nav-item">-->--}}
{{--                    <!--		          <a class="nav-link" href="#testimonial-section">Testimonials</a>-->--}}
{{--                    <!--		        </li>-->--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#blog-section">Blog</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#contact-section">Contact</a>--}}
{{--                    </li>--}}
                </ul> <!-- .navbar-nav -->
            </div> <!-- .collapse -->
        </div> <!-- .container -->
    </nav> <!-- .navbar -->

</header>
