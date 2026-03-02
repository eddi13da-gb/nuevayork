<?php
class nombres {
  public string $nombre;
  public int $edad;

  public function __construct(string $nombre, int $edad){
    $this->nombre=$nombre;
    $this->edad=$edad;
  }
public function saludar1(){
if ($this->edad >=18) {
    echo "Hola " . $this->nombre . " tu edad es " . $this->edad;
} else {
  echo"meeh";
}
  }
}
$nombre= new nombres("Eddi", 80);
$nombre->saludar1();
