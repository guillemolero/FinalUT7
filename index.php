<?php
/**
 * Created by PhpStorm.
 * User: Guillermo
 * Date: 26/02/2017
 * Time: 14:41
 */

require ("xajax/xajax.inc.php");

$xajax = new xajax();

function procesar_formulario($form_entrada){
    //Creo el xajaxResponse para generar una salida
    $respuesta = new xajaxResponse('ISO-8859-1');

    //validacion
    $error_form = "";
    if($form_entrada["equipos"] == ""){
        $error_form = "Debes escribir un equipo";
    }
    elseif(1 === preg_match('~[0-9]~', $form_entrada['equipos'])){
        $error_form = "Solo puedes escribir letras";
    }
    elseif(strlen($form_entrada['password'])<7){
        $error_form = "La contraseña debe de ser mínimo de 7 carácteres";
    }
    elseif(1 !== preg_match('~[0-9]~', $form_entrada['password'])){
        $error_form = "La contraseña debe contener mínimo 1 número";
    }
    elseif(!filter_var($form_entrada['email'], FILTER_VALIDATE_EMAIL)){
        $error_form = "Debes escribir un email válido";
    }

    $respuesta->addRemove("nba");
    //compruebo resultado de la validacion
    if($error_form != ""){
        //Hubo un error en el formulario
        //en la capa donde se muestran mensajes, muestro el error
        $respuesta->addCreate("mensaje", "div", "nba");
        $respuesta->addAppend("nba","innerHTML","<span style='color:red;'>$error_form</span>");
    } else {
        $respuesta->addCreate("mensaje", "div", "nba");
        $respuesta->addAssign("nba","innerHTML","<span style='color:blue;'><h2>TODO CORRECTO</h2></span>");
    }


    return $respuesta;
}

function procesar_select($form_entrada){

    $nombre = $form_entrada['equipos'];

    //Conexion con BBDD
    $bbdd = new mysqli("localhost", "root", "", "xajax");
    $select = "select * from nba where UPPER(equipo) like UPPER('$nombre%')";
    $resultado = $bbdd->query($select);
    $datos = $resultado->fetch_row();

    //Creo el xajaxResponse para generar una salida
    $respuesta = new xajaxResponse('ISO-8859-1');
    $respuesta->addRemove("nba");

    while($datos != null){
        $respuesta->addCreate("mensaje", "div", "nba");
        $respuesta->addAppend("nba", "innerHTML", "$datos[0]<br>");
        $datos=$resultado->fetch_row();
    }




    return $respuesta;
}

//Asociamos la funcion creada antoriormente al objeto xajax
$xajax->registerFunction("procesar_formulario");
$xajax->registerFunction("procesar_select");
//El objeto xajax tiene que procesar cualquier peticion
$xajax->processRequests();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>XAJAX Select BD</title>
    <?php $xajax->printJavascript("xajax/"); ?>
    <style>
        input {
            display: block;
            margin-top: 10px;
        }
        p {
            font-size: 12px;
            margin-top: 1px;
        }
    </style>
</head>
<body>
    <?php
        include "include/form.php";
    ?>
</body>
</html>