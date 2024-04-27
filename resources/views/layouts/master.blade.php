<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta property="og:url" content="" />
                <meta name="description" content="We know the beauty in code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills." />
                <meta name="keywords" content="Codelto technology, it company,  website developing, ios developing, android developing, gaming company, game development company in india, it company india, top 100 it company in india" />
                <meta property="og:title" content="Codelto Technology" />
                <meta property="og:image" content="" />
                <meta property="og:site_name" content="Codelto Technology" />
                <meta property="og:description" content="now the beauty in code. That's why we are damn good coders. We believe that by applying 100% of our efforts, we are making a difference by delivering best quality products. We are happy to contribute to your Dream Projects with our professional skills." />
                <!-- <title>Cipherhex Technology</title> -->
                <title>@yield('title')</title>
                <!-- Favicon Icon -->
                <link rel="icon" type="image/png" href="{{ $faviconimg_title }}">
                <!-- Bootstrap core CSS -->
                <link href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
                <link href="{{asset ('css/bootstrap.theme.min.css') }}" rel="stylesheet">
                <!-- queries css -->
                <link href="{{asset ('css/queries.min.css') }}" rel="stylesheet">
                <link href="{{asset ('css/ionicons.min.css') }}" rel="stylesheet">
                <!-- Font Awesome -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"> 

                <!-- Owl Stylesheets -->
                <!-- <link rel="stylesheet" href="https://www.cipherhex.com/vendor/owlcarousel/assets/owl.carousel.min.css">
                <link rel="stylesheet" href="https://www.cipherhex.com/vendor/owlcarousel/assets/owl.theme.default.min.css"> -->

                <!-- Animate CSS  -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

                <!-- Custom styles for this template -->
                <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
                <link href="{{ asset ('css/colorswitcher.css') }}" rel="stylesheet">
                
                <!-- google recaptcha -->
                <script src="https://www.google.com/recaptcha/api.js" async defer></script> 

                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117512209-1"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-117512209-1');
                </script>

   </head>
   <body id="page-top">
     <!-- preloader -->
      <div id="preloader" style="">
        <div id="loader" class="spinner">
          <div id="shadow"></div>
          <div id="box"></div>
        </div>
      </div>
     
    @include('layouts.section.header')

        @yield('content')

    @include('layouts.section.footer')    


    <!-- Bootstrap core JavaScript -->
      <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Plugin JavaScript -->
      <script src="https://www.cipherhex.com/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Scrolling Nav JavaScript -->
      <script src="https://www.cipherhex.com/vendor/scrolling-nav/scrolling-nav.js"></script>
      
      
      <!-- animate wow js -->
      <script src="{{ asset ('vendor/animate/wow.min.js') }}"></script>
      <script>
        new WOW().init();
      </script>

      <!-- custom js -->
      <script src="{{ asset ('js/main.js') }}" ></script>
      
      <!--preloader-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
        setTimeout(function(){
          $('#preloader').fadeToggle();
        }, 1500);
      </script>
      
</body>
</html>