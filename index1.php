<?php
	class person {
		var $name;
		var $address;
		var $age;

		public function titleProfile($name) {
			echo "<strong>This is biodata from $name</strong><br>";
		}

		public function checkProfile($name,$address,$age) {
			echo "Name:\n$name<br>Address:\n
			$address<br>Age:\n$age\nyears old<br>";
		}

		public function __construct() {
			echo "Checking Biodata....<br>";
		}

		public function __destruct() {
			echo "Done to look the biodata<br>";
		}

	}

	class jobs extends person {
		var $jobs;
		public function showJob () {
			return "I'm a $this->jobs";
		}
	}

	$look = new jobs();
	// $look->name = "Azka";
	// $look->address = "Bandung";
	// $look->age = "19";
	$look->jobs = "Student";
	$look->titleProfile("Azka");
	$look->checkProfile("Azka","Bandung",19);
	echo "Job:\n".$look->showJob()."<br>";
	unset($look);
?>