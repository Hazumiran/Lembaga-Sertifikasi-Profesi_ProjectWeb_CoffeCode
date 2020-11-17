<!DOCTYPE html>
<html lang="en">

<head>
    <link href='<?= base_url('/assets/img/logo.png') ?>' rel='shortcut icon'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ccode</title>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">




</head>



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




<body>


    <?php if (!empty(session()->getFlashdata('validate'))) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?= $validate->listErrors(); ?>
        </div>
    <?php } ?>

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



    <div class="container">
        <div class="form">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="/auth/login" method="POST">
                                <div class="form-group">
                                    <label class="small mb-1" for="Email">Email</label>
                                    <input class="form-control py-4" type="email" name="Email" placeholder="Enter email address" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="Password">Password</label>
                                    <input id="user-password" class="form-control py-4" type="password" name="Password" placeholder="Enter password" />

                                    <span id="mybutton" onclick="change()"><img src="../assets/img/hide.png" /> </span>

                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a href="/" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                                    .<button type="submit" value="Login" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="/register"> Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="/assets/js/show-hide.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/assets/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="/assets/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="/assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="/assets/js/contact_me.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>