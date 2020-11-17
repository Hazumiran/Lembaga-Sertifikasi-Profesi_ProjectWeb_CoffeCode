<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>


<div class="container mt-3 bg-light">
    <div class="col-12">
        <h1>Edit data Menu</h1>
    </div>
    <div class="col-12">
        <form action="<?php echo base_url('/MenuC/proses_update/' . $menu['Id_Menu']); ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="Menu" class="col-form-label">Id Menu :</label>
                <input type="text" name="Id_Menu" disabled value="<?= $menu['Id_Menu'] ?>" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="Menu" class="col-form-label">Nama Menu :</label>
                <input type="text" name="Menu" value="<?= $menu['Menu'] ?>" class="form-control" autofocus id="Menu">
            </div>


            <label for="Kategori" class="col-form-label">Kategori :</label>
            <select class="form-control" name="Kategori">
                <option value="makanan berat">makanan berat</option>
                <option value="makanan ringan">makanan ringan</option>
                <option value="minuman dingin">minuman dingin</option>
                <option value="minuman hangat">minuman hangat</option>

            </select>
            <div class="form-group">
                <label for="Harga" class="col-form-label">Harga :</label>
                <input type="number" name="Harga" value="<?= $menu['Harga'] ?>" class="form-control" id="Harga">
            </div>


            <div class="form-group">
                <a href="/MenuC/menu" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>

        </form>
    </div>
</div>

<?= $this->endsection(); ?>