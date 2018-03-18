<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/3
 * Time: 16:16
 */
namespace Calendar\Model;

class LeapYear
{
    public function isLeapYear($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }
}