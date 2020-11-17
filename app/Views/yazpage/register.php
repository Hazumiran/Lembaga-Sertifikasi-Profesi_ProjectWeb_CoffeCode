<!DOCTYPE html>
<html lang="en">

<head>
    <link href='<?= base_url('/assets/img/logo.png') ?>' rel='shortcut icon'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Ccode</title>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

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






    <div class="intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Account</h3>
                        </div>
                        <div class="card-body">
                            <form action="/Auth/register" method="post">

                                <?= csrf_field(); ?>

                                <div class="form-group">
                                    <label for="Nama_Users">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="Nama_Users" placeholder="Nama Lengkap" />
                                </div>

                                <div class="form-group">
                                    <label for="Alamat">Alamat Lengkap</label>
                                    <textarea class="form-control" type="text-area" name="Alamat" placeholder="Alamat Lengkap"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="Telp">No Telepon</label>
                                    <input class="form-control" type="number" name="Telp" placeholder="No Telepon Aktif" />
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="Alamat Email" />
                                </div>

                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input class="form-control" type="text" name="Username" placeholder="Username" />
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="Password">Password</label>
                                    <input id="user-password" class="form-control py-4" type="password" name="Password" placeholder="Enter password" />

                                    <span id="mybutton" onclick="change()"><img src="../assets/img/hide.png" /> </span>

                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="Level" value="pelanggan" />
                                </div>


                                <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="<? base_url('/login') ?>">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="/assets/js/show-hide.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>