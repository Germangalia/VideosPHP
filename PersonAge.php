<?php
class Person{
	public $age = 1;
	public static function haveBirthday){
		$this->age += 1;
	}
	
	public function age() {
		return $this->age;
	}
}
