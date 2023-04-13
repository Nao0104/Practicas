<?php
namespace EJEMPLOS\POO;

class Mascota {
    private $nombre;
    private $raza;
    private $edad;
    private $peso;

    public function __construct($name, $race, $year, $weight ) {
        $this->nombre = $name;
        $this->raza = $race;
        $this->edad = $year;
        $this->peso = $weight;
    }
    public function setNombre($name) {
        $this->nombre = $name;
    }
    public function setRaza($raza) {
        $this->raza = $race;
    }
    public function setEdad($year) {
        $this->edad = $year;
    }
    public function setPeso($weight) {
        $this->peso = $weight;
    }

    public function mostrar() {
        echo "<ul>";
        echo "</br><li>Nombre: $this->nombre</li>";
        echo "<li>Raza: $this->raza</li>";
        echo "<li>Edad: $this->edad</li>";
        echo "<li>Peso: $this->peso</li>";
        echo "</ul>";
    }
}

class Mascota2 {
    private $nombre;
    private $raza;
    private $edad;
    private $peso;
    private $foto;

    public function __construct($name, $race, $year, $weight, $photo ) {
        $this->nombre = $name;
        $this->raza = $race;
        $this->edad = $year;
        $this->peso = $weight;
        $this->foto = $photo;
    }
    public function setNombre($name) {
        $this->nombre = $name;
    }
    public function setRaza($raza) {
        $this->raza = $race;
    }
    public function setEdad($year) {
        $this->edad = $year;
    }
    public function setPeso($weight) {
        $this->peso = $weight;
    }
    public function setEnlace($photo) {
        $this->foto = $photo;
    }
    

    public function mostrar() {
        echo "<ul>";
        echo "</br><li>Nombre: {$this->nombre}</li>";
        echo "<li>Raza: {$this->raza}</li>";
        echo "<li>Edad: {$this->edad}</li>";
        echo "<li>Peso: {$this->peso}</li>";
        if (!empty($this->foto)) {
            echo "<li><img src='{$this->foto}'></li>";
        }
        echo "</ul>";
    }
}

?>