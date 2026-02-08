<?php
session_start();

$controlador = $_GET['controlador'] ?? 'producto';
$accion = $_GET['accion'] ?? 'index';

$archivoControlador = __DIR__ . '/../app/controllers/' . ucfirst($controlador) . 'Controller.php';

if (!file_exists($archivoControlador)) {
    die("Controlador no encontrado");
}

require_once $archivoControlador;

$claseControlador = ucfirst($controlador) . 'Controller';

if (!class_exists($claseControlador)) {
    die("Clase no encontrada");
}

$instancia = new $claseControlador();

if (!method_exists($instancia, $accion)) {
    die("Método '$accion' no encontrado en $claseControlador");
}

$instancia->$accion();
