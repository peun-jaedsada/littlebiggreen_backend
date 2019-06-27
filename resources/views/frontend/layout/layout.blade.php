
<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <title>little big green คือใคร... ไปดูกัน!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('frontend/images/img/favicon.png')}}" rel="icon">
    <link href="{{asset('frontend/images/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sarabun:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('frontend/themes/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('frontend/themes/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/themes/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/themes/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/themes/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/themes/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"> -->

    <!-- Main Stylesheet File -->
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">

    <!-- =======================================================
        Theme Name: NewBiz
        Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    ======================================================= -->
    </head>
    <body>
    <header id="header" class="flix-menu ">
      <nav class="navbar navbar-expand-lg bg-white">
          <a class="navbar-brand logo" id="littleBigGreenLogo" title="little big green – AS GREEN AS YOU CAN แค่คิดก็กรีนแล้ว" href="{{url('/')}}">
            <img class="w-100 d-lg-block d-none" src="{{asset('frontend/images/Logo/Logo.png')}}" alt="little big green Logo">
            <img class="w-100 d-lg-none" src="{{asset('frontend/images/Logo/logo-mobile.png')}}" alt="little big green Logo">
          </a>
          <button class="navbar-toggler" type="button" id="NavMenuBtn">
            <img src="{{asset('frontend/images/icon/navbar-icon.png')}}" alt="navbar-icon">
          </button>
          <div class="container mr-unset">
            <div class="collapse navbar-collapse" id="NavMenu">
              <div class="navmenu-smlogo-icon">
                <a class="logo-white" id="littleBigGreenLogo" title="little big green – AS GREEN AS YOU CAN แค่คิดก็กรีนแล้ว" href="{{url('/')}}">
                  <img class="w-100" src="{{asset('frontend/images/Logo/Logo-white.png')}}" alt="Logo">
                </a>
                <a id="MenuClose"><i class="fa fa-times" aria-hidden="true"></i></a>
              </div>
              <ul class="navbar-nav ml-auto nav-position">
                <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('/')) ? 'active' : '' }}" id="homepageTopNavLink" title="little big green – AS GREEN AS YOU CAN" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('about_us')) ? 'active' : '' }}" id="whatLittleBigGreenTopNavLink" title="little big green คืออะไร" href="{{url('about_us')}}">What is little big green</a>
                </li>
                <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('video')) ? 'active' : '' }}" id="videoTopNavLink" title="little big green คืออะไร" href="{{url('video')}}">VDO</a>
                </li>
                {{-- <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('activities')) ? 'active' : '' }}" id="activitiesTopNavLink" title="กิจกรรม งานอีเว้นท์ ของ little big green" href="{{url('activities')}}">Activities</a>
                </li>   --}}
                <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('blog')) ? 'active' : '' }}" id="blogTopNavLink" title="บทความของ little big green" href="{{url('blog')}}">Blog</a>
                </li>  
                {{-- <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color" href="#" id="bigGreenFriendTopNavLink" title="Big Green Friend - Marketplace สำหรับคนกรีนๆ">Big Green Friend</a>
                </li>   --}}
                <li class="nav-item nav-menu-item">
                  <a class="nav-link nav-color {{ (request()->is('contact')) ? 'active' : '' }}" id="contactTopNavLink" title="ติดต่อและพูดคุยกับเรา little big green" href="{{url('contact')}}">Contact</a>
                </li>      
              </ul>
              <div class="d-flex">
                <a class="icon-facebook mx-1" href="#" id="facebookTopNavLink" title="Facebook page - little big green"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="icon-ig mx-1" href="#" id="instagramTopNavLink" title="Instagram - little big green"
                ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="icon-youtube mx-1" href="#" id="youTubeTopNavLink" title="YouTube - little big green"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>
            </div> 
          </div>
        
      </nav>
    </header><!-- #header -->


    @yield('content')




  <!--==========================
    Footer
  ============================-->
  <section class="py-5">
      <div class="container">
        <div class="home-title text-center mb-3">
          <h2>Subscribe</h2>
          <p>Lorem Ipsum is simply dummy text .</p>
          <form action="{{ route('customer.save') }}" method="post">
            @csrf
            <div class="subscribe-input-width">
              <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control subscribe-input" placeholder="Your email">
                  <div class="input-group-append">
                    <button class="btn subscribe-btn" type="submit">Subscribe</button> 
                  </div>
                </div>
            </div>
          </form>
          <div class="social-subscribe">
            <a class="icon-facebook mx-1" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="icon-ig mx-1" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="icon-youtube mx-1" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
  </section>
  <footer class="py-5" id="footer">
    <div class="container">
      <!-- <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about_us')}}">What is little big green</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('video')}}">VDO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('activities')}}">Activities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('blog')}}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Big Green Friend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
      <hr> -->
      <div class="text-center footer-content">
        <span>Little Big Green is a non-profit project powered by The Flight 19 Agency. Feel free to share our content to spread our belief of <br> "as green as you can".
          </span>
      </div>
    </div>
  </footer><!-- #footer -->
    
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('frontend/themes/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/themes/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('frontend/vendor/contactform/contactform.js')}}"></script>
  <script src="{{asset('frontend/vendor/social-share-buttons-c/dist/jquery.c-share.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>
    @if(session()->has('message'))
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Save Success',
          showConfirmButton: false,
          timer: 1500
        })
    @endif
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();    
        if (scroll >= 20) {
            $("#header").addClass("fixed-top");
            $(".logo").addClass("logo-scoll");
            // $(".navbar-collapse").addClass("navbar-collapse-11");
        }
        else if (scroll < 20) {
          $("#header").removeClass("fixed-top");
          $(".logo").removeClass("logo-scoll");
          // $(".navbar-collapse").removeClass("navbar-collapse-11");
        } 
    });

  </script>
  <script>
        //  hljs.initHighlightingOnLoad();
         $('#shareBlock').cShare({
            description: 'jQuery plugin - C Share buttons...',
            showButtons: [
                'fb',
                'twitter',
                'line',
                'gPlus',
            ]
        });
        $("#NavMenuBtn").click(function(){
          $("#NavMenu").toggle(200);
        });
        $("#MenuClose").click(function(){
          $("#NavMenu").css("display", "none");
        });
    </script>
    @stack('js')
    </body>
</html>


