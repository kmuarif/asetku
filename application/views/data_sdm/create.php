<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data SDM SPBE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('data_sdm') ?>">Data SDM SPBE</a></li>
                    <li class="breadcrumb-item active">Tambah Data SDM SPBE</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data SDM SPBE</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fnip" class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnip') ? 'is-invalid' : '' ?>" id="fnip" name="fnip" placeholder="Masukkan NIP" value="<?= $this->input->post('fnip'); ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnip') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_pegawai" class="col-md-2 col-form-label">Nama Pegawai</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fnama_pegawai') ? 'is-invalid' : '' ?>" id="fnama_pegawai" name="fnama_pegawai" placeholder="Masukkan Nama Pegawai" value="<?= $this->input->post('fnama_pegawai'); ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_pegawai') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fjabatan" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control <?= form_error('fjabatan') ? 'is-invalid' : '' ?>" id="fjabatan" name="fjabatan" placeholder="Masukkan Jabatan" value="<?= $this->input->post('fjabatan'); ?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fjabatan') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fnama_opd" class="col-md-2 col-form-label">Perangkat Daerah</label>
                        <div class="col-md-6">
                        <select class="form-control <?php echo form_error('fnama_opd') ? 'is-invalid' : '' ?>" id="fnama_opd" name="fnama_opd">
                            <option hidden value="" selected>Pilih Perangkat Daerah</option>
                            <?php foreach ($opd as $key) : ?>
                                <option value="<?= $key->nama_opd ?>" <?= $this->input->post('fnama_opd') == "use" ? 'selected' : '' ?>><?= $key->nama_opd ?></option>

                            <?php endforeach ?>
                        </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_opd') ?>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('data_sdm') ?>" class="btn btn-secondary">Batal</a>
                </div>

            </form>
        </div>
        <!-- /.card -->
    </div>
</div>