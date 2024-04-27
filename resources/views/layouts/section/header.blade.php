<div style="position:relative;">
    <header class="text-white header">
        <div class="home_page_banner">
            <nav class="navbar osahan-navbar navbar-expand-lg navbar-dark" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger logo-codelto" href="http://127.0.0.1:8000/" style="display: block;"><img class="img-fluid" src="{{ $navbarlogo }}" alt="Codelto Technology - White Logo" style="color:black;"></a>
                    <a class="navbar-brand js-scroll-trigger logo-color-codelto" href="http://127.0.0.1:8000/" style="display: none;"><img class="img-fluid" src="{{ $navbarsmallogo }}" alt="Codelto Technology - Logo" style="color:black;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">

                            @forelse($menuitem as $menuitems)    
                                <li class="nav-item selecter-other-page ">
                                    <a class="nav-link js-scroll-trigger {{ request()->is( $menuitems->canonical_url ) ? 'active' : '' }}" href="{{ $menuitems->canonical_url }}" title="{{ $menuitems->title }}">{{ $menuitems->page }}</a>
                                </li>
                                @empty
                                <div class="">
                                    <h5>Menu items not Available</h5>
                                </div>
                            @endforelse 

                            <!-- <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger {{ request()->is('/') ? 'active' : ''}}" href="http://127.0.0.1:8000/" title="Codelto Technology">Home</a>
                            </li>
                            <li class="nav-item selecter-other-page"> 
                                <a class="nav-link js-scroll-trigger {{ request()->is('/services') ? 'active' : ''}}" href="{{ url('/services')}}" title="Services">Services</a>
                            </li>
                            <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger " href="{{ url('/whyus')}}" title="Why Us?">Why Us?</a>
                            </li>
                            <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger " href="{{ url('/testimonials')}}"  title="Testimonials">Testimonials</a>
                            </li>
                            <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger " href="{{ url('/portfolio')}}" href="https://www.cipherhex.com/portfolio" title="Portfolio">Portfolio</a>
                            </li>
                            
                            <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger " href="{{ url('/ourteams')}}" title="Our Team">Our Team</a>
                            </li>
                            <li class="nav-item selecter-other-page">
                                <a class="nav-link js-scroll-trigger {{ request()->is('/contactus') ? 'active' : '' }}" href="{{ url('/contactus')}}" title="Contact Us">Contact Us</a>
                            </li> -->
                        </ul>
                    </div>  

                </div>
            </nav>

            <div class="banner_headings">
                <h1 class="wow animate__animated animate__zoomIn animate__delay-0.5s">
                        {!! nl2br(e($homeHeaderTitle)) !!}

                    <span class="banner_span_text">
                       {!! nl2br(e($homeHeaderTitleBold)) !!}<br> 
                    </span>
                </h1>
                <h2 class="banner_sub_headings wow animate__animated animate__zoomIn animate__delay-1s">
                    {!! nl2br(e(substr($homeHeaderSubTitle, 0 , -14))) !!}<span class="roboto_bold_text">{!! nl2br(e(substr($homeHeaderSubTitle, -14 ))) !!}</span>
                    <br><br>
                    <a href="{{ url('contactus') }}">
                        <button class="get_in_touch_btn  btn-primary btn-lg btn-block">CONTACT US</button>
                    </a>
                </h2>
            </div>
            <img src="{{ $homeHeaderImage }}" class="img-responsive banner_image home-b-img" alt="bannerBg-codelto technology">
        </div>
    </header>
</div> 