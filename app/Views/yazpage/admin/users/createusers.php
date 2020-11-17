<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="container mt-3 bg-light">
    <div class="col-12">
        <h1>Create data Users</h1>
    </div>
    <div class="col-12">
        <form action="/AdminC/proses" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="Users" class="col-form-label">Id Users : AI </label>
                <input type="hidden" name="Id_Users" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="nama" class="col-form-label">Nama Lengkap :</label>
                <input type="text" name="Nama_Users" value="<?= old('Nama_Users'); ?>" class="form-control" id="Users" value="<?= old('Nama_Users'); ?>" id="nama">
            </div>
            <div class="form-group">
                <label for="Alamat" class="col-form-label">Alamat :</label>
                <textarea name="Alamat" class="form-control" cols="10" rows="5"><?= old('Alamat'); ?></textarea>
            </div>
            <div class="form-group">
                <label for="Telp" class="col-form-label">No HP :</label>
                <input type="number" name="Telp" value="<?= old('Telp'); ?>" class="form-control" id="Telp">
            </div>
            <div class="form-group">
                <label for="Email" class="col-form-label">Email :</label>
                <input type="email" name="Email" value="<?= old('Email'); ?>" class="form-control" id="Email">
            </div>
            <div class="form-group">
                <label for="Username" class="col-form-label">Username :</label>
                <input type="text" name="Username" value="<?= old('Username'); ?>" class="form-control" id="Username">
            </div>
            <div class="form-group">
                <label for="Password" class="col-form-label">Password :</label>
                <input type="text" name="Password" value="<?= old('Password'); ?>" class="form-control" id="Password">
                <br>
                <input type="checkbox" class="form-checkbox" name="checkku"> Lihat password
            </div>
            <label for="Level" class="col-form-label">Level :</label>
            <select class="form-control" name="Level">
                <option value="admin">Admin</option>
                <option value="pelanggan">Pelanggan</option>
            </select>
            <br>
            <br>
            <div class="form-group">
                <a href="/AdminC/users" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endsection(); ?>