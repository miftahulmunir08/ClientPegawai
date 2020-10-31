<?php


// $pegawai = [
//     [
//         "email" => "munir@gmail.com",
//         "nama" => "munir",
//         "gambar" => "15.png"
//     ],

//     [
//         "email" => "naila@gmail.com",
//         "nama" => "naila",
//         "gambar" => "15.png"
//     ],

//     [
//         "email" => "ilham@gmail.com",
//         "nama" => "ilham",
//         "gambar" => "15.png"
//     ],

//     [
//         "email" => "ilham@gmail.com",
//         "nama" => "ilham",
//         "gambar" => "15.png"
//     ]

// ];


// var_dump($pegawai);


?>


<div class="container mt-4">

    <div class="row">

        <div class="col-md-6">
            <h1 class="text-primary">User List</h1>
        </div>

        <div class="col-md-6">
            <a
                href="<?= base_url() ?>"
                class="btn btn-primary float-right ml-1 rounded-pill"
                style="border-radius:20px">Refresh</a>
            <a href="<?= base_url();?>pegawai/tambah" class="btn btn-success float-right" style="border-radius:20px">Add User</a>
        </div>

    </div>

<div class="row mt-3">

<?php foreach ($pegawai as $p) : ?>

<div class="col-md-6 mt-5">
    <div class="row">
        
        <div class="col-md-4">
        <img src="<?= "http://localhost/pegawai/"?>assets/foto/<?= $p['avatar']; ?>" width="130" class="rounded-circle">
        </div>
        
        <div class="col-md-8">
            <h3><?= $p['name'] ?></h3>
            <p><?= $p['email'] ?></p>
            <br>
            <a class="text-primary ml-1" href="<?= base_url()?>pegawai/detail/<?= $p['id'];?>">Detail</a>
            <a class="text-primary ml-2" href="<?= base_url()?>pegawai/ubah/<?= $p['id'];?>">Edit</a>
            <a class="text-primary ml-2" href="<?= base_url()?>pegawai/hapus/<?= $p['id'];?>"  onclick="return confirm('Are You Sure?');">Delete</a>
        </div>
</div>
    </div>

<?php endforeach; ?>