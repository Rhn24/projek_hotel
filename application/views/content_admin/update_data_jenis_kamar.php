<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Jenis Kamar</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_jenis_kamar/proses_update_data') ?>" method="POST">
                            <input type="hidden" name="id_jenis" id="id_jenis" value="<?php echo $tbl_jenis_kamar['id_jenis'] ?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Jenis Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_jenis_kamar" required="" value="<?php echo $tbl_jenis_kamar['nama_jenis_kamar'] ?>"></td>
                                </tr>

                                <tr>
                                    <td>keterangan</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="keterangan" required="" cols="10" rows="6"><?php echo  $tbl_jenis_kamar['keterangan'] ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="harga" required="" value="<?php echo $tbl_jenis_kamar['harga'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="foto" required="" value="<?php echo $tbl_jenis_kamar['foto'] ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>