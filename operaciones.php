<?php
class operaciones{

 public $numero1;
 public $numero2;

 public function GETnumero1(){
 return $this->numero1;
 }

 public function GETnumero2(){
 return $this->numero2;
 }

 public function setNumero1($numero1){
 $this->numero1 = $numero1;
 }

 public function setNumero2($numero2){
 $this->numero2 = $numero2;
 }

 public function suma(){
 $resul = $this->GETnumero1() + $this->GETnumero2();
 return $resul;
 }

 public function resta(){
 $resul = $this->GETnumero1() - $this->GETnumero2();
 return $resul;
 }

 public function multiplicacion(){
 $resul = $this->GETnumero1() * $this->GETnumero2();
 return $resul;
 }

 public function division(){
 if($this->GETnumero2() == 0){
 echo'No se puede dividir entre cero';
 }else{
 $resul = $this->GETnumero1() / $this->GETnumero2();
 return $resul;
 }
}
}
?>

