<?php 
/**
 * summary
 */
require_once("clase/profesor.php");
class DocentesModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function agregarProfesor($profesor){
        $profesorJson = json_decode($profesor);
        $profesor = new Profesor($profesorJson->nombre,$profesorJson->apellido,$profesorJson->correo,$profesorJson->clave,$profesorJson->tipo_persona,$profesorJson->codigo,$profesorJson->institucion);
        $sql = "INSERT INTO `persona`(`nombre`, `apellido`, `correo`, `clave`, `tipo_persona`) VALUES (:nombre,:apellido,:correo,:clave,:tipo_persona)";
        $statement=$this->conexion->prepare($sql);
        $statement->bindParam(":nombre",$profesor->nombre,PDO::PARAM_STR);
        $statement->bindParam(":apellido",$profesor->apellido,PDO::PARAM_STR);
        $statement->bindParam(":correo",$profesor->correo,PDO::PARAM_STR);
        $statement->bindParam(":clave",$profesor->clave,PDO::PARAM_STR);
        $statement->bindParam(":tipo_persona",$profesor->tipo_persona,PDO::PARAM_STR);
        if($statement->execute()){
            $id_profesor=$this->conexion->lastInsertId();
            $sql2 = "INSERT INTO `profesor`(`id_profesor`, `codigo`, `institucion`) VALUES (:id_profesor,:codigo,:institucion)";
            $this->conexion=conexion::getConexion();
            $statement=$this->conexion->prepare($sql2);
            $statement->bindParam(":id_profesor",$id_profesor,PDO::PARAM_STR);
            $statement->bindParam(":codigo",$profesor->codigo,PDO::PARAM_STR);
            $statement->bindParam(":institucion",$profesor->institucion,PDO::PARAM_STR);
            $statement->execute();

        }
    }
}
 ?>