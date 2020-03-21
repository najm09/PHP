<!DOCTYPE html>
<html>
<head>
  <title>object oriented programming</title>
</head>
<body>
<?php
	class person{
		public $firstname;
		public $lastname;
		public $language;

		public function_construct($firstname, $lastname, $language){
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->language = $language;
		}

		public function hello(){
			return "I am ". $this->firstname. " ".$this->lastname."  and i am learning ".$this->language."<br>";
		}
	}

	$Me = new person("Fakhra", "Najm", "php");
	echo Me->hello()."<hr>";
?>
</body>
</html>