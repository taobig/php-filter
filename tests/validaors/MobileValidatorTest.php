<?php

use taobig\filter\validators\MobileValidator;

class MobileValidatorTest extends TestCase
{

    public function testIsChineseMobile()
    {
        $this->assertSame(true, MobileValidator::isChineseMobile("13800001111"));

        $this->assertSame(false, MobileValidator::isChineseMobile("138"));
        $this->assertSame(false, MobileValidator::isChineseMobile("138000A1111"));
        $this->assertSame(false, MobileValidator::isChineseMobile("12800001111"));
        $this->assertSame(false, MobileValidator::isChineseMobile("23800001111"));

    }

}

