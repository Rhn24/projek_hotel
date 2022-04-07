<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data konsumen</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_konsumen/proses_update_data') ?>" method="POST">
                            <input type="hidden" name="id_konsumen" id="id_konsumen" value="<?php echo $tbl_konsumen['id_konsumen'] ?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Depan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_depan" required="" value="<?php echo $tbl_konsumen['nama_depan'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Nama Tengah</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_tengah" required="" value="<?php echo $tbl_konsumen['nama_tengah'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Nama Belakang</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_belakang" required="" value="<?php echo $tbl_konsumen['nama_belakang'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="alamat" required="" value="<?php echo $tbl_konsumen['alamat'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kota" required="" value="<?php echo $tbl_konsumen['kota'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="provinsi" required="" value="<?php echo $tbl_konsumen['provinsi'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="negara" required="" value="<?php echo $tbl_konsumen['negara'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>No Identitas</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_identitas" required="" value="<?php echo $tbl_konsumen['no_identitas'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_tlp" required="" value="<?php echo $tbl_konsumen['no_tlp'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="email" required="" value="<?php echo $tbl_konsumen['email'] ?>"></td>
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