<?php
    class Usuario{
        var $idUsuario;
        var $nombre;
        var $clave;
        
         function __construct($nombre="",$clave=""){
            $this->nombre = $nombre;
            $this->clave = $clave;
    }  
        function VerificarUsuarioContrasenna(){
            $oConexion = new Conexion();
            if($oConexion->Conectar()){
            
                $db=$oConexion->objconn;
                $claveMD5=  md5($this->clave);
                $sql="Select * From acceso where nomusuario='$this->nombre' and PWDUSUARIO='$claveMD5'";
                $resultado= $db->query($sql);
                if($resultado->num_rows>=1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else{
            
                return false;
            }
        }
        
        function VerificarLocal()
        {
            $usu="ddiazj124";
            $key="1234";
            if($usu == $this->nombre && $key == $this->clave)
            {
                true;
            }
            else
            {
                false;
            }
        }
    }
?>
