<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form id="frmUsuario">
            <label>Nombre Usuario</label><input type="text" name="txtNomUsuario" id="txtNomUsuario"><br>
            <label>Contraseña </label><input type="password" name="txtClave" id="txtClave"><br>
            <input type="button" id="btnEnviar" onclick="" value="Enviar"><br>
        </form>
        
    </body>
    <script>
        $(document).ready(function(){
            $("#btnEnviar").click(function(){
                /*$("form").hide();
                alert("Ocultaste el formulario " + $("#txtNomUsuario").val());*/
                if($("#txtNomUsuario").val()!="" && $("#txtClave").val()!="")
                {
                    $("#frmUsuario").submit();
                }
                else
                {
                    alert("Debe Agregar nombre de Usuario y Clave");
                }
            });
        });
    </script>
</html>
