<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Transaksi</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_transaksi/proses_update_data') ?>" method="POST">
                            <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $tbl_transaksi['id_transaksi'] ?>">
                            <table class="table">
                                <tr>
                                    <td>Jenis Id</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_id" required="" value="<?php echo $tbl_transaksi['jenis_id'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="atas_nama" required="" value="<?php echo $tbl_transaksi['atas_nama'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="tanggal" required="" value="<?php echo $tbl_transaksi['tanggal'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Waktu Sewa</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="waktu_sewa" required="" value="<?php echo $tbl_transaksi['waktu_sewa'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kamar Id</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kamar_id" required="" value="<?php echo $tbl_transaksi['kamar_id'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Pembayaran</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_pembayaran" required="" value="<?php echo $tbl_transaksi['jenis_pembayaran'] ?>"></td>
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