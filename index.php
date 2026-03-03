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
   return "Hola " . $this->nombre . " tu edad es " . $this->edad;
} else {
  return "meeh";
}
  }
}
$nombre= new nombres("Eddi", 80);
$nombre->saludar1();

echo $nombre->saludar1();
$nombre= new nombres("Eddi", 80);
echo "<br><br>";
echo $nombre->saludar1();
$nombre= new nombres("luis", 80);
echo "<br><br>";
echo $nombre->saludar1();