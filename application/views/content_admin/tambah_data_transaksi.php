<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Transaksi</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_transaksi/proses_tambah_data') ?>" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Jenis Id</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_id" id="jenis_id"></td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="atas_nama" id="atas_nama"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="tanggal" id="tanggal"></td>
                                </tr>

                                <tr>
                                    <td>Waktu Sewa</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="waktu_sewa" id="waktu_sewa"></td>
                                </tr>
                                <tr>
                                    <td>Kamar Id</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kamar_id" id="kamar_id"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Pembayaran</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_pembayaran" id="jenis_pembayaran"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Simpan">
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