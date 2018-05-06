<?php
	function findElem($currentElem, $firstIndex=0, $lastIndex=11) {
		global $myArray;
		$currentIndex = abs(floor(($lastIndex-$firstIndex)/2)) + $firstIndex;
		if ($currentElem < $myArray[$currentIndex]) {
			return findElem($currentElem,$firstIndex, $currentIndex);	
		}elseif ($currentElem > $myArray[$currentIndex]) {
			return findElem($currentElem,$currentIndex, $lastIndex);	
		}elseif ($currentElem === $myArray[$currentIndex]) {
			return $currentIndex;
		}
	}

	$myArray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$result = findElem(6);
	echo $result;
?>
