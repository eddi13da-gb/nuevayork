<?php
class Nombres {
  public string $nombre;
  public int $edad;

  public function __construct(string $nombre, int $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function saludar1() {

    if ($this->edad >= 18) {
        return "Hola " . $this->nombre . " tu edad es " . $this->edad . " y eres mayor de edad.";
    } else {
        return "Hola " . $this->nombre . " tu edad es " . $this->edad . " y eres menor de edad.";
    }

  }
}

$nombre = new Nombres("Eddi", 30);

echo $nombre->saludar1();