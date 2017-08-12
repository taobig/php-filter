<?php

use taobig\filter\validators\MobileValidator;

class MobileValidatorTest extends TestCase
{

    public function testIsChineseMobile()
    {
        $this->assertSame(true, MobileValidator::isChineseMobile("13800001111"));

    }

}

