<?php
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION['valido'] != '1') {
    //Llamada al menú de navegación
    include 'menu.php';
    $menu = new menu();
    $menu ->barraMenu();
}else{
    //Llamada al menú de navegación
    include 'menulogin.php';
    $menu = new menuLogin();
    $menu ->barraMenuLogin();
}

?>