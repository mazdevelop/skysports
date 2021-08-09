<?php
namespace App\Helpers;

class StrHelp{

    static function makeSlug($string)
    {
        return preg_replace('/\s+/u','-',trim($string));
    }

    static function enToFa($string) {
        return strtr($string, array('0'=>'۰','1'=>'۱','2'=>'۲','3'=>'۳','4'=>'۴','5'=>'۵','6'=>'۶','7'=>'۷','8'=>'۸','9'=>'۹'));
    }
}