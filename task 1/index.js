'use strict'
function findElem(currentElem, firstIndex=0, lastIndex=myArray.length) {
	if (currentElem > myArray[myArray.length-1] || currentElem < myArray[0]) throw "Данный элемент не входит в массив"
	var currentIndex = Math.abs(Math.floor((lastIndex-firstIndex)/2)) + firstIndex;
	if (currentElem < myArray[currentIndex]) {
		return findElem(currentElem, firstIndex, currentIndex);	
	}else if (currentElem > myArray[currentIndex]) {
		return findElem(currentElem, currentIndex, lastIndex);	
	}else if (currentElem === myArray[currentIndex]) {
		return currentIndex;	
	}
}

var myArray = [0, 1, 2, 3, 4, 5, 6, 7, 8,9, 10];
var result = findElem(4);

