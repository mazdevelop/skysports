<?php
namespace App\Helpers;

class Str{

    static function makeSlug($string)
    {
        return preg_replace('/\s+/u','-',trim($string));
    }

}