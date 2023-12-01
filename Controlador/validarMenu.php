
<?php
/*
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
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
*/
?>


<?php
if (isset($_SESSION['valido']) && $_SESSION['valido'] === '1') {
    // Llamada al menú de navegación para usuarios autenticados
    include 'menulogin.php';
    $menu = new menuLogin();
    $menu->barraMenuLogin();
} else {
    // Llamada al menú de navegación para usuarios no autenticados
    include 'menu.php';
    $menu = new menu();
    $menu->barraMenu();
}
?>


