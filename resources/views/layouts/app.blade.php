<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="/css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @livewire('navigation-menu')

        <main>
            {{ $slot }}
        </main>

        <!--  footer -->
      <footer id="contact">
        <div class="footer">
           <div class="container">
              <div class="row">
                 <div class="col-md-4">
                    <div class="titlepage">
                       <h2>Contact Us</h2>
                    </div>
                 </div>
                 <div class="col-md-8">
                    <ul class="location_icon">
                       <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Colombo 7</li>
                       <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 932332321</li>
                       <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>tango@gmail.com</li>
                    </ul>
                 </div>
                 <div class="col-md-6">
                    <form id="request" class="main_form">
                       <div class="row">
                          <div class="col-md-12 ">
                             <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                          </div>
                          <div class="col-md-12">
                             <input class="contactus" placeholder="Email" type="type" name="Email">
                          </div>
                          <div class="col-md-12">
                             <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                          </div>
                          <div class="col-md-12">
                             <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                          </div>
                          <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                             <button class="send_btn">Send</button>
                          </div>
                          <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                             <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             </ul>
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="col-md-6">
                    <div class="map">
                       <figure><img src="images/map.jpg" alt="#"/></figure>
                    </div>
                    <form class="bottom_form">
                       <h3>Newsletter</h3>
                       <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                       <button class="sub_btn">subscribe</button>
                    </form>
                 </div>
              </div>
           </div>
           <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                       <p>Copyright 2019 All Right Reserved By <a href=""> Tango Car Service</a></p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <!-- end footer -->
     <!-- Javascript files-->
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/jquery-3.0.0.min.js"></script>
     <!-- sidebar -->
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/custom.js"></script>
        @stack('modals')
        @livewireScripts
    </body>
</html>
