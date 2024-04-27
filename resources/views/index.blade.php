@extends('layouts.master')
@section('title', 'Codelto Technology')
@section('content')


<!--great game section  -->
<div class="section" style="padding-bottom:85px;">
    <div class="container">
        
        <div class="col-md-12">
            <h2 class="main_titles_black">
                <!-- <span class="roboto_bold_text"> {{ $aboutTitle }} </span> -->
                <span class="roboto_bold_text">{{ substr($aboutTitle, 0, 10 ) }}</span>{{ substr($aboutTitle , 9 ) }}
            </h2>

            <div class="main_titles_subline">
                {{ $aboutSubTitle }}
            </div>
        </div>
            
        <div class="product_container inner_section">
            <div class="row">
                @forelse ($about as $abouttype)
                    <div class="col-md-4 col-sm-6 sections pt-5 text-center wow animate__animated animate__fadeInUp">
                        <img src="{{ asset($abouttype->icon) }}" alt="{{$abouttype->name}}">
                        <h4 class="product_headings" style="font-size:120%;">
                            {{$abouttype->id}}.  {{$abouttype->name}}
                        </h4>
                        <h6 class="product_details">
                            <p style="font-size:20px; margin-bottom:22px;">
                                {{$abouttype->description}}
                            </p>
                        </h6>
                    </div>
                    @empty
                    <div class="">
                        <h5>About/why us not Available</h5>
                    </div>
                @endforelse       
                <!-- <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/conceptuation.png')}}">
                    <h4 class="product_headings">
                            1. Conceptualization
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            Jointly, we dissect your concept and figure out what to get out of the game.
                        </p>
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/requirement_finalization.png')}}">
                    <h4 class="product_headings">
                            2.  Requirement Finalization
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            Next, we draw outlines and agree upon what the final game should look like.
                        </p>
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/milestone_creation.png')}}">
                    <h4 class="product_headings">
                            3. Milestone Creation
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            Now, we jointly set up milestones. Milestones benchmark the game's progress.
                        </p>
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/design_development.png')}}">
                    <h4 class="product_headings">
                            4. Design & Development
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            Armed with the inputs, our team swiftly swings into action. The Embryo stage.
                        </p>
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/qa_testing.png')}}">
                    <h4 class="product_headings">
                            5. QA & Testing
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            The no-mercy, zero-tolerance stage. We check for all possible areas of improvements.
                        </p>
                    </h6>
                </div>
                <div class="col-md-4 col-sm-6 sections pt-4 text-center">
                    <img src="{{asset ('img/final_delivery.png')}}">
                    <h4 class="product_headings">
                            6. Final Delivery
                    </h4>
                    <h6 class="product_details">
                        <p style="font-size:20px; margin-bottom:22px;">
                            Without any compromises anywhere, we stick to the "In time. Every time." rule.
                        </p>
                    </h6>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- services section  -->
<div class="section section-service service-main">
    <!-- <div class="container"> -->

        <div class="container">
            <div class="col-md-12">
                <h2 class="main_titles_white" style="color:#fff;">
                    <span class="roboto_bold_text">{{ substr($serviceTitle, 0, 10 ) }}</span>{{ substr($serviceTitle , 9 ) }}
                </h2>

                <div class="main_titles_subline">
                        {{ $serviceSubTitle }}
                </div>
            </div>
        </div>


        <div class="product_container inner_section">
            <!-- <div class="container"> -->
            <div class="container-service-right"> 
                <div class="row blue-back-img">

                        <div class="col-lg-7 col-md-12 col-sm-12">  

                            <div class="d-flex blue-back-content wow animate__animated animate__fadeInLeft animate__delay-0.5s">
                                    <div class="num-img-top">
                                        <!-- <img src="{{asset ('img/UD_ServiceCountNo01.png')}}"> -->
                                        <h1 class="display-1 mt-n2 m-0" style="color:#80898f;">1</h1> 
                                    </div>
                                    <div class="num-content">
                                        <h4>
                                           {{ $serviceName1 }}
                                        </h4>
                                        <p>
                                           {{ $serviceDescription1 }}
                                        </p>
                                    </div>
                            </div>

                            <div class="d-flex blue-back-content wow animate__animated animate__fadeInLeft animate__delay-1s">
                                <div class="num-img-top">
                                    <!-- <img src="{{asset ('img/UD_ServiceCountNo02.png')}}"> -->
                                    <h1 class="display-1 mt-n2 m-0" style="color:#80898f;">2</h1> 
                                </div>
                                <div class="num-content">
                                    <h4>
                                        {{ $serviceName2 }}
                                    </h4>
                                    <p>
                                        {{ $serviceDescription2 }}
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="blue-back-img-right">
                                <img src="{{ $serviceimageright }}" class="wow animate__animated animate__fadeInUp animate__delay-1s" alt="game development">
                            </div>
                        </div>
                </div>
            </div> 
            <!-- </div> -->

            <div class="container-service-left">
                <div class="row blue-back-img">
  
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="green-back-img-left">
                            <img src="{{ $serviceimageleft }}" class="wow animate__animated animate__fadeInUp  animate__delay-1s" alt="game development">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 col-sm-12">

                            <div class="d-flex blue-back-content wow animate__animated animate__fadeInRight animate__delay-1.7s">
                                <div class="num-img-top">
                                    <!-- <img src="{{asset ('img/UD_ServiceCountNo03.png')}}"> -->
                                    <h1 class="display-1 mt-n2 m-0" style="color:#80898f;">3</h1>
                                </div>
                                <div class="num-content">
                                    <h4>
                                        {{ $serviceName3 }}
                                    </h4>
                                    <p>
                                        {{ $serviceDescription3 }}
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex blue-back-content wow animate__animated animate__fadeInRight animate__delay-2.7s">
                                <div class="num-img-top">
                                    <!-- <img src="{{asset ('img/UD_ServiceCountNo03.png')}}"> -->
                                    <h1 class="display-1 mt-n2 m-0" style="color:#80898f;">4</h1>
                                </div>
                                <div class="num-content">
                                    <h4>
                                        {{ $serviceName4 }}
                                    </h4>
                                    <p>
                                        {{ $serviceDescription4 }}
                                    </p>
                                </div>
                            </div>

                    </div>
                </div>               
            </div>
        </div>

    </div>
</div>


<!-- strong numbers -->
<div class="section bg-primary" id="why-us">
    <div class="container">
        <div class="col-md-12">
            <h2 class="section-title  text-center" style="color: #2b414f;">
                <span class="roboto_bold_text">Our Strong</span> 
                Numbers
            </h2>
        </div>
        
        <div class="product_container inner_section ">
            <div class="row">

                @forelse($statsdata as $statsdatas)
                    <div class="col-md-3">
                        <div class="why-us-item text-center wow animate__animated animate__fadeInUp" style="color: #2b414f;">
                            <i class="{{ $statsdatas->icon_img }}"></i>
                            <h1 class=" mt-3 mb-0">{{ $statsdatas->stats_number	}}</h1>
                            <p class=" mb-0">{{ $statsdatas->stats_name }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="">
                        <h5>Stats not Available</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>


<!-- our clients  -->
<div class="section" style="padding-bottom:85px;">
    <div class="container">

        <div class="col-md-12">
            <h2 class="main_titles_black">
                {{ substr($OurclientsTitle , 0, -8 ) }}<span class="roboto_bold_text">{{ substr($OurclientsTitle, 11) }}</span>
            </h2>

            <div class="main_titles_subline">
                {{ $OurclientsSubTitle}}
            </div>
        </div>

        <div class="product_container inner_section">
            <div class="row">
                @forelse ($client as $clienttype)
                    <div class="col-md-4 col-sm-6 pt-3 sections">
                        <img src="{{asset ($clienttype->image)}}" alt="{{$clienttype->name}}" class="wow animate__animated animate__fadeInUp">
                        <h4 class="product_headings wow animate__animated animate__fadeInUp" style=" text-align: left;">
                           {{$clienttype->name}}
                        </h4>
                        <h6 class="product_details wow animate__animated animate__fadeInUp">
                            <p style="font-size:20px; margin-bottom:22px;">
                                <b>
                                    {!! nl2br(e($clienttype->content)) !!}<br> 
                                    
                                </b><br/>
                                    {{$clienttype->description}}
                            </p>
                            <a href=""  class="product_details_link" style="position:relative;">Learn More...</a>
                        </h6>
                    </div>  
                    @empty
                    <div class="">
                        <h5>Our clients not Available.</h5>
                    </div>
                @endforelse
               
            </div>
        </div>

    </div>
</div>


<!-- contactus section -->
<div class="section section-service" style="padding-bottom:85px;">
    <div class="container">
        <div class="col-md-12">
            <h2 class="main_titles_white">
                <span class="roboto_bold_text">{{ substr($contactusTitle, 0, strpos($contactusTitle, ' ')) }}</span>{{ substr($contactusTitle, strpos($contactusTitle, ' ')) }}
            </h2>

            <div class="main_titles_subline">
               {{ $contactusSubTitle }}
            </div>
        </div>

        <div class="product_container inner_section">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="container">
                            <div class="row">
                                <div class="col-sm-3 text-white card-title">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{__('Address') }} :
                                </div>
                                <div class="col-sm-9 text-white card-title">
                                    {{ $contactusAddress }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3 text-white card-title">
                                    <i class="fas fa-phone"></i>
                                    {{__('Phone') }} :                                                                 
                                </div>
                                <div class="col-sm-9 text-white card-title">
                                    {{ $contactusMobileno1 }}
                                    {{ $contactusMobileno2 }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3 text-white card-title">
                                    <i class="fas fa-envelope"></i>
                                    {{__('Email') }} :
                                </div>
                                <div class="col-sm-9 text-white card-title">
                                    {{ $contactusEmail }}
                                </div> 
                            </div>
                    </div>
                </div>

                <div class="col-md-6 mx-auto">
                    <form  action="{{ url('/contactus')}}" method="post"  enctype="multipart/form-data" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="control-group form-group col-md-6">
                                <div class="controls">
                                    <input type="text" placeholder="Full Name" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}" required>
                                    <!-- @error('contact_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror -->
                                </div>
                            </div>

                            <div class="control-group form-group col-md-6">
                                <div class="controls">
                                    <input type="email" placeholder="Email Address" id="contact_email" class="form-control" name="contact_email" value="{{ old('contact_email') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" placeholder="Subject" class="form-control" id="contact_subject" name="contact_subject" value="{{ old('contact_subject') }}" required>
                                <!-- <p class="help-block"></p> -->
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="contact_message" name="contact_message" required maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="g-recaptcha" data-sitekey="6Lc4O3QnAAAAAGi67d9BVRgC_Grsv9y4yC07LER5"></div>
                        </div>
                        <!-- <div class="control-group form-group">
                            {!! RecaptchaV3::field('contact-us') !!}
                            @error('g-recaptcha-response')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                    
                            @foreach (['danger', 'success'] as $status)
	                            @if(Session::has($status))
	                                <p class="alert alert-{{$status}}">{{ Session::get($status) }}
                                        <button type="button" class="close" data-dismiss="alert" style="border:none; outline:none;">×</button> 
                                    </p>
	                            @endif
	                        @endforeach

                        <button type="submit" id="submit"  class="btn btn-primary btn-lg btn-block">{{__('SEND FEEDBACK') }}</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

