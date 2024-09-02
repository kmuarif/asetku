<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Aplikasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('aplikasi') ?>">Data Aplikasi</a></li>
                    <li class="breadcrumb-item active">Edit Data Aplikasi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fid_app" class="col-md-2 col-form-label">Kode Aplikasi</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fid_app') ? 'is-invalid' : '' ?>" id="fid_app" name="fid_app" value="<?= $aplikasi->id_app ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fid_app') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_app" class="col-md-2 col-form-label">Nama Aplikasi</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnama_app') ? 'is-invalid' : '' ?>" id="fnama_app" name="fnama_app" value="<?= $aplikasi->nama_app ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_app') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="falamat_app" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('falamat_app') ? 'is-invalid' : '' ?>" id="falamat_app" name="falamat_app" value="<?= $aplikasi->alamat_app ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('falamat_app') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fjenis_app" class="col-md-2 col-form-label">Jenis Aplikasi</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fjenis_app') ? 'is-invalid' : '' ?>" id="fjenis_app" name="fjenis_app" value="<?= $aplikasi->jenis_app ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fjenis_app') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fdeskripsi" class="col-md-2 col-form-label">Deskripsi</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fdeskripsi') ? 'is-invalid' : '' ?>" id="fdeskripsi" name="fdeskripsi" value="<?= $aplikasi->deskripsi ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fdeskripsi') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fbahasa" class="col-md-2 col-form-label">Bahasa</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fbahasa') ? 'is-invalid' : '' ?>" id="fbahasa" name="fbahasa" value="<?= $aplikasi->bahasa ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fbahasa') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fframework" class="col-md-2 col-form-label">Framework</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fframework') ? 'is-invalid' : '' ?>" id="fframework" name="fframework" value="<?= $aplikasi->framework ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fframework') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fbasis_data" class="col-md-2 col-form-label">Basis Data</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fbasis_data') ? 'is-invalid' : '' ?>" id="fbasis_data" name="fbasis_data" value="<?= $aplikasi->basis_data ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fbasis_data') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fpengembang" class="col-md-2 col-form-label">Pengembang</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fpengembang') ? 'is-invalid' : '' ?>" id="fpengembang" name="fpengembang" value="<?= $aplikasi->pengembang ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fpengembang') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ftahun_buat" class="col-md-2 col-form-label">Basis Data</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('ftahun_buat') ? 'is-invalid' : '' ?>" id="ftahun_buat" name="ftahun_buat" value="<?= $aplikasi->tahun_buat ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('ftahun_buat') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fid_opd" class="col-md-2 col-form-label">Pengelola</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fid_opd') ? 'is-invalid' : '' ?>" id="fid_opd" name="fid_opd" value="<?= $aplikasi->id_opd ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fid_opd') ?>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('opd') ?>" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>