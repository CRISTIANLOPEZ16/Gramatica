<?php 

require_once("clase/essagas.php");
/**
 * summary
 */
require_once("clase/Profesor.php");
require_once("clase/Alumno.php");
require_once("clase/Administrador.php");

class loginModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function valida($correo,$clave){
    	try {
    	$sql="SELECT p.id,p.nombre,p.apellido,p.telefono,p.tipo_persona FROM `persona` p WHERE p.correo=:correo AND p.clave=:clave";
    	$statement=$this->conexion->prepare($sql);
        $statement->bindParam(":correo",$,PDO::PARAM_STR);
        $statement->bindParam(":clave",$clave,PDO::PARAM_STR);
        $tipoUsuario="";
    	if ($statement->execute()) {
    		$row = $statement->fetch(PDO::FETCH_ASSOC);
            if ($row["tipo_persona"]=="Administrador") {
                $tipoUsuario=$row["tipo_persona"];
                    $usuario = new Administrador($row["id"],$row["nombre"],$row["apellido"],$row["telefono"],$row["saldo"],$correo,$clave);
                    session_start();
                    $_SESSION['usuario']=$usuario;
                return json_encode(array("estado" => 1,"tipo"=>$tipoUsuario));
            }else if($row["tipo_persona"]=="Profesor"){
                $tipoUsuario=$row["tipo_persona"];
                    $usuario = new Profesor($row["id"],$row["nombre"],$row["apellido"],$row["telefono"],$row["saldo"],$correo,$clave);    
                    session_start();
                    $_SESSION['usuario']=$usuario;
                return json_encode(array("estado" => 2);
            }else if($row["tipo_persona"]=="Alumno"){
                $tipoUsuario=$row["tipo_persona"];
                    $usuario = new Alumno($row["id"],$row["nombre"],$row["apellido"],$row["telefono"],$row["saldo"],$correo,$clave);    
                    session_start();
                    $_SESSION['usuario']=$usuario;
                return json_encode(array("estado" => 3);
            }else{return json_encode(array("estado" => 0));}
    	} else{
            return json_encode(array("estado" => 0));
        }
    	} catch (Exception $e) {
    		return json_encode(array("estado" => -1));
    	}
    }
}
 ?>