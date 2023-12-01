<?php
// COMPRUEBA QUE EL USUARIO ESTÁ AUTENTIFICADO
if ($_SESSION['valido'] != '1') {
    // Llamada al menú de navegación
    include 'menu.php';
    $menu = new menu();
    $menu->barraMenu();
} elseif ($_SESSION['valido'] == '1') {
    // Llamada al menú de navegación
    include 'menulogin.php';
    $menu = new menuLogin();
    $menu->barraMenuLogin();
}