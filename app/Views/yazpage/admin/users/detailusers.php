<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>

<body>
    <section id="detail-messages">
        <div class="container">
            <div class="card text-center">
                <div class="card-header bg-primary mb-2">
                    <ul class="nav nav-pills card-header-pills">
                        <h4 style="color: white;">Detail Users</h4>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-left">
                            <table border="0">
                                <tr>
                                    <td>Nama Users</td>
                                    <td>:</td>
                                    <td><?= $users['Nama_Users']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $users['Alamat']; ?></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><?= $users['Telp']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?= $users['Email']; ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><?= $users['Username']; ?></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><?= $users['Password']; ?></td>
                                </tr>
                                <tr>
                                    <td>Dibuat</td>
                                    <td>:</td>
                                    <td><?= $users['Created_date']; ?></td>
                                </tr>
                                <tr>
                                    <td>Terakhir diupdate</td>
                                    <td>:</td>
                                    <td><?= $users['Update_date']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pengguna sebagai</td>
                                    <td>:</td>
                                    <td><?= $users['Level']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="/AdminC/users" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

<?= $this->endsection(); ?>