<section class="page-section bg-light" id="team">
            <div class="container">
                <div class ="row">
                    <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Profile</h2>
            <h3 class="section-subheading text-muted">Selamat datang di hotel HAN-HAN</h3>

            <form action="<?= base_url('index.php/profile/proses_ganti_password') ?>" method="post">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <td class="text-start" width="15%">Email</td>
                        <td>:</td>
                        <td class="text-start"><input class="form-control" name="email" type="text" value="<?= $user['email']?>" readonly></td>
                    </tr>
                    <tr>
                        <td class="text-start" >password</td>
                        <td>:</td>
                        <td class="text-start"><input class="form-control" name="password1" type="password" value="<?= $user['password']?>"></td>
                    </tr>
                    <tr>
                        <td class="text-start">konfirmasi password</td>
                        <td>:</td>
                        <td class="text-start"><input class="form-control" name="password2" type="password" value="<?= $user['password']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>

</form>
                   </div>
                </div>
            </div>
</section>