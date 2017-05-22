<?php

namespace taobig\filter\filters;

abstract class BaseFilter
{

    //    public $useException = false;

    public $exceptionClass = \TypeError::class;//\Exception::class;
    public $exceptionMessage = '';

    public function __construct($config = [])
    {
        if (!empty($config)) {
            $properties = $config;
            foreach ($properties as $name => $value) {
                $this->$name = $value;
            }
        }
        $this->init();
    }

    public function init()
    {
    }
}
