<?php

namespace taobig\filter\validators;

class TypeValidator
{

    final public static function isString($val, bool $strict_type = true): bool
    {
        if (is_string($val)) {
            return true;
        }
        if (!$strict_type) {
            if (is_int($val) || is_float($val)) {
                return true;
            }
        }
        return false;
    }

    final public static function isInt($val, bool $strict_type = true): bool
    {
        if (is_int($val)) {
            return true;
        }
        if (!$strict_type) {
            if (is_string($val)) {
                if (strval(intval($val, 10)) === $val) {
                    return true;
                }
            }
        }
        return false;
    }

    final public static function isIntList($val, bool $strict_type = true): bool
    {
        if (!is_array($val)) {
            return false;
        }
        if (empty($val)) {
            return false;
        }

        foreach ($val as $one) {
            if (!self::isInt($one, $strict_type)) {
                return false;
            }
        }

        return true;
    }

    final public static function isStringList($val, bool $strict_type = true): bool
    {
        if (!is_array($val)) {
            return false;
        }
        if (empty($val)) {
            return false;
        }

        foreach ($val as $one) {
            if (!self::isString($one, $strict_type)) {
                return false;
            }
        }

        return true;
    }

}
