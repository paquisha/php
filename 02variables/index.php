<?php
$usuario = "Israel Parra";
echo $usuario;
$usuario = "Cursosdesarrolloweb";
echo "<br />";
echo $usuario;
echo "<br />";
$edad = 39;
echo $edad;
echo "<br />";
$precioCurso = 9.99;
echo $precioCurso;
echo "<br />";
$tecnologias = [
    "php", "javascript", "vuejs", "laravel", "react", "wordpress"
];
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br />";
echo $tecnologias[2];
echo "<br />";
$usuarioObjeto = new stdClass;
$usuarioObjeto->nombre = "Israel Parra";
$usuarioObjeto->edad = 39;
echo "<pre>";
var_dump($usuarioObjeto);
echo "</pre>";
echo $usuarioObjeto->nombre;
