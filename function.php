<?php
function move_avatar($image)

{

    $extension_upload = strtolower(substr(  strrchr($image['name'], '.')  ,1));

    $name = time();

    $nomimage = str_replace(' ','',$name).".".$extension_upload;

    $name = "./images/".str_replace('','',$name).".".$extension_upload;

    move_uploaded_file($image['tmp_name'],$name);

    return $nomimage;

}

?>