<?php
    include '../Libreria.php';
?>
<?php
    $oUsuario = new Usuario($_REQUEST["txtNomUsuario"],$_REQUEST["txtClave"]);
    
    if($oUsuario->VerificarLocal())
    {
        echo 'Todo bien';
    }
    else {
        echo 'Todo mal :c';
    }
?>

