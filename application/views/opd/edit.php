<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Perangkat Daerah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('alat') ?>">Data Perangkat Daerah</a></li>
                    <li class="breadcrumb-item active">Edit Data Perangkat Daerah</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input Data Perangkat Daerah</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fid_opd" class="col-md-2 col-form-label">Kode PD</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fid_opd') ? 'is-invalid' : '' ?>" id="fid_opd" name="fid_opd" placeholder="Enter Kode Perangkat Daerah" value="<?= $opd->id_opd ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fid_opd') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_opd" class="col-md-2 col-form-label">Nama Perangkat Daerah</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnama_opd') ? 'is-invalid' : '' ?>" id="fnama_opd" name="fnama_opd" placeholder="Enter Nama Perangkat Daerah" value="<?= $opd->nama_opd ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_opd') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_opd_pendek" class="col-md-2 col-form-label">Nama PD</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnama_opd_pendek') ? 'is-invalid' : '' ?>" id="fnama_opd_pendek" name="fnama_opd_pendek" placeholder="Enter Nama PD" value="<?= $opd->nama_opd_pendek ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_opd_pendek') ?>
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