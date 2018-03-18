<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/3
 * Time: 15:50
 */
namespace Lib;
use Symfony\Component\HttpFoundation\Response;
class LeapYearController
{
    public static function indexAction($year)
    {
        if (self::is_leap_year($year)) {
            return new Response('Yes, this is a leap year!'.$year);
        }

        return new Response('Nope, this is not a leap year.');
    }
    public static function is_leap_year($year = null) {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }
}