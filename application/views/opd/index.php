<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Perangkat Daerah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Perangkat Daerah</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <a href="<?= base_url('opd/create') ?>" class="btn btn-sm btn-primary float-right"> + Tambah</a>

                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <table id="TabelUser" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Kode PD</th>
                                    <th>Nama Perangkat Daerah</th>
                                    <th>Nama PD</th>
                                    <th style="width: 10px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($opd as $key) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $key->id_opd ?></td>
                                        <td><?= $key->nama_opd ?></td>
                                        <td><?= $key->nama_opd_pendek ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url('opd/edit/') . $key->id_opd ?>"><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-detail" data-tolltip="tooltip" data-placement="top" <button type="button" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt" data-tolltip="tooltip" data-placement="top" title="Edit"></i></button></a>

                                                <button type="button" class="btn btn-default btn-sm" onclick="deleteConfirm('<?= base_url() . 'opd/delete/' . $key->id_opd ?>')" data-tolltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>






<!-- page script -->
<script>
    $(document).ready(function() {
        $('#TabelUser').DataTable();
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>
<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                    </div>
                    <div class="col-9 pt-2">
                        <h5>Apakah anda yakin?</h5>
                        <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirm -->
<script type="text/javascript">
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>