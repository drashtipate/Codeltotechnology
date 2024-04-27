<div style="position:relative;">
    <header class="text-white header">
        <div class="home_page_banner">
            <nav class="navbar osahan-navbar mainNavbar navbar-expand-lg navbar-dark" id="mainNavbar">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger logo-codelto" href="http://127.0.0.1:8000/" style="display: block;"><img class="img-fluid" src="{{ $navbarlogo }}" alt="Codelto Technology - White Logo" style="color:black;"></a>
                    <a class="navbar-brand js-scroll-trigger logo-color-codelto" href="http://127.0.0.1:8000/" style="display: none;"><img class="img-fluid" src="{{ $navbarsmallogo }}" alt="Codelto Technology - Logo" style="color:black;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">

                            @forelse($menuitem as $menuitems)    
                                <li class="nav-item selecter-other-page">
                                    <a class="nav-link js-scroll-trigger {{ request()->is( $menuitems->canonical_url ) ? 'active' : '' }}" href="{{ $menuitems->canonical_url }}" title="{{ $menuitems->title }}">{{ $menuitems->page }}</a>
                                </li>
                                @empty
                                <div class="">
                                    <h5>No menu items Available</h5>
                                </div>
                            @endforelse 
                            <!-- <li class="nav-item selecter-other-page">
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
                                <a class="nav-link js-scroll-trigger {{ request()->is('/contactus') ? 'active' : '' }}"  href="{{ url('/contactus')}}" title="Contact Us">Contact Us</a>
                            </li> -->
                        </ul>
                    </div>  

                </div>
            </nav>
        </div>
    </header>
</div>