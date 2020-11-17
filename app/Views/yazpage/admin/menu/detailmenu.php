<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>

<body>
    <section id="detail-messages">
        <div class="container">
            <div class="card text-center">
                <div class="card-header bg-primary mb-2">
                    <ul class="nav nav-pills card-header-pills">
                        <h4 style="color: white;">Detail menu</h4>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-left">
                            <table border="0">
                                <tr>
                                    <td>Nama menu</td>
                                    <td>:</td>
                                    <td><?= $menu['Menu']; ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td><?= $menu['Kategori']; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><?= $menu['Harga']; ?></td>
                                </tr>
                                <tr>
                                    <td>Dibuat</td>
                                    <td>:</td>
                                    <td><?= $menu['Created_date']; ?></td>
                                </tr>
                                <tr>
                                    <td>Terakhir diupdate</td>
                                    <td>:</td>
                                    <td><?= $menu['Update_date']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="/MenuC/menu" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

<?= $this->endsection(); ?>