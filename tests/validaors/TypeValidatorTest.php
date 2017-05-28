<?php


class TypeValidatorTest extends TestCase
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

    public function testIsListInt()
    {
        $validator = new taobig\filter\validators\TypeValidator();
        $this->assertEquals(false, $validator->isListInt(123, false));
        $this->assertEquals(false, $validator->isListInt(["123"]));
        $this->assertEquals(false, $validator->isListInt([11.2233], false));
        $this->assertEquals(true, $validator->isListInt(["123"], false));
        $this->assertEquals(true, $validator->isListInt([11, "222222"], false));
        $this->assertEquals(false, $validator->isListInt([11.2233, "h222222"], false));
        $this->assertEquals(false, $validator->isListInt([11.2233, "123h222222"], false));
        $this->assertEquals(false, $validator->isListInt([], false));
    }

    public function testIsListString()
    {
        $validator = new taobig\filter\validators\TypeValidator();
        $this->assertEquals(false, $validator->isListString("123", false));
        $this->assertEquals(false, $validator->isListString([123]));
        $this->assertEquals(true, $validator->isListString(["123"], false));
        $this->assertEquals(true, $validator->isListString([11.2233, "h222222"], false));
        $this->assertEquals(false, $validator->isListString([], false));
    }


}
