<?php
session_start();

if (!isset($_SESSION['username'])) { ?>
    <script>alert("Anda harus masuk terlebih dahulu!");
        window.location.href = "login.php";</script>
    <?php
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/basic-ui-169/32/Login-256.png"
        type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card login-content shadow-lg border-0">
                    <div class="card-body">
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
                                <?= $_SESSION['success']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php }
                        unset($_SESSION['success']); ?>
                        <div class="text-center">
                            <img class="logo"
                                src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-4/24/home-alt-256.png">
                        </div>
                        <br>
                        <h1 class="p-3 text-logo">
                            Selamat datang
                            <?= (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?>
                        </h1>
                        <p class="text-light text-center fs-6">
                            Anda login menggunakan email
                            <span class="text-primary">
                                <?= (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; ?>
                            </span>
                        </p>
                        <br>
                        <hr>
                        <div class="text-center">
                            <a href="logout.php"><button type="submit"
                                    class="btn btn-primary btn-sm border-0">Logout</button></a>
                        </div>
                    </div>
                    <div class="footer">
                        <p class="text-center">© 2023 Hand-crafted & Made with D112121062</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
    <!-- Bootstrap 5 Alpha JavaScript Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>