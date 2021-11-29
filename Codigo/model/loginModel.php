<?php 

require_once("clase/essagas.php");
/**
 * summary
 */
class loginModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function valida($email,$pass){
    	try {
    	$sql="SELECT p.id,p.nombre,p.apellido,p.telefono,p.tipo_persona FROM `persona` p INNER JOIN essagas es ON es.id_essagas=p.id WHERE p.correo=:email AND p.clave=:clave";
    	$statement=$this->conexion->prepare($sql);
        $statement->bindParam(":email",$email,PDO::PARAM_STR);
        $statement->bindParam(":clave",$pass,PDO::PARAM_STR);
        $tipoUsuario="";
    	if ($statement->execute()) {
    		$row = $statement->fetch(PDO::FETCH_ASSOC);
            if ($row["tipo_persona"]=="Administrador") {
                $tipoUsuario=$row["tipo_persona"];
                    $administrador = new Essagas($row["id"],$row["nombre"],$row["apellido"],$row["telefono"],$row["saldo"],$email,$pass);    
                    session_start();
                    $_SESSION['usuario']=$administrador;
                return json_encode(array("estado" => 1,"tipo"=>$tipoUsuario));
            }else{
                return json_encode(array("estado" => 0));    
            }
    	} else{
            return json_encode(array("estado" => 0));
        }
    	} catch (Exception $e) {
    		return json_encode(array("estado" => -1));
    	}
    }
}
 ?>