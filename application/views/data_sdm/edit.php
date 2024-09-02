<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data SDM SPBE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('data_sdm') ?>">Data SDM SPBE</a></li>
                    <li class="breadcrumb-item active">Edit Data SDM SPBE</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data SDM SPBE</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                <input type="hidden" name="fid" style="display: none" value="<?= $data_sdm->nip ?>">

                <div class="card-body">
                    <div class="form-group row">
                        <label for="fnip" class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnip') ? 'is-invalid' : '' ?>" id="fnip" name="fnip" placeholder="Masukkan NIP" value="<?= $data_sdm->nip ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnip') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_pegawai" class="col-md-2 col-form-label">Nama Pegawai</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnama_pegawai') ? 'is-invalid' : '' ?>" id="fnama_pegawai" name="fnama_pegawai" placeholder="Masukkan Nama Pegawai" value="<?= $data_sdm->nama_pegawai ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_pegawai') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fjabatan" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fjabatan') ? 'is-invalid' : '' ?>" id="fjabatan" name="fjabatan" placeholder="Masukkan Jabatan" value="<?= $data_sdm->jabatan ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fjabatan') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fid_opd" class="col-md-2 col-form-label">Perangkat Daerah</label>
                        <div class="col-md-6">
                        <select class="form-control <?php echo form_error('fid_opd') ? 'is-invalid' : '' ?>" id="fid_opd" name="fdepartemen">
                            <option hidden value="" selected>Pilih Perangkat Daerah</option>
                            <?php foreach ($departemen as $key) : ?>
                                <option value="<?= $key->id_opd ?>" <?= $this->input->post('fid_opd') == "use" ? 'selected' : '' ?>><?= $key->departemen ?></option>

                            <?php endforeach ?>
                        </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fdepartemen') ?>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('data_sdm') ?>" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>