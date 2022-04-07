<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel konsumen
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data konsumen
                <a href="<?= base_url('index.php/data_konsumen/tambah_data') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id konsumen</th>
                            <th>nama_depan</th>
                            <th>nama_tengah</th>
                            <th>nama_belakang</th>
                            <th>alamat</th>
                            <th>kota</th>
                            <th>provinsi</th>
                            <th>negara</th>
                            <th>no_identitas</th>
                            <th>no_tlp</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id konsumen</th>
                            <th>nama_depan</th>
                            <th>nama_tengah</th>
                            <th>nama_belakang</th>
                            <th>alamat</th>
                            <th>kota</th>
                            <th>provinsi</th>
                            <th>negara</th>
                            <th>no_identitas</th>
                            <th>no_tlp</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_konsumen as $tjk) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tjk["nama_depan"] ?></td>
                                <td><?php echo $tjk["nama_tengah"] ?></td>
                                <td><?php echo $tjk["nama_belakang"] ?></td>
                                <td><?php echo $tjk["alamat"] ?></td>
                                <td><?php echo $tjk["kota"] ?></td>
                                <td><?php echo $tjk["provinsi"] ?></td>
                                <td><?php echo $tjk["negara"] ?></td>
                                <td><?php echo $tjk["no_identitas"] ?></td>
                                <td><?php echo $tjk["no_tlp"] ?></td>
                                <td><?php echo $tjk["email"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/data_konsumen/update_data/') ?><?php echo $tjk['id_konsumen'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/data_konsumen/hapus_data/') ?><?php echo $tjk['id_konsumen'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>