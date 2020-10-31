<?php 

// var_dump($mahasiswa);

?>

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">

<div class="card mt-5">
  <div class="card-header">
    Detail Data Pegawai
  </div>
  <div class="card-body text-center">
  <img src="<?= "http://localhost/pegawai/"?>assets/foto/<?= $pegawai['avatar']; ?>" width="130" class="rounded-circle">
    <h5 class="card-title"><?= $pegawai['name']; ?></h5>
    <p class="card-text"><?= $pegawai['email'];?></p>
    <p class="card-text"><?= $pegawai['phone'] ?></p>
    <a href="<?=base_url()?>/pegawai" class="btn btn-primary">Kembali</a>
  </div>
</div>


</div>
</div>
</div>