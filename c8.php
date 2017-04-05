<?php 


class Dog {
	protected $name;
	public $breed;

	public function setName($n){
		$this->name = $n;
	}

	public function getName(){
		return $this->name;
	}

	public function setBreed($b){
		$this->breed = $b;
	}

	public function getBreed(){
		return $this->breed;
	}

	public function bark(){
		echo 'The dog is barking';
	}

	public function play(){
		echo 'The dog is playing';
	}

	public function print1(){
		echo 'ime: '.$this->name.', rasa: '.$this->breed.', outgoing: '.$this->outgoing.'</br>';
	}

}


class Babydog extends Dog {
	public $outgoing;

	public function printIme(){
		echo 'Zdravo Semos!';
	}
}


$kuche1 = new Dog;
$kuche1->setName('Noki');
$kuche1->outgoing = 'Yes';
$kuche1->setBreed('Aljaski Malamut');
$kuche1->print1();
// $kuche1->printIme();

$kuche2 = new Babydog;
$kuche2->setName('Bak');
$kuche2->outgoing = 'No';
$kuche2->setBreed('Aljaski Malamut');
$kuche2->print1();
$kuche2->printIme();





 ?>