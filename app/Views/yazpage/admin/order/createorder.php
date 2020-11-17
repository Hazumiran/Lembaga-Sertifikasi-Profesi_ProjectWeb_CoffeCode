<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="container mt-3 bg-light">
    <div class="col-12">
        <h1>Create data Order</h1>
    </div>
    <div class="col-12">
        <form action="/OrderC/proses" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="Users" class="col-form-label">ID Order : AI </label>
                <input type="hidden" name="Id_Users" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="Id_Pelanggan" class="col-form-label">ID Pelanggan :</label>
                <input type="number" name="Id_Pelanggan" value="<?= old('Id_Pelanggan'); ?>" class="form-control" id="Users" value="<?= old('Id_Pelanggan'); ?>" id="nama">
            </div>
            <div class="form-group">
                <label for="Nama_Pelanggan" class="col-form-label">Nama Pelanggan :</label>
                <textarea name="Nama_Pelanggan" class="form-control" cols="10" rows="5"><?= old('Nama_Pelanggan'); ?></textarea>
            </div>
            <div class="form-group">
                <label for="Id_Menu" class="col-form-label">ID Menu :</label>
                <input type="number" name="Id_Menu" value="<?= old('Id_Menu'); ?>" class="form-control" id="Id_Menu">
            </div>
            <div class="form-group">
                <label for="Menu" class="col-form-label">Menu :</label>
                <input type="text" name="Menu" value="<?= old('Menu'); ?>" class="form-control" id="Menu">
            </div>
            <div class="form-group">
                <label for="Kategori" class="col-form-label">Kategori :</label>
                <input type="text" name="Kategori" value="<?= old('Kategori'); ?>" class="form-control" id="Kategori">
            </div>
            <div class="form-group">
                <label for="Harga" class="col-form-label">Harga :</label>
                <input type="text" name="Harga" value="<?= old('Harga'); ?>" class="form-control" id="Harga">
            </div>
            <div class="form-group">
                <label for="Tgl_Order" class="col-form-label">Tanggal Order :</label>
                <input type="text" name="Tgl_Order" value="<?= old('Tgl_Order'); ?>" class="form-control" id="Tgl_Order">
            </div>

            <br>
            <br>
            <div class="form-group">
                <a href="/OrderC/order" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endsection(); ?>