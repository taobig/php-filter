<?php


class MobileValidatorTest extends TestCase
{

    public function testIsChineseMobile()
    {
        $validator = new taobig\filter\validators\MobileValidator();
        $this->assertEquals(true, $validator->isChineseMobile("13800001111"));

    }

}

