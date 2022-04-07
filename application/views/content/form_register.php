<section class="page-section bg-light" id="team">
            <div class="container">
             
            <h3>Register Disini ↓</h3>
            <marquee><h6>Sudah Punya Akun ???</h6></marquee>
           
            
<form action="<?= base_url('index.php/auth/proses_register') ?>" method="post">
  <div class="container">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">nama lengkap</label>
    <input name="nama_lengkap" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">no hp</label>
    <input name="no_hp" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="container"><button type="submit" class="btn btn-primary">Daftar</button>
  <a href="<?= base_url("index.php/auth")?>">kembali</a>
</form>
</div>
</section>