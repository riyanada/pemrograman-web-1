<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/basic-ui-169/32/Login-256.png"
        type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card login-content shadow-lg border-0">
                    <div class="card-body">
                        <h1 class="p-3 text-logo">
                            Data Mahasiswa
                        </h1>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIM</th>
                                    <th>Program Studi</th>
                                    <th>Priode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "config.php";
                                $query = "SELECT a.nama_lengkap, a.nim, b.program_studi, a.periode 
                                            FROM mahasiswa a 
                                            INNER JOIN program_studi b ON a.program_studi = b.ps_id";
                                $result = mysqli_query($conn, $query);
                                $id = 1;
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $id++ ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_lengkap'] ?>
                                        </td>
                                        <td>
                                            <?= $row['nim'] ?>
                                        </td>
                                        <td>
                                            <?= $row['program_studi'] ?>
                                        </td>
                                        <td>
                                            <?= $row['periode'] ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIM</th>
                                    <th>Program Studi</th>
                                    <th>Priode</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="footer">
                        <p class="text-center">© 2023 Hand-crafted & Made with D112121062</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>