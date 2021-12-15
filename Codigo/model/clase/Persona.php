<?php
class Persona
{
	public $id;
	public $nombre;
	public $apellido;
	public $correo;
	public $clave;
	public $tipo_persona;


	public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }

    public function __construct4($id,$nombre,$apellido,$correo)
    { 
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCorreo($correo);
        $this->setId($id);
    }


	public function __construct5($id,$nombre,$apellido,$correo,$clave)
    { 
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCorreo($correo);
        $this->setClave($clave);
        $this->setId($id);
    }

    public function __construct6($id,$nombre,$apellido,$correo,$clave,$tipo_persona)
    { 
    	$this->setId($id);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCorreo($correo);
        $this->setClave($clave);
        $this->setTipo_persona($tipo_persona);
    }

	public function setId($id){
		$this->id = $id;
	}

	public function getId($id){
		return $this->$id;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre($nombre){
		return $this->$nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function getApellido($apellido){
		return $this->$apellido;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getCorreo($correo){
		return $this->$correo;
	}

	public function setClave($clave){
		$this->clave = $clave;
	}

	public function getClave($clave){
		return $this->$clave;
	}

	public function setTipo_persona($tipo_persona){
		$this->tipo_persona = $tipo_persona;
	}

	public function getTipo_persona($tipo_persona){
		return $this->$tipo_persona;
	}

	

}


?>