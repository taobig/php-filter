<?php

namespace taobig\filter\validators;

class TypeValidator
{

    public function isString($val, bool $strict_type = true): bool
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

    public function isInt($val, bool $strict_type = true)
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

}
