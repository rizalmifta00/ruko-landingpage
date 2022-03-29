<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png">
    <title>Rumah Korea</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{asset('frontend/template/css/add.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/vendors/nice-select/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/vendors/fancybox/css/fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/template/vendors/fancybox/css/fancybox.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/template/css/style.css')}}" />
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6040d9d11c1c2a130d64e179/1evul5nll';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    @include('layout.front.header')
    <!--================ End Header Menu Area =================-->

    @yield('content')

    <!--================ Start footer Area  =================-->
    @include('layout.front.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/template/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/template/js/popper.js')}}"></script>
    <script src="{{asset('frontend/template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/template/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('frontend/template/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{asset('frontend/template/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/template/js/mail-script.js')}}"></script>
    <script src="{{asset('frontend/template/vendors/fancybox/js/fancybox.js')}}"></script>
    <script src="{{asset('frontend/template/vendors/fancybox/js/fancybox.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{asset('frontend/template/js/gmaps.min.js')}}"></script>
    <script src="{{asset('frontend/template/js/theme.js')}}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @stack('script')
    <script>
     AOS.init({
         once: true,
         
     });
    </script>
    
</body>

</html>
