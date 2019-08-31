<!DOCTYPE html>
<html>
<head>
	<title>Class example</title>
</head>
<body>

<?php
	class Animal{
		protected $id;
		protected $name;
		protected $fav_food;
		protected $sound;
		public static $num_animals=0;

		const PI="3.14159";
	
		function __construct($name,$fav_food,$sound){
			echo "The class '" . __CLASS__ . "' has been initiated <br/>";
			$this->id=rand(100,100000);
			echo $this->id." has been assigned <br/>";
			Animal::$num_animals++;
			$this->name=$name;
			$this->fav_food=$fav_food;
			$this->sound=$sound;

		}

		function __toString(){
			echo "using the toString() method ";
			return $this->getProperty();
		}

		// function __construct(){
		// 	$this->id=rand(100,100000);
		// 	echo $this->id. " has been assigned <br/>";
		// 	Animal::$num_animals++;
		// }

		function getName(){
			echo "name is ".$this->name."<br/>";
		}

		function setName($name){
			$this->name=$name;
		}
		public function __destruct(){
			echo $this->name . " is being destructed :(";
		}

	}
	$animal1=new Animal("Dog","bone","bow");
	$animal1->getName();
	$animal1->setName("buxy");
	echo Animal::PI;
	echo Animal::$name;

	?>

</body>
</html>