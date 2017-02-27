<?php
/**
 * Created by PhpStorm.
 * User: Guillermo
 * Date: 26/02/2017
 * Time: 14:45
 */
?>

<br>
<div id="capaformulario">
    <form id="formulario">
        <input type="text" name="equipos" onkeypress="xajax_procesar_select(xajax.getFormValues('formulario'))">
        <br>
        <input type="password" name="password">
        <br>
        <input type="email" name="email">
        <br>
        <input type="button" value="Enviar" onclick="xajax_procesar_formulario(xajax.getFormValues('formulario'))">
    </form>
</div>
<div id="mensaje">
    <h2>Equipos:</h2>
</div>