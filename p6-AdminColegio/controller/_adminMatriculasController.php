<?php
$reload = false;


if ( isset($_POST['alumno']) && isset($_POST['curso']) ){
    
    uneAlumnoCurso($_POST['alumno'], $_POST['curso']);
 
    $reload=true;
}



if (isset($_POST['asignacion'])){
    borraMatricula($_POST['asignacion']);
        $reload=true;

    
}