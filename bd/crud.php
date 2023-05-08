<?php
include_once './bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$DEPARTAMENTO = (isset($_POST['DEPARTAMENTO'])) ? $_POST['DEPARTAMENTO'] : '';
$MUNICIPIO = (isset($_POST['MUNICIPIO'])) ? $_POST['MUNICIPIO'] : '';
$NIVEL_EDUCATIVO = (isset($_POST['NIVEL_EDUCATIVO'])) ? $_POST['NIVEL_EDUCATIVO'] : '';
$SECTOR_SOCIOECONOMICO = (isset($_POST['SECTOR_SOCIOECONOMICO'])) ? $_POST['SECTOR_SOCIOECONOMICO'] : '';
$TIPO_PARTICIPANTE = (isset($_POST['TIPO_PARTICIPANTE'])) ? $_POST['TIPO_PARTICIPANTE'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO info_vende (DEPARTAMENTO, MUNICIPIO, NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE) VALUES('$DEPARTAMENTO', '$MUNICIPIO', '$NIVEL_EDUCATIVO', '$SECTOR_SOCIOECONOMICO', '$TIPO_PARTICIPANTE') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT DEPARTAMENTO, MUNICIPIO, NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE FROM info_vende ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;             
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
