<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST["insertar"])) {
    echo"at leats it works untill here :/";
    include_once("SQL_perra/class_imgUpldr.php");
    $subir = new imgUpldr;
    $subir->init($_FILES['imagen']);
    echo $subir->_r;
    session_start();
    echo $_SESSION['nombrefoto'];
    session_unset();
    session_destroy();
}
?>
<form method="post" action="upload.php" enctype="multipart/form-data" >
    <div class="form-group">
        <input type="hidden" name="insertar">
        <label for="exampleInputFile">Fotografía</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" id="imagen" name="imagen" required />
        <div class="pull-left" id="info">Imagen de preferencia cuadrada, máximo 1MB, formatos permitidos: jpeg, jpg, png y gif</div><br>
    </div>
    <button type="submit" class="btn btn-primary">Siguiente </button>
</form>