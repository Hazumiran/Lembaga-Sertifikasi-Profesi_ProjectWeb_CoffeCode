<?= $this->extend('layout/admincontenttemplate'); ?>

<?= $this->section('contenta'); ?>


<div class="container mt-3 bg-light">
    <div class="col-12">
        <h1>Edit data Users</h1>
    </div>
    <div class="col-12">
        <form action="<?php echo base_url('/AdminC/proses_update/' . $users['Id_Users']); ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="Users" class="col-form-label">Id Users :</label>
                <input type="text" name="Id_Users" disabled value="<?= $users['Id_Users'] ?>" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="Nama_Users" class="col-form-label">Nama Users :</label>
                <input type="text" name="Nama_Users" value="<?= $users['Nama_Users'] ?>" class="form-control" autofocus id="Nama_Users">
            </div>
            <div class="form-group">
                <label for="Alamat" class="col-form-label">Alamat :</label>
                <textarea name="Alamat" class="form-control" cols="10" rows="5"><?= $users['Alamat'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="Telp" class="col-form-label">No Hp :</label>
                <input type="number" name="Telp" value="<?= $users['Telp'] ?>" class="form-control" id="Telp">
            </div>
            <div class="form-group">
                <label for="Email" class="col-form-label">Email :</label>
                <input type="email" name="Email" value="<?= $users['Email'] ?>" class="form-control" id="Email">
            </div>
            <div class="form-group">
                <label for="Username" class="col-form-label"> Username :</label>
                <input type="text" name="Username" value="<?= $users['Username'] ?>" class="form-control" id="Username">
            </div>
            <div class="form-group">
                <label for="Password" class="col-form-label">Password :</label>
                <input type="text" name="Password" value="<?= $users['Password'] ?>" class="form-control" id="Password">

            </div>

            <label for="Level" class="col-form-label">Level :</label>
            <select class="form-control" name="Level">
                <option value="pelanggan">Pelanggan</option>
                <option value="admin">Admin</option>

            </select>

            <div class="form-group">
                <a href="/AdminC/users" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-circle-left"></i> Back</a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>

        </form>
    </div>
</div>

<?= $this->endsection(); ?>