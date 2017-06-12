<?php

use taobig\filter\validators\TypeValidator;

class TypeValidatorTest extends TestCase
{

    public function testIsString()
    {
        $validator = new TypeValidator();
        $this->assertEquals(true, $validator->isString("hello world"));
        $this->assertEquals(true, $validator->isString(11.2233, false));
        $this->assertEquals(false, $validator->isString([]));
        $this->assertEquals(false, $validator->isString([], false));
    }

    public function testIsInt()
    {
        $validator = new TypeValidator();
        $this->assertEquals(true, $validator->isInt(123));
        $this->assertEquals(true, $validator->isInt("123", false));
        $this->assertEquals(false, $validator->isInt(11.2233, false));
        $this->assertEquals(false, $validator->isInt("abc"));
        $this->assertEquals(false, $validator->isInt("abc", false));
        $this->assertEquals(false, $validator->isInt([]));
        $this->assertEquals(false, $validator->isInt([], false));
    }

    public function testIsIntList()
    {
        $validator = new TypeValidator();
        $this->assertEquals(false, $validator->isIntList(123, false));
        $this->assertEquals(false, $validator->isIntList(["123"]));
        $this->assertEquals(false, $validator->isIntList([11.2233], false));
        $this->assertEquals(true, $validator->isIntList(["123"], false));
        $this->assertEquals(true, $validator->isIntList([11, "222222"], false));
        $this->assertEquals(false, $validator->isIntList([11.2233, "h222222"], false));
        $this->assertEquals(false, $validator->isIntList([11.2233, "123h222222"], false));
        $this->assertEquals(false, $validator->isIntList([], false));
    }

    public function testIsStringList()
    {
        $validator = new TypeValidator();
        $this->assertEquals(false, $validator->isStringList("123", false));
        $this->assertEquals(false, $validator->isStringList([123]));
        $this->assertEquals(true, $validator->isStringList(["123"], false));
        $this->assertEquals(true, $validator->isStringList([11.2233, "h222222"], false));
        $this->assertEquals(false, $validator->isStringList([], false));
    }


}
