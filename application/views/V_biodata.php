<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman biodata</h1>
    <a href="<?= base_url('profile/tambah_data') ?>"> ~ Tambah data ~ </a>
    <p>nama_depan:<?=$nmdpn ?></p>
    <p>nama_belakang:<?=$nmblk ?></p>
    <p>tempat_lahir :<?=$tmpt ?></p>
    <p>tanggal_lahir:<?=$tgl?></p>
    <p>jenis_kelamin:<?=$jk ?></p>
    <p>alamat:<?=$alm ?></p>
    <p>jenjang_pendidikan:<?=$jp ?></p>
</body>

</html>