<?php

namespace App\Helpers;

class Formatter
{
    public static function date($date)
    {
        $strtotime = strtotime($date);
        return date('d F Y', $strtotime);
    }
    public static function datetime($date)
    {
        $strtotime = strtotime($date);
        return date('d F Y, H:i a', $strtotime);
    }
}
