<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-SKM</title>
    <!-- Bootstrap Css -->
    <link href="welcome/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Normalize Css -->
    <link href="welcome/assets/Normalize/normalize.css" rel="stylesheet">
    <!--Font Awesome Css-->
    <link href="welcome/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Linear icon Css-->
    <link href="welcome/assets/linearicons/css/icon-font.min.css" rel="stylesheet">
    <!--Animate Css-->
    <link href="welcome/assets/animate/animate.css" rel="stylesheet">
    <!--Portfolio Css-->
    <link href="welcome/assets/css/ionicons.min.css" rel="stylesheet">
    <link href="welcome/assets/css/magnific-popup.css" rel="stylesheet">
    <!--Custum Css-->
    <link href="welcome/css/style.css" rel="stylesheet">
    <!--Modernizr Js-->
    <script src="welcome/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Pre Loader -->
    <div id="loader"></div>
    <header id="home" class="welcome-hero-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"> <a href="index.html">E-SKM</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a class="smoth-scroll" href="#home">Home</a></li>
                                    <li><a class="smoth-scroll" href="#">Tentang</a></li>
                                    <li><a class="smoth-scroll" href="#">Berita</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Instansi
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">OPD</a></li>
                                            <li><a href="#">ORG</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="smoth-scroll" href="#">Informasi</a></li>
                                    <li><a class="smoth-scroll" href="#">Survey IKM</a></li>
                                    <li><a class="smoth-scroll" href="#">Kontak</a></li>
                                    <li><a class="smoth-scroll" href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-slider-area">
            <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="single-slide-item slide-1">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="font-weight-h">Satu <br></h2>
                                                <p class="font-weight margin-bottom-2">Penjelasan 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-slide-item slide-2">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="font-weight-h"> Dua<br></h2>
                                                <p class="font-weight margin-bottom-2">Penjelasan 2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-slide-item slide-3">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="font-weight-h"> Tiga<br></h2>
                                                <p class="font-weight margin-bottom-2">Penjelasan 3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left welcome-control" href="#welcome-slide-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right welcome-control" href="#welcome-slide-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
            </div>
        </div>
    </header>


    <!--Service start-->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Hasil Survey</h2>
                </div>
            </div>
            <div class="row">
                <div class="service-callouts">
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-screen"></i> </div>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-smartphone"></i> </div>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-laptop-phone"></i> </div>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-envelope"></i> </div>
                            <h4><a href="#">    Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-chart-bars"></i> </div>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-service"> <span class="service-bar"></span>
                            <div class="service-icon"> <i class="lnr lnr-earth"></i> </div>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service end-->
    <!--Blog start-->
    <section class="blog-wrapper">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Berita</h2>
                </div>
            </div>
            <div class="row">
                <!-- Start Single Blog Post -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb"> <img src="images/blog1.jpg" alt="" class="img-responsive"> </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>10 Nov 2017</a> </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a> </li>
                            </ul>
                            <h4><a href="single-blog.html">Judul Berita</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="single-blog.html">read more</a> </div>
                    </div>
                </div>
                <!-- End Single Blog Post -->
                <!-- Start Single Blog Post -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb"> <img src="images/blog2.jpg" alt="" class="img-responsive"> </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>10 Nov 2017</a> </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a> </li>
                            </ul>
                            <h4><a href="single-blog.html">Judul Berita</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="single-blog.html">read more</a> </div>
                    </div>
                </div>
                <!-- End Single Blog Post -->
                <!-- Start Single Blog Post -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb"> <img src="images/blog3.jpg" alt="" class="img-responsive"> </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>10 Nov 2017</a> </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a> </li>
                            </ul>
                            <h4><a href="single-blog.html">Judul Berita</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="single-blog.html">read more</a> </div>
                    </div>
                </div>
                <!-- End Single Blog Post -->
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--Blog end-->

    <section class="py-5">
        <div class="container" style="height: 100%;">
            <section class="features-icons bg-light text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 order-lg-1">
                            <div class="p-5">
                                <center>
                                    <h3 align="center">Agenda</h3>
                                    <br>

                                    <div class="row align-items-center">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Nama Kegiatan</th>
                                                                <th scope="col">Tanggal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Kegiatan 1</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Kegiatan 2</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Kegiatan 3</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Kegiatan 4</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Kegiatan 5</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td>Kegiatan 6</td>
                                                                <td>2018</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">7</th>
                                                                <td>Kegiatan 7</td>
                                                                <td>2018</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </center>
                        </div>
                    </div>

                </div>
        </div>
        </section>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy;
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear());
                </script> E-SKM || All Rights Reserved.</p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="welcome/assets/jquery/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="welcome/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="welcome/assets/easing/jquery.easing.min.js"></script>
    <script src="welcome/assets/isotope/jquery.isotope.js"></script>
    <script src="welcome/assets/jquery/imagesloaded.pkgd.min.js"></script>
    <script src="welcome/assets/jquery/jquery.magnific-popup.min.js"></script>
    <script src="welcome/assets/number-animation/jquery.animateNumber.min.js"></script>
    <script src="welcome/assets/jquery/plugins.js"></script>
    <script src="welcome/js/custom.js"></script>
</body>

</html>
