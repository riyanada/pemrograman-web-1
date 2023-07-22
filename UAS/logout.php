<?php
session_start();
session_destroy();
setcookie('FYGZe7aEHGzLzvb4', '');
header("Location: login.php");