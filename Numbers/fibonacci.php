<?php
    /* This takes a number, n, from STDIN, and generates the fibonacci sequence 
		upto that number.
	*/
	function fibonacci($n)
	{
		$fibarray = array(0, 1);  
		for($i=2; $i<$n; $i++){
			$fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
		}
		foreach ($fibarray as $i){
			echo $i . " ";  
		}
	}
	$number = fgets(STDIN);
	fibonacci($number);
?>

