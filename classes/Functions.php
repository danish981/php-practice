<?php

// static functions inside the classes, these functions are used to test the code and prepare for git repo
// this is the actually class where we have defined the static utility methods for our ease
// in coding the solutions, i did the same in java and created many classes that are helpful while
// building other mini projects and solutions
// solution word is used for c# programmers, when they build their solution in visual studio, that is called solution

declare(strict_types=1);

namespace Utils;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class Functions {
    private static string $nextLine = "<br>";
    private static float $pi = PI;
    private static int $dayInYear = 365;
    private static int $secondsInDay = 86400;
    private static string $lowerLetters = 'abcdefghiklmnopqrstuvwxyz';
    private static string $upperLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private static string $digits = '0123456789';
    private static string $mixChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    private static array $jazzCodes = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '20', '21', '22', '23', '24'];
    private static array $uFoneCodes = ['31', '32', '33', '34', '35', '36', '37'];
    private static array $telenorCodes = ['40', '41', '42', '43', '44', '45', '46', '47', '48', '49'];
    private static array $zongCodes = ['10', '11', '12', '13', '14', '15', '16', '17'];

    private static array $muslimBoyNames = [
        'burhan', 'yameen', 'ali', 'yaseen', 'ahmad', 'kashif', 'shamas', 'tabraiz', 'khizar', 'hanbal', 'shafii', 'saif',
        'hamza', 'babar', 'farhan', 'danish', 'suleman', 'salman', 'hasnain', 'hassan', 'binyameen', 'ashraf', 'umar',
        'abubakar', 'siddeeq', 'nazar', 'sufi', 'haroon', 'ahmad', 'waleed', 'haider', 'hanbal', 'khizar', 'burqan'
    ];

    private static array $muslimGirlNames = [
        'ayesha', 'tehmina', 'amina', 'bushra', 'tahira', 'saira', 'alia', 'azra', 'maria', 'shazia', 'hania',
        'haani', 'bakhtawar', 'naseem', 'akhtar', 'zareena', 'zulekha', 'gul'
    ];

    /**
     * @throws \Exception
     */
    public static function getBoyName(): string {
        return self::$muslimBoyNames[random_int(0, count(self::$muslimBoyNames) - 1)];
    }

    /**
     * @throws \Exception
     */
    public static function getGirlName(): string {
        return self::$muslimGirlNames[random_int(0, count(self::$muslimGirlNames) - 1)];
    }

    public static function getPi(): float {
        return self::$pi;
    }

    public static function getDayInYear(): int {
        return self::$dayInYear;
    }

    public static function getSecondsInDay(): int {
        return self::$secondsInDay;
    }

    public static function getCircumferance(float $radius): float {
        return 2.0 * PI * $radius;
    }

    public static function getSquare(float $length): float {
        return $length * $length;
    }

    public static function getCircleArea(float $radius): float {
        return self::$pi * abs($radius) * abs($radius);
    }

    public static function getIslamicScholerNames(): array {
        return [
            "Allama Khadim Hussain Rizvi",
            "Allama Raza Saqib Mustafai",
            "Allama Saqib shami",
            "Allama Ilyas Qadri",
            "Allama Imran Attari",
            "Allama mufti taqi usmani",
            "Allama mufti abdul wahid qureshi",
            "Allama mufti naeem uddeen",
            "Allama tahir ul qadri",
            "Allama saeed ahmad Mujaddadi",
            "Allama mufti mengal",
            "Allama mufti ashraf jalali",
            "Allama mufti akmal",
            "Allama Shafeeq Ameeni",
            "Allama Ahmad Shah Bukhari",
            "Allama Saad Hussain Rizvi",
            "Allama Aasim Ashfaq rizvi jehlum",
            "Allama Ajmal qadri rahwali"
        ];
    }

    public static function pushElementsIntoArray(array &$array, ...$elements): void {
        foreach ($elements as $values) {
            $array[] = $values;
        }
    }

    // these are the demo methods for variadic functions, read "php notes for professionals"
    #[Pure] public static function getMaxFromParams(int ...$params): int {
        return self::getMax($params);
    }

    public static function getMax(array $array): ?int {
        if (empty($array) === false) {
            $tempMax = $array[0];
            foreach ($array as $value) {
                if ($value > $tempMax) {
                    $tempMax = $value;
                }
            }
            return $tempMax;
        }
        return NULL;
    }

    public static function printTable(int $tableNum): void {
        self::checks($tableNum);
        if (is_int($tableNum)) {
            $tableLimit = 10;
            for ($i = 1; $i <= $tableLimit; $i++) {
                echo "$tableNum x $i = " . ($i * $tableNum) . self::$nextLine;
            }
            echo self::$nextLine . self::$nextLine;
        }
    }

    private static function checks(&$variable): void {
        if ($variable < 1 || $variable > 999) {
            $variable = 16;
        }
    }

    public static function countOccurences(int $target, array $array): int {
        if (empty($array) === false) {
            $counter = 0;
            foreach ($array as $value) {
                if ($target === $value) {
                    $counter++;
                }
            }
            return $counter;
        }
        return -1;
    }

    public static function printArray(...$arguments): void {
        self::printFormattedArray($arguments);
    }

    public static function printFormattedArray(array $array): void {
        echo self::$nextLine . "<pre>";
        print_r($array);
        echo "</pre>" . self::$nextLine;
    }

    /**
     * assign the random values to each of the numbers, or array of numbers
     * @param int ...$numbers
     * @throws Exception
     */
    public static function assignRandomValues(int ...$numbers): void {
        foreach ($numbers as &$value) {
            $value = random_int(20, 99);
        }
    }

    /**
     * gets the sum of all the numbers of integer type variables passed
     * @param int ...$numbers
     * @return int the sum of all the numbers
     */
    public static function getSum(int ...$numbers): int {
        // we are getting the ... $numbers as an array, REMEMBERS
        $sum = 0;
        foreach ($numbers as $value) {
            $sum += $value;
        }
        return $sum;
    }

    /**
     * gets the table of the given number, if given 2, then 2 4 6 8 ..... 20 will be returned as array of integers
     * @param int $tableNum
     * @return array the returned array filled the table values
     */
    public static function getTableArray(int $tableNum): array {
        $tableArray = [];
        for ($i = 0; $i <= 10; $i++) {
            $tableArray[] = ($tableNum * ($i + 1));
        }
        return $tableArray;
    }

    /**
     * multiply all the given parameters and return the product
     * the demo of awesome variadic functions, thanks php for awesome functions
     * @param int ...$args
     * @return int
     */
    public
    static function getProduct(int ...$args): int {
        $product = 1;
        foreach ($args as $value) {
            $product *= $value;
        }
        return $product;
    }

    /**
     * generates a random number of given length
     * @param int $length of the number to
     * @return int the random number
     */
    public
    static function getRandomNumber(int $length): int {
        if (!empty($length)) {
            $min = 10 ** ($length - 1);
            $max = 10 ** $length;
            try {
                return random_int($min, $max);
            } catch (Exception $e) {
                echo $e->getMessage() . (int)($e->getCode());
            }
        }
        return -1;
    }

    /**
     * the practice of awesome variadic functions for practicing,
     * @param int ...$numbers
     * @return int average of numbers given
     */
    public
    static function getAverage(int ...$numbers): int {
        $argumentLength = count($numbers);
        $sum = 0;
        foreach ($numbers as $value) {
            $sum += $value;
        }
        return $sum / $argumentLength;
    }

    /**
     * the awesome variadic functions, the parameters that are limitless, they are used and manipulated
     * @param array ...$arguments
     * @return string
     * @throws \JsonException
     */
    public
    static function variadic_function(...$arguments): string {
        return json_encode($arguments, JSON_THROW_ON_ERROR);
    }

    /**
     * prints the table of given number to the certain limit
     * @param int $tableNum the table number
     * @param int $limit the ending limit of the table
     */
    public
    static function printTableToLimit(int $tableNum, int $limit): void {
        self::checks($tableNum);
        self::checks($limit);
        if (is_int($tableNum) && is_int($limit)) {
            for ($i = 1; $i <= $limit; $i++) {
                echo "$tableNum x $i = " . ($tableNum * $i) . self::$nextLine;
            }
        }
    }

    /**
     * another array for testing random numbers over array
     * @param int $arrayLength
     * @param int $lowerLimit
     * @param int $upperLimit
     * @return array filled with random numbers
     * @throws Exception
     */
    public
    static function getRandomArrayOfSize(int $arrayLength, int $lowerLimit, int $upperLimit): array {
        if ($arrayLength < 1 || $arrayLength > 999) {
            $arrayLength = 50;
        }
        $array = [];
        for ($i = 1; $i <= $arrayLength; $i++) {
            $array[$i] = random_int($lowerLimit, $upperLimit);
        }
        return $array;
    }

    /**
     * test array for generating and returning the array of random numbers between the given limits
     * @param int $lowerLimit
     * @param int $upperLimit
     * @return array
     * @throws Exception
     */
    public
    static function getRandomNumArray(int $lowerLimit, int $upperLimit): array {
        self::varCheck($lowerLimit);
        self::varCheck($upperLimit);
        if ($lowerLimit > $upperLimit) {
            self::swapValues($lowerLimit, $upperLimit);
        } else if ($upperLimit === $lowerLimit) {
            $upperLimit += 50;
        }
        $arrayLength = 100;
        $array = [];
        for ($i = 0; $i <= $arrayLength; $i++) {
            $array[$i] = random_int($lowerLimit, $upperLimit);
        }
        return $array;
    }

    /**
     * checks the variables if in the proper limit and value
     * @param $variable
     * @return int|null
     */
    private
    static function varCheck(&$variable): ?int {
        if (is_numeric($variable)) {
            if ($variable < 1 || $variable > 1000) {
                return $variable = 50;
            }
        }
        return null;
    }

    /**
     * get random user details in array
     * @return array the array having details
     * @throws Exception
     */
    #[ArrayShape(['id' => "int", 'name' => "string", 'username' => "string", 'email' => "string", 'country' => "string", 'province' => "string", 'city' => "string", 'zipCode' => "int", 'phone' => "string"])] public
    function getUserDetails(): array {
        return [
            'id' => random_int(0, 100),
            'name' => 'burhan ali',
            'username' => 'burhanAli' . random_int(0, 100),
            'email' => 'burhanAli32423@yahoo.com',
            'country' => 'pakistan',
            'province' => 'punjab',
            'city' => 'gujranwala',
            'zipCode' => 52250,
            'phone' => self::getRandomPhoneNumber()
        ];
    }

    /**
     * swap two values, the method get values by passed by reference
     * @param $firstValue
     * @param $secondValue
     */
    public
    static function swapValues(&$firstValue, &$secondValue): void {
        $temp = $firstValue;
        $firstValue = $secondValue;
        $secondValue = $temp;
    }

    /**
     * Returns the array filled with random numbers given between the range
     * @param int $lowerValue the lower limit
     * @param int $upperLimit the upper limit
     * @param int $arrayLength the size of the array
     * @return array|null filled with random numbers
     * @throws Exception
     */
    public
    static function getArrayRandom(int $lowerValue = 10, int $upperLimit = 99, int $arrayLength = 20): ?array {
        $filledArray = [];
        if (is_numeric($lowerValue) && is_numeric($upperLimit) && is_numeric($arrayLength)) {
            for ($i = 0; $i < $arrayLength; $i++) {
                $filledArray[$i] = random_int($lowerValue, $upperLimit);
            }
            return $filledArray;
        }
        return null;
    }

    /**
     * print the string to the number of times
     * @param string $string
     * @param int $times
     */
    public
    static function printTimes(string $string, int $times): void {
        for ($i = 1; $i <= $times; $i++) {
            echo $string . self::$nextLine;
        }
    }

    /**
     * makes the word plural "apple" to "apples"
     * @param string $word
     */
    public
    static function pluralize(string &$word): void {
        if (substr($word, -1) === 'y') {
            $word = substr($word, 0, -1) . 'ies';
        } else {
            $word .= 's';
        }
    }


    /**
     * generates the string of random lowercase alphabeting characters of given length and returns
     * @param int $stringLength the length of the string
     * @return string the string of random characters of given length
     * @throws Exception
     */
    public
    static function getLowerRandomString(int $stringLength = 10): string {
        $masterString = "";
        for ($i = 1; $i <= $stringLength; $i++) {
            $masterString .= self::$lowerLetters[random_int(0, 26)];
        }
        return $masterString;
    }

    /**
     * generate and returns the random string of given length, default is 10 chars
     * @param int $stringLength length of string
     * @return string random string
     * @throws Exception
     */
    public
    static function getRandomString(int $stringLength = 10): string {
        $masterString = "";
        $charsLength = strlen(self::$mixChars);
        for ($i = 1; $i <= $stringLength; $i++) {
            $masterString .= self::$mixChars[random_int(0, $charsLength)];
        }
        return $masterString;
    }

    /**
     * generates and returns truly random characters string of given length
     * @param int $stringLength the length of the array
     * @return string
     * @throws Exception
     */
    public
    static function getUltimateRandomString(int $stringLength = 10): string {
        return substr(md5(self::getRandomString($stringLength)), 0, $stringLength);
    }

    /**
     * get random characters string of upper characters of given length and returns it
     * @param int $stringLength the length of the array
     * @return string the generated array
     * @throws Exception random number
     */
    public
    static function getUpperRandomString(int $stringLength = 10): string {
        $masterString = "";
        for ($i = 1; $i <= $stringLength; $i++) {
            $masterString .= self::$upperLetters[random_int(0, 26)];
        }
        return $masterString;
    }

    /**
     * gets the string of given length filled with random numbers
     * @param int $stringLength the length of string, and cannot be 0
     * @return string the generated string with random digits
     * @throws Exception
     */
    public
    static function getStrRandomDigits(int $stringLength = 10): string {
        $masterString = "";
        for ($i = 1; $i <= $stringLength; $i++) {
            $masterString .= self::$digits[random_int(0, 9)];
        }
        return $masterString;
    }

    /**
     * get random string from the given string, the characters could be repeating
     * @param string $string
     * @param int $outputStrLen
     * @return string
     * @throws Exception
     */
    public
    static function getRandomFromString(string $string, int $outputStrLen = 10): string {
        if (!empty($string)) {
            $masterString = "";
            $stringLength = strlen($string);
            for ($i = 1; $i <= $outputStrLen; $i++) {
                $masterString .= $string[random_int(0, $stringLength)];
            }
            return $masterString;
        }
        return "";
    }

    /**
     * generates an array of given length and fills all the position with random shuffled string characters,
     * for example the string is "king", the array would be ['ingk', kgin', 'gink'] etc
     * @param string $string the string, meaningful or not
     * @param int $arrayLength the length of the array
     * @return array|null if the array is filled then array will be returned, and NULL otherwisw
     */
    public
    static function getShuffledArrayStr(string $string, int $arrayLength = 5): ?array {
        if (!empty($string)) {
            $masterArray = [];
            for ($i = 1; $i <= $arrayLength; $i++) {
                $masterArray[] = shuffle($array);
            }
            return $masterArray;
        }
        return NULL;
    }

    /**
     * generates phone number like 03xx xxxxxxx and returns
     * @return string the phone number string
     * @throws Exception random_int throws exception
     */
    public
    static function getRandomPhoneNumber(): string {
        return "03" . random_int(10, 99) . " " . random_int(1234567, 9999999);
    }

    /**
     * generates random jazz pakistani phone number 0300-0309 and 0320-0324
     * @return string string of phone number
     * @throws Exception
     */
    public static function getRandomJazzNumber(): string {
        return '03' . static::$jazzCodes[random_int(0, count(static::$jazzCodes))] . ' ' . random_int(1234567, 9999999);
    }


    /**
     * generate ufone number and returns it
     * @return string ufone number randomly
     * @throws Exception
     */
    public static function getRandomUfoneNumber(): string {
        return '03' . static::$uFoneCodes[random_int(0, count(static::$uFoneCodes))] . ' ' . random_int(1234567, 9999999);
    }

    /**
     * generates telenor random phone number and returns it
     * @return string random telenor number
     * @throws Exception
     */
    public static function getRandomTelenorNumber(): string {
        return '03' . static::$telenorCodes[random_int(0, count(static::$telenorCodes))] . ' ' . random_int(1234567, 9999999);
    }

    /**
     * generates zong random number and returns it
     * @return string
     * @throws Exception
     */
    public static function getRandomZongNumber(): string {
        return '03' . static::$zongCodes[random_int(0, count(static::$zongCodes))] . ' ' . random_int(1234567, 9999999);
    }

    public static function convertNumber($num = false) {
        $num = str_replace(array(',', ''), '', trim($num));
        if (!$num) {
            return false;
        }
        $num = (int)$num;
        $words = array();
        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );

        $num_length = strlen((string)$num);
        $levels = (int)(($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        foreach ($num_levels as $iValue) {
            $levels--;
            $hundreds = (int)($iValue / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ($hundreds == 1 ? '' : '') . ' ' : '');
            $tens = (int)($iValue % 100);
            $singles = '';
            if ($tens < 20) {
                $tens = ($tens ? ' and ' . $list1[$tens] . ' ' : '');
            } elseif ($tens >= 20) {
                $tens = (int)($tens / 10);
                $tens = ' and ' . $list2[$tens] . ' ';
                $singles = (int)($iValue % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && ( int )($iValue)) ? ' ' . $list3[$levels] . ' ' : '');
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            --$commas;
        }
        $words = implode(' ', $words);
        $words = preg_replace('/^\s\b(and)/', '', $words);
        $words = trim($words);
        $words = ucfirst($words);
        $words .= ".";
        return $words;
    }

}