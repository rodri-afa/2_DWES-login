<?php
class Usuario
{
    private $nombre;
    private $passwd;
    private $estado;
    private $hobbies;

    function __construct($nombre, $passwd, $estado, $hobbies)
    {
        $this->nombre = $nombre;
        $this->passwd = $passwd;
        $this->estado = $estado;
        $this->hobbies = $hobbies;
    }

    /* ********** Nombre ********** */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    /* ********** Passwd ********** */
    public function getPasswd()
    {
        return $this->passwd;
    }
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }


    /* ********** Estado ********** */
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


    /* ********** Hobbies ********** */
    public function getHobbies()
    {
        return $this->hobbies;
    }
    public function setHobbies($arrayHobbies)
    {
        $this->hobbies = $arrayHobbies;
    }
    public function addHobbie($hobbie)
    {
        array_push($this->hobbies, $hobbie);
    }

    /* ********** To String ********** */
    public function __toString()
    {
        $hobbies = "";
        foreach ($this->getHobbies() as $key => $hobbie) { //foreach para concatenar todos los hobbies en un string
            $separacion = $key < count($this->getHobbies()) - 1 ? ", " : ""; //si es el último hobbie (count-1), no le añado una coma después sino comillas vacías
            $hobbies = $hobbies . $hobbie . $separacion;
        };

        return "
            <pre> 
            *******
            <b>Nombre:</b> " . $this->getNombre() . "
            <b>Estado:</b> " . $this->getEstado() . "
            <b>Hobbies:</b> " . $hobbies . "
            *******
            </pre>"; //la etiqueta <pre></pre> permite meter texto preformateado, y respeta los saltos de línea y tabulaciones.
    }
}


$usuario1 = new Usuario('Juan', 'pass123', '🦾', ['correr', 'nadar', 'programar']);
$usuario2 = new Usuario('Marta', 'securePass123', '🏔', ['fotografía', 'kayak', 'montaña']);
$usuario3 = new Usuario('Sofía', 'PaamayimNekudotayim', '🤓', ['jugar al LOL', 'jugar al WOW', 'jugar al Valorant']);

$usuariosPosibles = [$usuario1, $usuario2, $usuario3];
