
<section class="section footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 single-footer mb-4">
                    <h6>{{ $footerHeaderName1 }}</h6>
                    <ul>
                        @forelse($technology as $technologies)
                            <li><a href="{{ $technologies->url_links }}" title="{{ $technologies->technology_name }}" class="footer-li-a">{{ $technologies->technology_name }}</a></li>
                            @empty
                            <h4 class="">Technology not Available.</h4>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 single-footer">
                    <h6>{{ $footerHeaderName2 }}</h6>
                    <ul>
                        @forelse($link as $links)
                            <li><a href="{{ $links->url_links }}" title="{{ $links->title }}">{{ $links->link_name }}</a></li>
                            @empty
                            <h4 class="">links not Available.</h4>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-6 col-xs-6">
                    <h6>&nbsp;</h6>
                    <ul>
                        <li><a href="{{url ('contactus')}}" title="Contact Us">Contact Us</a></li>
                        <li><a href="#" title="Privacy Policy">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6 contact-footer single-footer mb-4">
                    <h6>{{ $footerHeaderName3 }}</h6>
                    <ul>
                        <li><a href="{{ $contactusAddressLink }}" target="_blank"><i class="fa fa-compass "></i> {!! nl2br(e($contactusAddress)) !!}</a></li>
                        <li><a href="tel:{{ str_replace(' ', '', $contactusMobileno1) }}"><i class="fa fa-mobile"></i>  {{ $contactusMobileno1 }}</a>
                            <a href="tel:{{ str_replace(' ', '', $contactusMobileno2) }}">  {{ $contactusMobileno2 }}</a>
                        </li>
                        <li><a href="mailto:{{ $contactusEmail }}"><i class="fa fa-envelope-open"></i> {{ $contactusEmail }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="py-5 text-center">
         <div class="container">
            <div class="social-icons mb-3">
                <a href="{{ $FacebookLink }}" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="{{ $linkedInLink }}" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="{{ $YoutubeLink }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
            </div>
            <p class="mt-0 mb-0">{{ $footerCopyright }}</p>
         </div>
    </footer>
</section>
    
<!-- color switcher -->
    <div class="color-switcher">
        <div class="switcher-btn">
            <i class="fa fa-cog"></i>
        </div>

        <h3>Select your color</h3>
        <div class="theme-buttons-container">
            <span class="theme-buttons" data-color="#ff805d" style="background: #ff805d;"></span>
            <span class="theme-buttons" data-color="#06ba63" style="background: #06ba63;"></span>
            <span class="theme-buttons" data-color="#f4b942" style="background: #f4b942;"></span>
            <span class="theme-buttons" data-color="#3083dc" style="background: #3083dc;"></span>
            <span class="theme-buttons" data-color="#49c6e5" style="background: #49c6e5;"></span>
            <span class="theme-buttons" data-color="#8850f8" style="background: #8850f8;"></span>
            <span class="theme-buttons" data-color="#052c71" style="background: #052c71;"></span>
            <span class="theme-buttons" data-color="#8BC34A" style="background: #8BC34A;"></span>
            <span class="theme-buttons" data-color="#7b1c00" style="background: #7b1c00;"></span>
        </div>        
    </div>

<!-- Back to Top -->
<div class="top-back">
    <a href="#" class="btn-top btn-lg btn-primary btn-lg-square back-to-top"><i class="fas fa-arrow-up arrow-up"></i></a>
</div>