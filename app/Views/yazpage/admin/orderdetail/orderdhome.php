<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-3 mt-4">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="/OrderD/create" class="btn btn-success float-right mb-3">Tambah Order Detail</a>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 mt-fluid">
                <div class="container-fluid">
                    <?php
                    if (!empty(session()->getFlashdata('success'))) { ?>

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
                </div>
            </div>
            <table class="table table-responsive">
                <thead>
                    <th>No</th>
                    <th>ID Order Detail</th>
                    <th>ID Order</th>
                    <th>Nama Pelanggan</th>
                    <th>Total</th>
                    <th>Tanggal Transaksi</th>
                    <th>Pilihan</th>

                </thead>
                <tbody>
                <tbody>
                    <?php $no = 1 + (4 * ($currentPage - 1)); ?>
                    <?php foreach ($orderdetail as $anjay) : ?>
                        <tr>
                            <th scope="col"><?= $no++; ?></th>
                            <td><?= $anjay['Id_Orderdetail']; ?></td>
                            <td><?= $anjay['Id_Order']; ?></td>
                            <td><?= $anjay['Nama_Pelanggan']; ?></td>
                            <td><?= $anjay['Total']; ?></td>
                            <td><?= $anjay['Tgl_Transaksi']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="/OrderD/update/<?= $anjay['Id_Orderdetail']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="/OrderD/detail/<?= $anjay['Id_Orderdetail']; ?>" class="btn btn-warning btn-sm text-white"><i class="fas fa-search"></i></a>
                                    <a href="/OrderD/delete/<?= $anjay['Id_Orderdetail']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('orderdetail', 'pasien_pagination') ?>
        </div>
    </div>


</div>
<?= $this->endsection(); ?>