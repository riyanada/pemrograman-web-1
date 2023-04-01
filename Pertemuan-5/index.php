<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Absen IF-4K</title>
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            width: 80%;
            margin-left: 10%;
            text-align: center;
        }

        table {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    // inisialisasi nomor urut
    $no = 1;

    //data Absensi
    $absensi = [
        array('nama' => 'Andre Gunawan', 'nim' => 'D112121051'),
        array('nama' => 'Cepi Setiadi', 'nim' => 'D112121052'),
        array('nama' => 'Encep Rahman Armana', 'nim' => 'D112121053'),
        array('nama' => 'Ikhsan Fauzan', 'nim' => 'D112121054'),
        array('nama' => 'Sarah Fadilah Sulaeman', 'nim' => 'D112121055'),
        array('nama' => 'Wahyu Safrizal', 'nim' => 'D112121056'),
        array('nama' => 'Nur Hidayat', 'nim' => 'D112121057'),
        array('nama' => 'Panji Wiranto', 'nim' => 'D112121058'),
        array('nama' => 'Riyan', 'nim' => 'D112121062'),
        array('nama' => 'Alma Sulaiman', 'nim' => 'D112111015')
    ];

    usort($absensi, function ($a, $b) {
        return strcmp($b['nama'], $a['nama']);
    });

    ?>
    <h1>Daftar Mahasiswa Kelas IF-4K</h1>
    <h5>Tahun Angkatan 2021</h5>
    <hr>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
            </tr>
        </thead>
        <?php foreach ($absensi as $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['nim'] ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>