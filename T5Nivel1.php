<?php
/* - Exercici 1
Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, 
no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres 
tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode 
makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o 
un gat (per exemple “Meu!”).*/

abstract class Animal{
    public $name;

    public function __cosnstruct(string $name){
        $this->name=$name;
    }

   abstract public function makeSound();
  
}

include 'Gato.php';
include 'Perro.php';

$gato1=new Gato("Felix");
$gato1->makeSound();

$perro1=new Perro("Felix");
$perro1->makeSound();

?>