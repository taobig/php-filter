<?php


class StringHelperTest extends TestCase
{

    public function testStartsWith()
    {
        $helper = new taobig\filter\helpers\StringHelper();
        $this->assertEquals(true, $helper->startsWith("hello world", "h"));
        $this->assertEquals(true, $helper->startsWith("hello world", "hello "));
        $this->assertEquals(true, $helper->startsWith("hello world", ""));

        $this->assertEquals(false, $helper->startsWith("hello world", "H"));
        $this->assertEquals(false, $helper->startsWith("hello world", "Hello"));

        $this->assertEquals(false, $helper->startsWith("hello", "hello world"));
        $this->assertEquals(false, $helper->startsWith("", "hello world"));
    }

    public function testEndsWith()
    {
        $helper = new taobig\filter\helpers\StringHelper();
        $this->assertEquals(true, $helper->endsWith("hello world", "world"));
        $this->assertEquals(true, $helper->endsWith("hello world", " world"));
        $this->assertEquals(true, $helper->endsWith("hello world", "hello world"));
        $this->assertEquals(true, $helper->endsWith("hello world", ""));
        $this->assertEquals(false, $helper->endsWith("hello world", "World"));

        $this->assertEquals(false, $helper->endsWith("world", "hello world"));
        $this->assertEquals(false, $helper->endsWith("", "hello world"));
    }

}
