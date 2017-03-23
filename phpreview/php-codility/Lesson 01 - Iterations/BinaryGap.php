<?php

/*
A binary gap within a positive integer N is any maximal sequence of consecutive zeros that
is surrounded by ones at both ends in the binary representation of N.

For example, number 9 has binary representation 1001 and contains a binary gap of length 2.
The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3.
The number 20 has binary representation 10100 and contains one binary gap of length 1. The number 15 has binary
representation 1111 and has no binary gaps.

Write a function:

    function solution($N);

that, given a positive integer N, returns the length of its longest binary gap. The function should return 0
if N doesn't contain a binary gap.

For example, given N = 1041 the function should return 5, because N has binary representation 10000010001
and so its longest binary gap is of length 5.

Assume that:
        N is an integer within the range [1..2,147,483,647].

Complexity:
        expected worst-case time complexity is O(log(N));
        expected worst-case space complexity is O(1).
*/

/*
 * CODILITY ANALYSIS: https://codility.com/demo/results/trainingRWSKUF-PFJ/
 * LEVEL: EASY
 * Correctness:	100%
 * Performance: not assessed
 * Task score:	100%
 */

function solution($N)
{
	// binary gap
	$binaryGap = 0;
	// integer binary represenation
	$binary = decbin($N);

	// we explode string by character '1'
	$exploded = explode('1', $binary);
	// binary gap must be surrounded by ones at both ends,
	// so there shouldn't be zeroes after last character '1' occurrence, and before first character '1' occurrence
	unset($exploded[count($exploded) - 1]);
	unset($exploded[0]);

	// we are searching for longest zeroes pattern
	foreach($exploded as $zeroes)
	{
		$length = strlen($zeroes);
		if($length > $binaryGap)
			$binaryGap = $length;
	}

}

$N=1041;
echo solution1($N);
function solution1($N){

$binarygap=0;
$binary=decbin($N);
$exploded=explode('1',$binary);
return $exploded;

}

function solution1($N){
	$binarygap=0;
	$binary=decbin($N);
	$explode=explode("1", $binary);
	unset($explode[count($explode)-1]);
	unset($explode[0]);
	foreach ($explode as $key => $value) {
		$length=strlen($value);
		if ($value>$binarygap) {
			$bianrygap=$value;
		}
	}
}

?>
