<?php

use taobig\filter\validators\MobileValidator;

class MobileValidatorTest extends TestCase
{

    public function testIsChineseMobile()
    {
        $validator = new MobileValidator();
        $this->assertEquals(true, $validator->isChineseMobile("13800001111"));

    }

}

