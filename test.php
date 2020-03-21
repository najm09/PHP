<!DOCTYPE html>
<html>

<body>

	 <?php
	 echo "hello world!"."<hr />";
	  //indexed array
	 $colors = array("blue", "green", "red" );
	 echo "my favourite colours are,".$colors[0].",".$colors[1]." and ".$colors[2]."<hr>";
	 echo "the length of the array:".count($colors)."<hr>";
	 for($x = 0; $x < count($colors); $x++){
	 	echo $colors[$x]."<hr>";
	 }
	 //associative arrays
	 $test_score  = array('joey' =>'45' , 'henry'=>'64', 'era'=>'98' );
	 ksort($test_score);
	 echo "after sorting <hr>";
	 foreach ($test_score as $key => $value) {
	 echo "name: ".$key.", score: ".$value."<br>";
	 }
   echo "<hr>";


	 krsort($test_score);
	 foreach ($test_score as $key => $value) {
	 echo "name: ".$key.", score: ".$value."<br>";
	 }

	 echo "<hr>";


	 asort($test_score);
	 foreach ($test_score as $key => $value) {
	 echo "name: ".$key.", score: ".$value."<br>";
	 }

	 echo "<hr>";

	 arsort($test_score);
	 foreach ($test_score as $key => $value) {
	 echo "name: ".$key.", score: ".$value."<br>";
	 }
	 echo "<hr>";

	 //multi-dimensional array

	$result = array(
		array("anny", "A", "passed"),
		array("bill", "B+", "passed"),
		array("jack", "C", "Passed"),
		array("john", "F", "failed" )
	);

	echo "Name: " .$result[0][0]. " Grade: " .$result[0][1]. " Result: " . $result[0][2]. "<br>";
	echo "Name: " .$result[1][0]. " Grade: " .$result[1][1]. " Result: " . $result[1][2]. "<br>";
	echo "Name: " .$result[2][0]. " Grade: " .$result[2][1]. " Result: " . $result[2][2]. "<br>";
	echo "Name: " .$result[3][0]. " Grade: " .$result[3][1]. " Result: " . $result[3][2]. "<hr>";

	//Functions:

	function add($x,$y){
			return $x+$y;
		}
	echo add(2,3)."<hr>";

	function myCar($car){
		echo 'i have '.$car.
		'<br>';
	}
	myCar("maruti");
	myCar("Honda");

	echo "<hr>";

	//default argument value.

	function age($mineage = 18){
		echo "my age is ".$mineage."<br>";
	}
	age();
	age(19);

	 ?>


</body>
</html>