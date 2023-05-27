<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
  <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
 <![endif]-->
    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/isotope.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('Front/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('Front/css/animate.css') }}" rel="stylesheet" media="screen">
    <!-- Owl Carousel asset -->
    <link href="{{ asset('Front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Front/css/styles.css') }}" />
    <!-- Font Awesome -->
    <link href="{{ asset('Front/font/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                        data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img
                                    src="{{ asset('img/logoss.png') }}" height:50 weight:100 /></i></b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#Features" class="scroll-link">Fitur</a></li>
                        <li><a href="#aboutUs" class="scroll-link">Tentang Kami</a></li>
                        <!-- <li><a href="#team" class="scroll-link">Team</a></li>
                        <li><a href="{{ route('backend.dashboard') }}" class="scroll-link">ADMIN</a></li> -->
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div class="banner-container">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item"><img src="{{ asset('img/sapi.jpg') }}" alt="banner" /></div>
                    <div class="item"><img src="{{ asset('img/sapi.jpg') }}" alt="banner" /></div>
                    <div class="item"><img src="{{ asset('img/sapi.jpg') }}" alt="banner" /></div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
            </div>

        </div>
        <div class="container hero-text2">
            <div class="col-md-9">
                <h2>Kenapa harus menggunakan hardware SS?</h1>
                    <p>Untuk membantu pencegahan penyebaran penyakit PMK pada hewan sapi dengan melakukan monitoring
                        secara berkala dan intensif terhadap hewan yang sudah terjangkit PMK itu sendiri dan melakuakn
                        vaksinasi pada sapi. </p>
            </div>
            <div class="col-md-3">
                <a class="btn btn-apply" href="{{ route('auth.login.show') }}">LOG IN</a>
            </div>
        </div>
    </section>
    <section id="Features" class="page-section colord">
        <div class="container">
            <div class="row">
                <!-- item -->
                <div class="col-md-3 text-center">
                    <div class="box-item">
                        <i class="circle"><img src="{{ asset('img/1.png') }}" alt="" /></i>
                        <h3>Machine Learning</h3>
                        <p>Mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya.
                        </p>
                    </div>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center">
                    <div class="box-item">
                        <i class="circle"> <img src="{{ asset('img/5.png') }}" alt="" /></i>
                        <h3>Panduan</h3>
                        <p>Video demo dan beberapa panduan untuk menggunakan website dan pemeliharaan hardware.</p>
                    </div>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center">
                    <div class="box-item">
                        <i class="circle"> <img src="{{ asset('img/2.png') }}" alt="" /></i>
                        <h3>Data</h3>
                        <p>Data monitoring akan tertampil di website dengan grafik data. </p>
                    </div>
                </div>
                <!-- end: -->

                <!-- item -->
                <div class="col-md-3 text-center">
                    <div class="box-item">
                        <i class="circle"> <img src="{{ asset('img/3.png') }}" alt="" /></i>
                        <h3>Informasi</h3>
                        <p> Memberikan informasi gejala atau indikasi mengarah ke penyakit PMK pada sapi.</p>
                    </div>
                    <!-- end:-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <section id="aboutUs">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>About Us</h2>
                <p>Sapi Sehat merupakan website untuk memonitoring penyakit PMK pada sapi. </p>
            </div>
            <div class="row feature design">
                <div class="area1 columns left">
                    <h3>Latar Belakang Sapi Sehat Di buat</h3>
                    <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur
                        deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer
                        invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster
                        propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset
                        vel, ut quo solum dicunt.
                        Nec et jority have suffered alteration. </p>
                    <p>Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has
                        molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam
                        vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset vel, ut quo solum
                        dicunt.
                        Nec et amet vidisse mentitumsstie percipitoleat fabulas. </p>
                    <a href="#" class="btn btn-apply"><i class="fa fa-play-circle"></i>Tutorial</a>
                </div>
                <div class="area2 columns feature-media right"> <img src="{{ asset('img/about-img.jpg') }}"
                        alt="" width="100%"> </div>
            </div>
            <div class="row dataTxt">
                <div class="col-md-4 col-sm-6">
                    <h3>Our Education</h3>
                    <p>Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod </p>
                    <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur
                        deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer
                        invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster
                        propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea.</p>

                    <br>
                </div>
                <div class="col-md-4 col-sm-6">

                    <h3>Courses</h3>
                    <p>Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod </p>
                    <ul class="listArrow">
                        <li>Lorem ipsum dolor consectetursit amet, consectet</li>
                        <li>Has molestie percipit an. Falli volumus efficiantur</li>
                        <li>Falli volumus efficiantur sed id, ad vel noster</li>
                        <li>Lorem ipsum dolor consectetursit amet, consectetur</li>
                        <li>Ius ut etiam vivendo, graeci iudicabit constitutoa</li>
                    </ul>
                    <!-- Accordion starts -->
                </div>

                <div class="col-md-4 col-sm-6">

                    <h3>Latest News</h3>
                    <p>Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod </p>
                    <ul class="list3">
                        <li>Lorem ipsum dolor consectetursit</li>
                        <li>Has molestie percipit an Falli</li>
                        <li>Falli volumus efficiantur sed id</li>
                        <li>Lorem ipsum dolor consectetu</li>
                    </ul>

                    <!-- Accordion starts -->
                </div>

            </div>
    </section>
    <section id="team" class="page-section">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>TEAM</h2>
                <p>team pembuat Sapi sehat.....</p>
            </div>
            <!-- Team Member's Details -->
            <div class="team-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img">
                                <!-- Image  -->
                                <img class="img-responsive" src="{{asset('img/photo-1.jpg')}}" alt="">
                            </div>
                            <!-- Member Details -->
                            <div class="team-title">
                                <h4>Aries Pratiarso, S.T., M.T. </h4>
                                <!-- Designation -->
                                <span class="pos">Dosen Pembimbing 1</span>
                            </div>
                            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a
                                    href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i
                                        class="fa fa-twitter"></i></a> <a href="#"><i
                                        class="fa fa-dribbble"></i></a> <a href="#"><i
                                        class="fa fa-github"></i></a> </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img">
                                <!-- Image  -->
                                <img class="img-responsive" src="{{asset('img/photo-2.jpg')}}" alt="">
                            </div>
                            <!-- Member Details -->
                            <h4>Moch. Zen Samsono Hadi, ST. MSc. Ph.D</h4>
                            <!-- Designation -->
                            <span class="pos">Dosen Pembimbing 2</span>
                            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a
                                    href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i
                                        class="fa fa-twitter"></i></a> <a href="#"><i
                                        class="fa fa-dribbble"></i></a> <a href="#"><i
                                        class="fa fa-github"></i></a> </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img">
                                <!-- Image  -->
                                <img class="img-responsive" src="{{asset('img/photo-3.jpg')}}" alt="">
                            </div>
                            <!-- Member Details -->
                            <h4>Dinda Dwimagfiroh</h4>
                            <!-- Designation -->
                            <span class="pos">Mahasiswa</span>
                            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a
                                    href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i
                                        class="fa fa-twitter"></i></a> <a href="#"><i
                                        class="fa fa-dribbble"></i></a> <a href="#"><i
                                        class="fa fa-github"></i></a> </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- Team Member -->
                        <div class="team-member pDark">
                            <!-- Image Hover Block -->
                            <div class="member-img">
                                <!-- Image  -->
                                <img class="img-responsive" src="{{asset('img/photo-4.jpg')}}" alt="">
                            </div>
                            <!-- Member Details -->
                            <h4>Rizky Bintang Fahreza</h4>
                            <!-- Designation -->
                            <span class="pos">Mahasiswa</span>
                            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a
                                    href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i
                                        class="fa fa-twitter"></i></a> <a href="#"><i
                                        class="fa fa-dribbble"></i></a> <a href="#"><i
                                        class="fa fa-github"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>

    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="{{ asset('Front/js/jquery-1.8.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Front/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Front/js/modernizr-latest.js') }}"></script>
    <script src="{{ asset('Front/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('Front/js/waypoints.js') }}"></script>
    <script src="{{ asset('Front/js/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('Front/js/jquery.nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Front/js/jquery.isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Front/js/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Front/js/custom.js') }}" type="text/javascript"></script>
</body>

</html>
