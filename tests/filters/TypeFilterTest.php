<?php

use taobig\filter\filters\TypeFilter;

class TypeFilterTest extends TestCase
{

    public function testStringVal()
    {
        $filter = new TypeFilter();
        $val = "hello world";
        $this->assertSame($val, $filter->stringVal($val));
        $val = 11.2233;
        $this->assertSame('' . $val, $filter->stringVal($val, false));
        $val = 112233;
        $this->assertSame('' . $val, $filter->stringVal($val, false));

        $this->expectException(\TypeError::class);
        $val = [];
        $this->assertSame('', $filter->stringVal($val, false));
    }

    public function testStringValException()
    {
        $exceptionMessage = 'parameters type error';
        $exceptionClass = \Exception::class;
        $filter = new TypeFilter(['exceptionMessage' => $exceptionMessage, 'exceptionClass' => $exceptionClass]);
        $this->expectException($exceptionClass);
        $this->expectExceptionMessage($exceptionMessage);
        $val = [];
        $this->assertSame('', $filter->stringVal($val, false));
    }

    public function testIntVal()
    {
        $filter = new TypeFilter();

        $val = 1234;
        $this->assertSame($val, $filter->intVal($val));

        $val = 1234;
        $this->assertSame($val, $filter->intVal($val, false));
        $val = "1234";
        $this->assertSame(intval($val), $filter->intVal($val, false));
    }

    public function testIntValException1()
    {
        $filter = new TypeFilter();

        $this->expectException(\TypeError::class);
        $val = 11.2233;
        $this->assertSame('', $filter->intVal($val, false));
    }

    public function testIntValException2()
    {
        $filter = new TypeFilter();

        $this->expectException(\TypeError::class);
        $val = [];
        $this->assertSame('', $filter->intVal($val, false));
    }

    public function testIntValException3()
    {
        $exceptionMessage = 'parameters type error';
        $exceptionClass = \Exception::class;
        $filter = new TypeFilter(['exceptionMessage' => $exceptionMessage, 'exceptionClass' => $exceptionClass]);
        $this->expectException($exceptionClass);
        $this->expectExceptionMessage($exceptionMessage);
        $val = "abc";
        $this->assertSame('', $filter->intVal($val, false));
    }

}
