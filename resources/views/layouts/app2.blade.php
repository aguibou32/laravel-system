<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <title>{{config(app.name)}}</title> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <link rel="stylesheet" href={{asset('assets/css/open-iconic-bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/animate.css')}}>
    
    <link rel="stylesheet" href={{asset('assets/css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/magnific-popup.css')}}>

    <link rel="stylesheet" href={{asset('assets/css/aos.css')}}>

    <link rel="stylesheet" href={{asset('assets/css/ionicons.min.css')}}>
    
    <link rel="stylesheet" href={{asset('assets/css/flaticon.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/icomoon.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
  </head>

</html>
<body onload="startTime()">

    <div class="">
        @yield('content')
    </div>
    
    <script src={{asset('assets/js/jquery.min.js')}}></script>
    <script src={{asset('assets/js/jquery-migrate-3.0.1.min.js')}}></script>
    <script src={{asset('assets/js/popper.min.js')}}></script>
    <script src={{asset('assets/js/bootstrap.min.js')}}></script>
    <script src={{asset('assets/js/jquery.easing.1.3.js')}}></script>
    <script src={{asset('assets/js/jquery.waypoints.min.js')}}></script>
    <script src={{asset('assets/js/jquery.stellar.min.js')}}></script>
    <script src={{asset('assets/js/owl.carousel.min.js')}}></script>
    <script src={{asset('assets/js/jquery.magnific-popup.min.js')}}></script>
    <script src={{asset('assets/js/aos.js')}}></script>
    <script src={{asset('assets/js/jquery.animateNumber.min.js')}}></script>
    <script src={{asset('assets/js/scrollax.min.js')}}></script>
    <script src={{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}></script>
    <script src={{asset('assets/js/google-map.js')}}></script>
    <script src={{asset('assets/js/main.js')}}></script>

    <script src="https://use.fontawesome.com/f52edd1b76.js"></script>

    <script>
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }
      </script>
</body>



