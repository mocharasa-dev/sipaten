<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('meta')
    {{-- <link rel="shortcut icon" href="{{asset('public/assets/favicon.ico')}}" /> --}}
    <!-- loaded Style/CSS/Plugin -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/plugin/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}" />
    @yield('top-resource')
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgb(0, 0, 0);
            opacity: 0.9;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
    <style>
        .sticky-top {
            transition: all 0.25s ease-in;
        }
        /* style for when sitcky is applied */
        .stuck .sticky-top {
            /* background-color: #222 !important; */
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }
    </style>
</head>
<body>
<!-- Preloader --> 
<div class="preloader">
    <div class="loading">
        <img src="{{asset('public/frontend/img/loading.gif')}}" width="250">
        <p class="text-center text-white"><strong>Harap Tunggu</strong></p>
    </div>
</div>

<!-- Search Overlay -->   
<div id="myOverlay" class="overlay-search">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="{{--route('frontend.search')--}}" method="POST">
            {{csrf_field()}}
            <input type="text" placeholder="Cari..." name="keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<div class="wrapper">
    <nav class="navbar navbar-light navbar-expand-md small bg-light justify-content-center shadow-sm py-0 py-sm-0">
        <div class="container">
            <div class="navbar-collapse collapse w-100">
                <ul class="navbar-nav d-flex w-100 mr-auto">
                  <li class="nav-item">
                      <i class="fa fa-clock"></i>&nbsp;{{\Carbon\Carbon::now()->translatedFormat("l, d F Y")}}</label>
                  </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item my-1 py-1">
                        Selamat Datang, <strong>Tamu </strong><i class="fas fa-smile"></i>
                    </li>                    
                </ul>
            </div>
        </div>    
    </nav>    
    @yield('content')
    @include('frontend.layout.footer')
</div>

<!-- Back to top -->
<div class="btn-back-to-top shadow-sm" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <span class="fas fa-angle-up"></span>
    </span>
</div>

<!-- Loaded Script/JS/Plugin -->    
<script src="{{asset('public/frontend/js/jquery-3.5.1.min.js')}}"></script>  
<script src="{{asset('public/frontend/js/bootstrap.bundle.min.js')}}"></script>   
<script src="{{asset('public/frontend/plugin/fontawesome/js/all.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
@yield('bottom-resource')
<!-- tooltip -->
<script>
    $('[data-tooltip="tooltip"]').each(function () {
        var options = {
            html: true
        };
        if ($(this)[0].hasAttribute('data-type')) {
            options['template'] =
                '<div class="tooltip ' + $(this).attr('data-type') + '" role="tooltip">' +
                '	<div class="tooltip-arrow"></div>' +
                '	<div class="tooltip-inner"></div>' +
                '</div>';
        }
        $(this).tooltip(options);
    });
</script>
<!-- search button -->
<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }
    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
<!-- Loader -->
<script>
    $(window).on('load', function () {
        setTimeout(removeLoader, 2000);
    });
    function removeLoader() {
        $(".preloader").fadeOut(500, function () {            
            $(".preloader").remove(); 
        });
    }
</script>
<!-- Nav -->
<script>
    (new IntersectionObserver(function(e,o){
        if (e[0].intersectionRatio > 0){
            document.documentElement.removeAttribute('class');
        } else {
            document.documentElement.setAttribute('class','stuck');
        };
    })).observe(document.querySelector('.trigger'));    
</script>
<!-- WOW -->
<script>
    new WOW().init();
</script>  
<!-- Back to top -->
<script>
try {
    var windowH = $(window).height()/2;
    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").addClass('show-btn-back-to-top');
        } else {
            $("#myBtn").removeClass('show-btn-back-to-top');
        }
    });
    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });
} catch(er) {console.log(er);}
</script>
</body>
</html>
