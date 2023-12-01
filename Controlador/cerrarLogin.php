<?php
session_start();
session_destroy();
$_SESSION['valido'] = '2';
echo '<script>window.location.replace("../index.php");</script>';
?>
