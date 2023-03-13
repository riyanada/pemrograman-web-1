<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jenis_kelamin = 'Laki-laki';
    $nama_lengkap = 'Riyanada';
    $umur = 23;
    $berat = 56;
    $tinggi = 160;
    $menikah = false;
    ?>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?php echo $nama_lengkap; ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $jenis_kelamin; ?>
            </td>
        </tr>
        <tr>
            <td>
                Umur
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $umur; ?>
            </td>
        </tr>
        <tr>
            <td>
                Berat
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $berat; ?>
            </td>
        </tr>
        <tr>
            <td>
                Tinggi
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $tinggi; ?>
            </td>
        </tr>
        <tr>
            <td>
                Status Pernikahan
            </td>
            <td>
                :
            </td>
            <td>
                <?= ($menikah) ? "Kawin" : "Belum Kawin" ;?>
            </td>
        </tr>
    </table>
</body>

</html>