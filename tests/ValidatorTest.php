<?php


class ValidatorTest extends TestCase
{

    public function testIsString()
    {
        $validator = new taobig\filter\validators\TypeValidator();
        $this->assertEquals(true, $validator->isString("hello world"));
        $this->assertEquals(true, $validator->isString(11.2233, false));
        $this->assertEquals(false, $validator->isString([]));
        $this->assertEquals(false, $validator->isString([], false));
    }

    public function testIsInt()
    {
        $validator = new taobig\filter\validators\TypeValidator();
        $this->assertEquals(true, $validator->isInt(123));
        $this->assertEquals(true, $validator->isInt("123", false));
        $this->assertEquals(false, $validator->isInt(11.2233, false));
        $this->assertEquals(false, $validator->isInt("abc"));
        $this->assertEquals(false, $validator->isInt("abc", false));
        $this->assertEquals(false, $validator->isInt([]));
        $this->assertEquals(false, $validator->isInt([], false));
    }

}
