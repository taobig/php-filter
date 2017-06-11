<?php

namespace taobig\filter\helpers;


class StringHelper
{

    public function startsWith(string $str, string $characters): bool
    {
        if (strlen($str) < strlen($characters)) {
            return false;
        }
        return substr_compare($str, $characters, 0, strlen($characters)) === 0;
    }

    public function endsWith(string $str, string $characters): bool
    {
        if (strlen($str) < strlen($characters)) {
            return false;
        }
        if (strlen($characters) === 0) {
            return true;
        }
        return substr_compare($str, $characters, -strlen($characters)) === 0;
    }

}