<?php

class car{
  public $color;
  public $power;
  public $price;

  public function go()
  {

  }
  public function breake()
  {

  } 
}

$mycar = new Car;
$mycar->color = 'blue';
$mycar->power = 58;
$mycar->price = 100000;



class wife
{
private $name;
private $boobs;
private $pussy;
public $face;

public function __construct($name, $boobs,$pussy,$face)
{
$this->changeName($name);
$this->boobs=$boobs;
$this->pussy=$pussy;
$this->face=$face;
}


public function pretty(){
}
public function suck(){

}
public function fuck(){

}
//Setter
public function changeName($name){
  if(is_string($name))
  {
  $this->name=$name;
  }  else{
  die('Имя Жены может состоять только из букв. Ты шо сексист тварь такая?');
}}
// Getter
function showname()
{
  return $this->name;
}
}

$wife1 = new wife('Kitty','apple','delicious','very pretty');
$wife2 = new wife('Mouse','orange','pelmeshek','very pretty');
$wife3 = new wife('Sun','Nice','hairy_pussy','funny but very pretty');
echo "<pre>";
print_r($wife1);
print_r($wife2);
print_r($wife3);
print_r($mycar);
echo "</pre>";

$wife2->changeName('Tarakashka');

echo $wife2->showname();

?>