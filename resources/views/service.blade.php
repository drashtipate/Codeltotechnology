@extends('layouts.app')
@section('title', 'Services')
@section('content')


<div class="section contact-block" style="padding-bottom:85px;">
        <div class="container"> 
            <div class="col-md-12">
                <h2 class="main_titles_black">
                    <span class="roboto_bold_text">{{ substr($serviceTitle, 0, 10 ) }}</span>{{ substr($serviceTitle , 9 ) }}
                </h2>

                <div class="main_titles_subline">
                        {{ $serviceSubTitle }}
                </div>
            </div>
        </div>
</div>

@endsection