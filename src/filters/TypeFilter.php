<?php

namespace taobig\filter\filters;

class TypeFilter extends BaseFilter
{

    public function stringVal($val, bool $strict_type = true): string
    {
        if (is_string($val)) {
            return $val;
        }
        if (!$strict_type) {
            if (is_int($val) || is_float($val)) {
                return strval($val);
            }
        }
        throw new $this->exceptionClass($this->exceptionMessage ?: "type error, input type is not string");
    }

    public function intVal($val, bool $strict_type = true): int
    {
        if (is_int($val)) {
            return $val;
        }
        if (!$strict_type) {
            if (is_string($val)) {
                $iVal = intval($val, 10);
                if (strval($iVal) === $val) {
                    return $iVal;
                }
            }
        }
        throw new $this->exceptionClass($this->exceptionMessage ?: "type error, input type is not int");
    }

}
