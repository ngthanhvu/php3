<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevFolio Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">{{ $data['name'] }}</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="intro-title mb-4">I am {{ $data['name'] }}</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">{{ $data['profile'] }}</span><strong
                            class="text-slider"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="{{ $data['image'] }}" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>{{ $data['name'] }}</span></p>
                                            <p><span class="title-s">Profile: </span>
                                                <span>{{ $data['profile'] }}</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>{{ $data['email'] }}</span>
                                            </p>
                                            <p><span class="title-s">Phone: </span> <span>{{ $data['phone'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>HTML</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">75%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP</span> <span class="pull-right">50%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        {{ $data['about'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            {{ $data['about'] }}
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-code-working"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">{{ $service['title'] }}</h2>
                                <p class="s-description text-center">
                                    {{ $service['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->

    <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                @foreach ($tasks as $task)
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">{{ $task['count'] }}</p>
                                <span class="counter-text">{{ $task['description'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portofolios as $portofolio)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ $portofolio['image'] }}" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="{{ $portofolio['image'] }}" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title">{{ $portofolio['title'] }}</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">{{ $portofolio['description'] }}</span> /
                                                <span class="w-date">{{ $portofolio['time'] }}</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w-like">
                                                <span class="ion-ios-plus-outline"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->

    <!--/ Section Testimonials Star /-->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-mf" class="owl-carousel owl-theme">
                        @foreach ($users as $user)
                            <div class="testimonial-box">
                                <div class="author-test">
                                    <img src="{{ $user['image'] }}" alt=""
                                        class="rounded-circle b-shadow-a">
                                    <span class="author">{{ $user['name'] }}</span>
                                </div>
                                <div class="content-test">
                                    <p class="description lead">
                                        {{ $user['description'] }}
                                    </p>
                                    <span class="comit"><i class="fa fa-quote-right"></i></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="{{ $blog['image'] }}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $blog['category'] }}</h6>
                                    </div>
                                </div>

                                <h3 class="card-title"><a href="blog-single.html">{{ $blog['title'] }}</a></h3>
                                <p class="card-description">
                                    {{ $blog['description'] }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="{{ $blog['img_user'] }}" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">{{ $blog['author'] }}</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="ion-ios-clock-outline"></span> {{ $blog['time'] }} min
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/ Section Blog End /-->

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Your Name"
                                                            data-rule="minlen:4"
                                                            data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Your Email" data-rule="email"
                                                            data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject" data-rule="minlen:4"
                                                            data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                            data-msg="Please write something for us" placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            {{ $contacts['description'] }}
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span> {{ $contacts['address'] }}</li>
                                            <li><span class="ion-ios-telephone"></span> {{ $contacts['phone'] }}</li>
                                            <li><span class="ion-email"></span> {{ $contacts['email'] }}</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-facebook"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-instagram"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-twitter"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-pinterest"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Section Contact-footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/counterup/jquery.counterup.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>
