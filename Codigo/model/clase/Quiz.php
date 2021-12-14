<?php

class Quiz{

	public $autor;
	public $titulo;
	public $descripcion;
	public $fecha_inicio;
	public $fecha_fin;

	public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }

	public function __construct5($autor,$titulo,$descripcion,$fecha_inicio,$fecha_fin)
    { 
    	$this->setAutor($autor);
        $this->setTitulo($titulo);
        $this->setDescripcion($descripcion);
        $this->setFechaInicio($fecha_inicio);
        $this->setFechaFin($fecha_fin);
    }




    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     *
     * @return self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * @param mixed $fecha_inicio
     *
     * @return self
     */
    public function setFechaInicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }

    /**
     * @param mixed $fecha_fin
     *
     * @return self
     */
    public function setFechaFin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }
}



?>
