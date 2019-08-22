<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>{{ $title }}</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/magnific-popup.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="/css/tooplate-style.css">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>


<!-- HOME SECTION -->
<section id="home" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-5 col-md-7 col-sm-12">
                    <div class="home-thumb">
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">{{ $title }}</h1>
                        <a href="javascript:history.go(-1);"><h3><font color="#D9D9F3">返回上一页面</font></h3></a>
                    </div>
            </div>

        </div>
    </div>
</section>



<!-- ABOUT SECTION -->
<!-- SERVICE SECTION -->
<!-- WORK SECTION -->

@yield('content')

<!-- CONTACT SECTION -->
<!-- FOOTER SECTION -->
<!-- SCRIPTS -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.parallax.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/magnific-popup-options.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>