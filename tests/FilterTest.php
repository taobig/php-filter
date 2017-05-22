<?php


class FilterTest extends TestCase
{

    public function testStringVal()
    {
        $filter = new taobig\filter\filters\TypeFilter();
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

    public function testIntVal()
    {
        $filter = new taobig\filter\filters\TypeFilter();

        $val = 1234;
        $this->assertSame($val, $filter->intVal($val));

        $this->expectException(\TypeError::class);
        $val = 11.2233;
        $this->assertSame('' . $val, $filter->intVal($val, false));

        $this->expectException(\TypeError::class);
        $val = [];
        $this->assertSame('', $filter->intVal($val, false));
    }

}
