@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')


<div class="section contact-block" style="padding-bottom:85px;">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main_titles_black">
                <span class="roboto_bold_text">{{ substr($contactusTitle, 0, strpos($contactusTitle, ' ')) }}</span>{{ substr($contactusTitle, strpos($contactusTitle, ' ')) }}
            </h2>

            <div class="main_titles_subline" style="padding: 3px 20px;">
                {{ $contactusSubTitle1 }}
            </div>
        </div>

        <div class="product_container inner_section">
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ url('/contactus')}}" method="post" enctype="multipart/form-data"  id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="control-group form-group col-md-6">
                                    <div class="controls">
                                        <input type="text" placeholder="Full Name" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
                                            
                                    </div>
                                </div>
                                <div class="control-group form-group col-md-6">
                                    <div class="controls">
                                        <input type="email" placeholder="Email Address"  class="form-control" id="contact_email" name="contact_email" value="{{ old('contact_email') }}">
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" placeholder="Subject" class="form-control" id="contact_subject" name="contact_subject" value="{{ old('contact_subject') }}">

                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="contact_message" name="contact_message"  maxlength="999" style="resize:none"></textarea>
                                        
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="g-recaptcha" data-sitekey="6Lc4O3QnAAAAAGi67d9BVRgC_Grsv9y4yC07LER5" name="g-recaptcha-response"></div>
                                        
                            </div>

                                @foreach (['danger', 'success'] as $status)
	                                @if(Session::has($status))
	                                    <p class="alert alert-{{$status}}">{{ Session::get($status) }}
                                            <button type="button" class="close" data-dismiss="alert" style="border:none; outline:none;">×</button> 
                                        </p>
	                                @endif
	                            @endforeach

                            <button type="submit"  class="btn btn-primary btn-lg btn-block">{{__('CONTACT US')}}</button>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <!-- <div class="section-title text-left">
                            <h2>Our Office</h2>
                        </div> -->
                        <div class="contact-footer sidebar-widget">
                            <ul>
                                <li><a href="{{ $contactusAddressLink }}"><i class="fa fa-compass "></i> {{ $contactusAddress }}</a></li>
                                <li><a href="tel:{{ str_replace(' ', '', $contactusMobileno1) }}"><i class="fa fa-mobile"></i> {{ $contactusMobileno1 }}</a>
                                    <a href="tel:{{ str_replace(' ', '', $contactusMobileno2) }}"><i class="fa fa-mobile"></i> {{ $contactusMobileno2 }}</a>
                                </li>
                                <li><a href="mailto:{{ $contactusEmail }}"><i class="fa fa-envelope-open"></i> {{ $contactusEmail }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection