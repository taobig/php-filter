<?php

use taobig\filter\validators\TypeValidator;

class TypeValidatorTest extends TestCase
{

    public function testIsString()
    {
        $this->assertSame(true, TypeValidator::isString("hello world"));
        $this->assertSame(true, TypeValidator::isString(11.2233, false));
        $this->assertSame(false, TypeValidator::isString([]));
        $this->assertSame(false, TypeValidator::isString([], false));
    }

    public function testIsInt()
    {
        $this->assertSame(true, TypeValidator::isInt(123));
        $this->assertSame(true, TypeValidator::isInt("123", false));
        $this->assertSame(false, TypeValidator::isInt(11.2233, false));
        $this->assertSame(false, TypeValidator::isInt("abc"));
        $this->assertSame(false, TypeValidator::isInt("abc", false));
        $this->assertSame(false, TypeValidator::isInt([]));
        $this->assertSame(false, TypeValidator::isInt([], false));
    }

    public function testIsIntList()
    {
        $this->assertSame(false, TypeValidator::isIntList(123, false));
        $this->assertSame(false, TypeValidator::isIntList(["123"]));
        $this->assertSame(false, TypeValidator::isIntList([11.2233], false));
        $this->assertSame(true, TypeValidator::isIntList(["123"], false));
        $this->assertSame(true, TypeValidator::isIntList([11, "222222"], false));
        $this->assertSame(false, TypeValidator::isIntList([11.2233, "h222222"], false));
        $this->assertSame(false, TypeValidator::isIntList([11.2233, "123h222222"], false));
        $this->assertSame(false, TypeValidator::isIntList([], false));
    }

    public function testIsStringList()
    {
        $this->assertSame(false, TypeValidator::isStringList("123", false));
        $this->assertSame(false, TypeValidator::isStringList([123]));
        $this->assertSame(true, TypeValidator::isStringList(["123"], false));
        $this->assertSame(true, TypeValidator::isStringList([11.2233, "h222222"], false));
        $this->assertSame(false, TypeValidator::isStringList([], false));
    }


}
