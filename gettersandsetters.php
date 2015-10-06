<?php
class Person {
	public $name;
	public $age;
	public function __construct($name){
		$this->name=$name;
	}
	//Funció per a obtindre la variable edat.
	public function getAge(){
		return $this->age * 365;
	}
	//Funció per a modificar la variable edat.
	public function setAge($age) {
		if($age<18) {
			throw new Exception('Person is not old enough.');
		}
		$this->age=$age;
	}
	
}
$john = new Person('Jhohn Due');
//Modifiquem la edat i li donem el valor 30.
$john->setAge(30);
//Obtenim per pantalla la edat. 
var_dump($john->getAge());

?>