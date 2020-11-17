<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


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

</head>

<body>


    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Atas nama<?= (session()->get('login') == true) ? session()->get('Nama_Users') : 'CoffeCode' ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
    </div>

    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?= (session()->get('login') == true) ? session()->get('Nama_Users') : 'CoffeCode' ?></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="page-scroll ">Lihat belanja </a></li>
                    <li><a href="<?= base_url('/auth/logout') ?>" class="page-scroll ">Logout </a></li>
                    <li><a href="<?= base_url('/AdminC/clear') ?>" class="page-scroll ">Clear cart </a></li>

                    <ul class="navbar-nav ml-auto ml-md-0">
                        <?php $keranjang = $cart->contents();
                        $jml_item = 0;
                        foreach ($keranjang as $key => $value) {
                            $jml_item = $jml_item + $value['qty'];
                        }
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <?php if (empty($keranjang)) { ?>

                                    <a class="dropdown-item">
                                        <p>Keranjang kosong</p>
                                    </a> <?php } else { ?>

                                    <a class="dropdown-item" href="#">
                                        <?php foreach ($keranjang as $key => $value) { ?>
                                            <div class="card">
                                                <img src="/assets/img/portfolio/01-small.jpg" class="card-img-top">
                                                <div class="card-body">
                                                    <br>
                                                    <br>
                                                    <p class="card-text">Seafood makanan berat yang pas untuk makan siang dikala waktu istirahat, makanan ini full No root.
                                                    </p>



                                                    <br>



                                                </div>
                                            </div>
                                        <?php } ?>
                                    </a>

                                <?php } ?>
                            </div>
                        </li>


                    </ul>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <div>
            <?php
            if (!empty(session()->get('Nama_Pelanggan'))) {
                echo session()->get('Nama_Pelanggan');
            }
            ?>
        </div>

    </nav>



    <header id="header">
        <?php if (!empty(session()->getFlashdata('success'))) { ?>

            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
            </div>
        <?php } ?>
        <?php if (!empty(session()->getFlashdata('info'))) { ?>

            <div class="alert alert-primary">
                <?php echo session()->getFlashdata('info'); ?>
            </div>
        <?php } ?>
        <?php if (!empty(session()->getFlashdata('warning'))) { ?>

            <div class="alert alert-danger">
                <?php echo session()->getFlashdata('warning'); ?>
            </div>
        <?php } ?>
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>Ccode</h1>
                            <p>Restaurant / Coffee / Coding</p>
                            <a href="#" class="btn btn-custom btn-lg page-scroll">CheckOut !!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>


    <!-- conten -->

    <div class="container">
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dimissible">
                        <button type="button" class="close" data-dimiss="alert" aria-hidden"true">&times;</button>    
                        ';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <?php foreach ($belanja as $key => $value) { ?>

                <div class="col-lg-6">


                    <?php
                    echo form_open('AdminC/add');
                    echo form_hidden('id', $value['Id_Menu']);
                    echo form_hidden('name', $value['Menu']);
                    echo form_hidden('price', $value['Harga']);


                    ?>
                    <div class="card">
                        <img src="/assets/img/portfolio/01-small.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['Menu'] ?>Seafood X Termux</h5>
                            <label>Kategori : <?= $value['Kategori'] ?> </label>
                            <br>
                            <br>
                            <p class="card-text">Seafood makanan berat yang pas untuk makan siang dikala waktu istirahat, makanan ini full No root.

                            </p>



                            <br>
                            <label><?= number_to_currency($value['Harga'], 'IDR'); ?> </label>

                            <button type="submit"><i class="fa fa-shopping-basket"></i>Add</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            <?php } ?>

        </div>
    </div>
    </div>



</body>


<script type="text/javascript" src="/assets/js/show-hide.js"></script>
<script type="text/javascript" src="/assets/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/nivo-lightbox.js"></script>
<script type="text/javascript" src="/assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="/assets/js/SmoothScroll.js"></script>
<script type="text/javascript" src="/assets/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/assets/js/contact_me.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</html>