<?php
session_start();
$protocolo = 'http://';

$route = $protocolo . $_SERVER['HTTP_HOST'] . '/' . 'ispeka' . '/';
$imagens = $route . 'storage/images/';
$estilos = $route . 'public/css/';
$js = $route . 'public/js/';
$plugins = $route . 'public/plugins';

define('ROUTE', $route);
define('IMAGENS', $imagens);
define('ESTILOS', $estilos);
define('JS', $js);
define('PLUGINS', $plugins);

if (isset($_SESSION['id-cliente'])) {
    $id_cliente = $_SESSION['id-cliente'];
}
