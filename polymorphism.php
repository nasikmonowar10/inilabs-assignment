<?php
interface Animal{
    public function makesound();
}
class Cat implements Animal{
    public function makesound() {
        echo "mew";
        echo "<br>";
    }
} 
class Dog implements Animal{
    public function makesound() {
        echo "Ghau";
        echo "<br>";
    }
} 
class Cow implements Animal{
    public function makesound() {
        echo "Hamba";
        echo "<br>";
    }
}   
    $cat = new Cat();
    $dog = new Dog();
    $cow = new Cow();
    $animals=array($cat,$dog,$cow);

    foreach($animals as $animal) {
        $animal->makeSound();
      }
    


?>