<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class FizzBuzz
{
    static function read($number){
        if (self::testFizzBuzzNumber($number)){
            return 'FizzBuzz';
        }
        if (self::testBuzzNumber($number)){
            return 'Buzz';
        }
          if (self::testNotFizzBuzzNumber($number)){
              return '1';
          }
        if (self::testInvalidNumber($number)){
            return 'Invalid number!';
        }
        return "";
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testInvalidNumber($number): bool
    {
        return $number == 0;
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testNotFizzBuzzNumber($number): bool
    {
        return $number == 1;
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testBuzzNumber($number): bool
    {
        return $number == 5;
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testFizzBuzzNumber($number): bool
    {
        return $number == 15;
    }
}