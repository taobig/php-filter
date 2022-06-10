<?php

namespace taobig\filter\validators;

class MobileValidator extends TypeValidator
{

    /**
     * Without validating Country Calling Code (references:https://en.wikipedia.org/wiki/List_of_country_calling_codes)
     * @param string $val
     * @return bool
     */
    final public static function isChineseMobile(string $val): bool
    {
        //return (preg_match('/^1(3|4|5|7|8)\d{9}$/', $val) === 1) ? true : false;//but preg_match return 1/0/false
        if (strlen($val) !== 11) {
            return false;
        }
        if (!self::isInt($val, false)) {
            return false;
        }
        if ($val[0] != 1) {
            return false;
        }
        if (!in_array($val[1], [3, 4, 5, 7, 8, 9])) {
            return false;
        }
        return true;
    }

}
