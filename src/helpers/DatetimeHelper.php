<?php

namespace taobig\filter\helpers;

class DatetimeHelper
{
    public static function millisecondTimestamps(): int
    {
        if (PHP_INT_SIZE < 8) {
            return -1;
        }
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }
}