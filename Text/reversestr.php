<?php

/* This takes a string from STDIN and reverses the string. */
     
    function reverse($string){
    	/* This function reverses a string recursively. */
        if (strlen($string) == 0){
        	return $string;
        }     
        return $string[strlen($string)-1] . reverse(substr($string, 0, strlen($string)-1));
    }

    function reverse2($string){
    	/* This function reverses a string iteratively. */
    	$newstr = "";
    	for($i=strlen($string)-1; $i > -1; $i=$i-1){
    		$newstr = $newstr.$string[$i];
    	}
    	return $newstr;
    }

$string = fgets(STDIN);
echo reverse2($string);

?>