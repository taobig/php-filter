<?php

use taobig\filter\validators\TypeValidator;

class TypeValidatorTest extends TestCase
{

    public function testIsString()
    {
        $validator = new TypeValidator();
        $this->assertSame(true, $validator->isString("hello world"));
        $this->assertSame(true, $validator->isString(11.2233, false));
        $this->assertSame(false, $validator->isString([]));
        $this->assertSame(false, $validator->isString([], false));
    }

    public function testIsInt()
    {
        $validator = new TypeValidator();
        $this->assertSame(true, $validator->isInt(123));
        $this->assertSame(true, $validator->isInt("123", false));
        $this->assertSame(false, $validator->isInt(11.2233, false));
        $this->assertSame(false, $validator->isInt("abc"));
        $this->assertSame(false, $validator->isInt("abc", false));
        $this->assertSame(false, $validator->isInt([]));
        $this->assertSame(false, $validator->isInt([], false));
    }

    public function testIsIntList()
    {
        $validator = new TypeValidator();
        $this->assertSame(false, $validator->isIntList(123, false));
        $this->assertSame(false, $validator->isIntList(["123"]));
        $this->assertSame(false, $validator->isIntList([11.2233], false));
        $this->assertSame(true, $validator->isIntList(["123"], false));
        $this->assertSame(true, $validator->isIntList([11, "222222"], false));
        $this->assertSame(false, $validator->isIntList([11.2233, "h222222"], false));
        $this->assertSame(false, $validator->isIntList([11.2233, "123h222222"], false));
        $this->assertSame(false, $validator->isIntList([], false));
    }

    public function testIsStringList()
    {
        $validator = new TypeValidator();
        $this->assertSame(false, $validator->isStringList("123", false));
        $this->assertSame(false, $validator->isStringList([123]));
        $this->assertSame(true, $validator->isStringList(["123"], false));
        $this->assertSame(true, $validator->isStringList([11.2233, "h222222"], false));
        $this->assertSame(false, $validator->isStringList([], false));
    }


}
