<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('alat') ?>">Data kategori</a></li>
                    <li class="breadcrumb-item active">Edit Data kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data kategori</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                <input type="hidden" name="fid" style="display: none" value="<?= $kategori->id_kategori ?>">

                <div class="card-body">
                    <div class="form-group row">
                        <label for="fid_kategori" class="col-md-2 col-form-label">Kode kategori</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fid_kategori') ? 'is-invalid' : '' ?>" id="fid_kategori" name="fid_kategori" placeholder="Enter kode kategori" value="<?= $kategori->id_kategori ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fid_kategori') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fkategori" class="col-md-2 col-form-label">Kategori</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fkategori') ? 'is-invalid' : '' ?>" id="fkategori" name="fkategori" placeholder="Enter kategori" value="<?= $kategori->kategori ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fkategori') ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('kategori') ?>" class="btn btn-secondary">Batal</a>

                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>