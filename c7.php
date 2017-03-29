<?php 

class Igrach {

//properties
	private $name_lastname;
	private $sport;
	private $club;

//methods
	public function __construct($nl, $s, $c){
		$this->name_lastname = $nl;
		$this->sport = $s;
		$this->club = $c;
	}

	public function setClub($c){
		$this->club = $c;
	}

	public function getClub(){
		return $this->sport;
	}


	public function pechati_podatoci(){
		echo $this->name_lastname.' - '.$this->sport.' - '.$this->club.'</br>';
	}

	public function dolzhina_na_vlezen_parametar($parametar){
		echo strlen($this->$parametar);
	}

}


$igrach1 = new Igrach('Irina', 'horse-riding', 'Dream');

$igrach1->pechati_podatoci();
$igrach1->dolzhina_na_vlezen_parametar('club');

// var_dump($igrach1);
echo '</br>';
// var_dump($igrach1->name_lastname);
echo '</br>';

$igrach2 = new Igrach('Martin', 'sleeping', 'DreamTeam');


// var_dump($igrach2);
echo '</br>';


$igrach1->setClub('Klubbbb');
$igrach1->pechati_podatoci();
var_dump($igrach1->getClub());






?>