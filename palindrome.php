<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // Convert the integer to a string
  	$x_str = (string) $x;

  	// Check if the string is the same forwards and backwards
  	return $x_str == strrev($x_str);
    }
}

?>