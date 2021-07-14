<?php
$reload = false;

/* comprobamos si he activado el forumario de crear asignatura*/
if ( isset($_POST['name']) && isset($_POST['color']) && !isset($_POST['accion'])) {
    generaAsignatura($_POST['name'],$_POST['color']);
   
    $reload=true;
}




if ( (isset($_POST['borra-id-asigns'])) &&  (isset($_POST['borra']))){
   
    $lista =idteacherfromidclass($_POST['borra-id-asigns']);/* $sql = 'SELECT id_teacher FROM class WHERE id_class="'.$id.'"';*/
    $idprofesor=$lista[1]->id_teacher;
    
    borraAsignatura($_POST['borra-id-asigns']); /* $sql = 'DELETE FROM  class WHERE id_class="'.$id.'"';*/
   
    unasignateacher($idprofesor);/*     $sql = 'UPDATE teachers SET asignado=NULL WHERE id_teacher="'.$id.'"';*/
    $reload=true;

}

if ( (isset($_POST['borra-id-asigns'])) &&  (isset($_POST['edita']))){

    $editoAsignatura = editamosAsignatura($_POST['borra-id-asigns']);
    $editamos = true;
    
}else{
    $editamos=false;
}

if ( (isset($_POST['accion'])) && ($_POST['accion']=='Edita') ){
    actualizAsignatura($_POST['name'], $_POST['color'], $_POST['id']);
      
        $reload=true;


}