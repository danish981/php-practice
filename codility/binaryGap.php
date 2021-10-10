<?php

/*
codility website

find the longest sequence of zeroes in binary representation of an integer

A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is surrounded by ones at both ends in the binary representation of N.

For example, number 9 has binary representation 1001 and contains a binary gap of length 2. The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3. The number 20 has binary representation 10100 and contains one binary gap of length 1. The number 15 has binary representation 1111 and has no binary gaps. The number 32 has binary representation 100000 and has no binary gaps.

Write a function:

function solution($N);

that, given a positive integer N, returns the length of its longest binary gap. The function should return 0 if N doesn't contain a binary gap.

For example, given N = 1041 the function should return 5, because N has binary representation 10000010001 and so its longest binary gap is of length 5. Given N = 32 the function should return 0, because N has binary representation '100000' and thus no binary gaps.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..2,147,483,647].

 */

//$number = 1201;
//$numBinStr = decbin($number);
//
//$trimmedNumber = trim($numBinStr, '0');
//
//echo "actual number -> $number\n";
//echo "binary number -> $numBinStr\n";
//echo "trimmed numbr -> $trimmedNumber\n";
//
//function getOnesIndex(string $str): array {
//    $indexingArray = [];
//    $stringLength = strlen($str);
//    for ($i = 0; $i < $stringLength; $i++) {
//        if ($str[$i] == '1') {
//            $indexingArray[] = $i;
//        }
//    }
//    return $indexingArray;
//}
//
//$countedArray = getOnesIndex($numBinStr);
//$maxGaps = count($countedArray) - 1;
//
//$maxBinGap = 0;
//for ($i = 0; $i < $maxGaps; $i++) {
//    $gap = ($countedArray[$i + 1] - $countedArray[$i] - 1);
//    if ($gap > $maxBinGap) {
//        $maxBinGap = $gap;
//    }
//}
//
//echo "1's at positions --> \n";
//print_r(getOnesIndex($numBinStr));
//
//echo "max binary gap is between $trimmedNumber is $maxBinGap";

class binaryGap {

    private $actualNubmer;
    private $trimmedBinaryNum;
    private $binaryString;
    private $binaryInt;
    private $binaryStringLength;
    private $zeroes;
    private $ones;
    private $binaryGap;

    public function __construct(int $number) {
        if (is_numeric($number)) {
            $this->trimmedBinaryNum = trim($this->binaryString, '\0');
            $this->actualNubmer = abs($number);
            $this->calculate();
        }
    }

    public function binaryGap(): int {
        $totalOnesIndexes = count($this->getOnesIndexes());
        $expGap = $totalOnesIndexes - 1;
        $maxBinGap = 0;
        for ($i = 0; $i < $expGap; $i++) {
            $gap = ($this->binaryString[$i + 1] - $this->binaryString[$i] - 1);
            if ($gap > $maxBinGap) {
                $maxBinGap = $gap;
            }
        }
        return $maxBinGap;
    }

    private function calculate() {
        $this->calcBinaryString();
        $this->calcBinaryInt();
        $this->countBoth();
        $this->binaryStringLength = strlen($this->actualNubmer);
    }

    private function calcBinaryString() {
        $this->binaryString = decbin($this->actualNubmer);
    }

    private function calcBinaryInt() {
        $this->binaryInt = (int)($this->binaryString);
    }

    public function getBinaryString(): string {
        return $this->binaryString;
    }

    /**
     * private method to count both the zeroes and ones in converted number (binary to string)
     * and then assign both the class fields $ones and $zeroes, these two variables are assigned with 0's and 1's
     */
    private function countBoth() {
        $this->zeroes = $this->ones = 0;
        for ($i = 0; $i < $this->binaryStringLength; $i++) {
            if ($this->binaryString[0] == '0')
                $this->zeroes++;
            else
                $this->ones++;
        }
    }

    public function getOnesIndexes(): array {
        $indexesArray = [];
        for ($i = 0; $i < $this->binaryStringLength; $i++) {
            if ($this->binaryString[$i] == '1')
                $indexesArray[] = $i;
        }
        return $indexesArray;
    }

    public function getZerosIndexes(): array {
        $indexesArray = [];
        for ($i = 0; $i < $this->binaryStringLength; $i++) {
            if ($this->binaryString[$i] == '0')
                $indexesArray[] = $i;
        }
        return $indexesArray;
    }

    /**
     * static function to calculate binary gap of an integer, <br>
     * integer is first coverted to binary , and then returned the the gap <br>
     * @param int $number of which binary gap has to be calculated, the detault is 529
     * @return int the binary of given number, if number is invalid, returns -1
     */
    public static function getBinaryGap(int $number = 529): int {
        if (is_numeric($number)) {
            $binNum = trim(decbin($number));
            // todo : write some code here
        }
    }

    public function getBinaryInt(): int {
        return (int)(decbin($this->actualNubmer));
    }

    public function getTrimmedBinaryNum(): int {
        return (int)trim($this->getBinaryString());
    }


    // todo : add more methods to the class

}

$number = (int)readline("Enter your number : ");
$binaryGapObject = new binaryGap($number);
echo "binary gap --> " . $binaryGapObject->binaryGap();
