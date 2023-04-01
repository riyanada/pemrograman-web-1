<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP dengan Form</title>
    <link rel="shortcut icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {

        // Fungsi konversi suhu Celcius ke Reamur
        function celciusToReamur($val)
        {
            return $val * (4 / 5);
        }

        // Fungsi konversi suhu Celcius ke Fahrenheit
        function celciusToFahrenheit($val)
        {
            return ($val * 9 / 5) + 32;
        }

        // Fungsi konversi suhu Celcius ke Kelvin
        function celciusToKelvin($val)
        {
            return $val + 273.15;
        }

        $suhu = $_POST['inputSuhu'];
        $satuan = $_POST['inputSatuan'];

        switch ($satuan) {
            case 'r':
                $hasil = "Hasil Konversi ke Reamur : " . celciusToReamur($suhu);
                break;

            case 'f':
                $hasil = "Hasil Konversi ke Fahrenheit : " . celciusToFahrenheit($suhu);
                break;

            case 'k':
                $hasil = "Hasil Konversi ke Kelvin : " . celciusToKelvin($suhu);
                break;

            default:
                $hasil = "Pilihan tidak tersedia";
                break;
        }
    }
    ?>
    <div class="container">
        <h1 style="text-align: center;">Konversi Satuan Suhu</h1>
        <div class="row">
            <div class="col-sm">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="inputSuhu">Suhu</label>
                        <input type="number" class="form-control" id="inputSuhu" name="inputSuhu" placeholder="Input nilai">
                    </div>
                    <div class="form-group">
                        <label for="sat">Satuan</label>
                        <select class="form-control" id="sat" name="inputSatuan">
                            <option value="r">Reamur</option>
                            <option value="f">Fahrenheit</option>
                            <option value="k">Kelvin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <a class="btn btn-light" onclick="window.location.href=window.location.href">Reset</a>
                </form>
            </div>
            <div class="col-sm">
                <?php  ?>
                <h5><?= (isset($hasil)) ? $hasil : '';?></h5>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>