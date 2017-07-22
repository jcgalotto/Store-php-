<?php 

const SERVER = "localhost";
const USUARIO = "root";
const CLAVE = "";
const  BASE = "catalogo 2";

$link = mysqli_connect(SERVER,USUARIO,CLAVE,BASE);

mysqli_set_charset($link,"utf8");


 ?>