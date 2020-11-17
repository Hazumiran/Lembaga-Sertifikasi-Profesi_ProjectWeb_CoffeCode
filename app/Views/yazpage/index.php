<!DOCTYPE html>
<html lang="en">

<head>
  <link href='<?= base_url('/assets/img/logo.png') ?>' rel='shortcut icon'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CoffeCode</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


  <!-- Navigation
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">CoffeCode</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
          <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
          <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
          <li><a href="<?= base_url('/login') ?>" class="page-scroll ">Login </a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>



  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Ccode</h1>
              <p>Restaurant / Coffee / Coding</p>
              <a href="<?= base_url('/login') ?>" class="btn btn-custom btn-lg page-scroll">Order Here !!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 ">
          <div class="about-img"><img src="/assets/img/about.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text">
            <h2>CoffeCode</h2>
            <hr>
            <p>CoffeCode adalah sebuah aplikasi berbasis E-Commerce sebagai penyedia layanan makanan/minuman resto dan cafe. Aplikasi ini dirancang bagi mereka yang ingin bersantai maupun dinner dengan nuansa yang cocok bagi para progammer dan anak muda</p>
            <h3>Ngoding?disini aja</h3>
            <p>Kurang semangat dalam mengerjakan sebuah project berat?bosan dengan lingkungan ngoding mu dirumah?apalagi jika sedikit sedikit rebahan. Mari ngoding di CoffeCode tempat yang cocok untuk ngoding yang sudah disediakan fasilitas internet 100mbps gratis!!!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Restaurant Menu Section -->
  <div id="restaurant-menu">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Menu</h2>
        <hr>
        <p>Daftar Menu Makanan & Minuman</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Breakfast & Starters</h2>
            <hr>
            <div class="menu-item">
              <div class="menu-item-name"> Nasi Kuning Benjamin </div>
              <div class="menu-item-price"> 12k </div>
              <div class="menu-item-description"> Nasi Kuning Benjamin sebagai sarapan untuk memulai hari anda dengan kiddie script :) </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Bubur Bill Gates </div>
              <div class="menu-item-price"> 10k </div>
              <div class="menu-item-description"> Bubur Bill Gates dilengkapi dengan aneka rasa Office seperti Word/Powerpoint/Excel/Outlook/dll. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> SandWich html </div>
              <div class="menu-item-price"> 8k </div>
              <div class="menu-item-description"> SandWich ini salah satu santapan sarapan yang pas bagi anda yang tidak memiliki banyak waktu untuk sarapan </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Lontong Kari javascript </div>
              <div class="menu-item-price"> 15k </div>
              <div class="menu-item-description"> Paduan sayur lontong dengan ayam kaldu yang pas di perut anda untuk memulai aktivitas </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Main Course</h2>
            <hr>
            <div class="menu-item">
              <div class="menu-item-name"> Seafood X Termux </div>
              <div class="menu-item-price"> 45k </div>
              <div class="menu-item-description"> Seafood makanan berat yang pas untuk makan siang dikala waktu istirahat, makanan ini full No root </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Ayam Bakar Bootstrap </div>
              <div class="menu-item-price"> 30k </div>
              <div class="menu-item-description"> Ayam Bakar Kecap sedap khas CoffeCode yang tidak ada tandingannya </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Nasi Goreng css </div>
              <div class="menu-item-price"> 12k </div>
              <div class="menu-item-description"> Paduan nasi goreng dengan telur yang cantik dengan bantuan css yang menarik </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Baso Lavarel </div>
              <div class="menu-item-price"> 15k </div>
              <div class="menu-item-description"> Baso kuliner Bandung yang nikmat dengan bantuan framework </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Dinner</h2>
            <hr>
            <div class="menu-item">
              <div class="menu-item-name"> Beef Steak Debian </div>
              <div class="menu-item-price"> 45k </div>
              <div class="menu-item-description"> Menu makanan satu ini paling banyak disukai </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Salad linux </div>
              <div class="menu-item-price"> 35k </div>
              <div class="menu-item-description"> cocok untuk kamu yang sedang diet </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Nasi Padang Jquery </div>
              <div class="menu-item-price"> 40k </div>
              <div class="menu-item-description"> Nasi padang dengan daging sapi yang lunak bikin enak </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Rise double Chicken Code Igniter </div>
              <div class="menu-item-price"> 38k </div>
              <div class="menu-item-description"> Santapan sedap bagi pecinta kuliner ayam </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Coffee & Drinks</h2>
            <hr>
            <div class="menu-item">
              <div class="menu-item-name"> Dalgona Coffe ReactJS </div>
              <div class="menu-item-price"> 10k </div>
              <div class="menu-item-description"> Lumer bikin ngiler dan ga kepengen nolak yang satu nih! </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Es teh manis </div>
              <div class="menu-item-price"> 5k </div>
              <div class="menu-item-description"> Teh manis dengan Teh dan gula ditambah es batu yang dingin </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> CoffeCode </div>
              <div class="menu-item-price"> 30k </div>
              <div class="menu-item-description"> Minuman spesial dari kami yang bikin ketagihan </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name"> Capucino Bios </div>
              <div class="menu-item-price"> 15k </div>
              <div class="menu-item-description"> Capucino dengan secure boot yang aman bagi anda </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Section -->
  <div id="portfolio">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Gallery</h2>
        <hr>
        <p>Galley Menu Makanan CoffeCode</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li><a href="#" data-filter="*" class="active">All</a></li>
                <li><a href="#" data-filter=".breakfast">Breakfast</a></li>
                <li><a href="#" data-filter=".lunch">Lunch</a></li>
                <li><a href="#" data-filter=".dinner">Dinner</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/01-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/01-smjpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 dinner">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/02-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/03-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/04-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 dinner">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/05-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/06-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/07-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/08-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 dinner">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/09-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/10-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/11-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="/assets/img/portfolio/12-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Dish Name</h4>
                  </div>
                  <img src="/assets/img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Call Reservation Section -->
  <div id="call-reservation" class="text-center">
    <div class="container">
      <h2>Mau Menyewa Cathering ? Hubungi <strong>08131674638</strong></h2>
    </div>
  </div>
  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title text-center">
        <h2>Kontak Form</h2>
        <hr>
        <p>Kirim pesanmu terkait Ccode Disini !!!</p>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Nama Kamu" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Isi pesan disini" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container text-center">
      <div class="col-md-4">
        <h3>Alamat</h3>
        <div class="contact-item">
          <p>Jalan Kenangan No 23</p>
          <p>Bandung</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Jam Buka</h3>
        <div class="contact-item">
          <p>Senin - Kamis: 10:00 AM - 11:00 PM</p>
          <p>Jumat & Sabtu: 11:00 AM - 02:00 AM</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>kontak Info</h3>
        <div class="contact-item">
          <p>Phone: +62815528734 </p>
          <p>Email: CoffeCode@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center copyrights">
      <div class="col-md-8 col-md-offset-2">

        <p>&copy; 2016 Touché. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="/assets/js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="/assets/js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.isotope.js"></script>
  <script type="text/javascript" src="/assets/js/SmoothScroll.js"></script>
  <script type="text/javascript" src="/assets/js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="/assets/js/contact_me.js"></script>
  <script type="text/javascript" src="/assets/js/main.js"></script>


</body>

</html>