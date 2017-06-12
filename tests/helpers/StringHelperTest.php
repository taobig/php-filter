<?php

use taobig\filter\helpers\StringHelper;

class StringHelperTest extends TestCase
{

    public function testStartsWith()
    {
        $this->assertEquals(true, StringHelper::startsWith("hello world", "h"));
        $this->assertEquals(true, StringHelper::startsWith("hello world", "hello "));
        $this->assertEquals(true, StringHelper::startsWith("hello world", ""));

        $this->assertEquals(false, StringHelper::startsWith("hello world", "H"));
        $this->assertEquals(false, StringHelper::startsWith("hello world", "Hello"));

        $this->assertEquals(false, StringHelper::startsWith("hello", "hello world"));
        $this->assertEquals(false, StringHelper::startsWith("", "hello world"));
    }

    public function testEndsWith()
    {
        $this->assertEquals(true, StringHelper::endsWith("hello world", "world"));
        $this->assertEquals(true, StringHelper::endsWith("hello world", " world"));
        $this->assertEquals(true, StringHelper::endsWith("hello world", "hello world"));
        $this->assertEquals(true, StringHelper::endsWith("hello world", ""));
        $this->assertEquals(false, StringHelper::endsWith("hello world", "World"));

        $this->assertEquals(false, StringHelper::endsWith("world", "hello world"));
        $this->assertEquals(false, StringHelper::endsWith("", "hello world"));
    }


    public function testStripLeft()
    {
        $this->assertEquals("ello world", StringHelper::stripLeft("hello world", "h"));
        $this->assertEquals("world", StringHelper::stripLeft("hello world", "hello "));

        $this->assertEquals("hello world", StringHelper::stripLeft("hello world", ""));
        $this->assertEquals("hello world", StringHelper::stripLeft("hello world", "H"));
        $this->assertEquals("hello world", StringHelper::stripLeft("hello world", "hellO"));
        $this->assertEquals("hello world", StringHelper::stripLeft("hello world", "hello  "));
        $this->assertEquals("hello world", StringHelper::stripLeft("hello world", "llo "));
        $this->assertEquals("hello", StringHelper::stripLeft("hello", "hello world"));
        $this->assertEquals("", StringHelper::stripLeft("", "hello world"));
    }


    public function testStripRight()
    {
        $this->assertEquals("hello ", StringHelper::stripRight("hello world", "world"));
        $this->assertEquals("hello", StringHelper::stripRight("hello world", " world"));
        $this->assertEquals("", StringHelper::stripRight("hello world", "hello world"));

        $this->assertEquals("hello world", StringHelper::stripRight("hello world", ""));
        $this->assertEquals("hello world", StringHelper::stripRight("hello world", "World"));
        $this->assertEquals("hello world", StringHelper::stripRight("hello world", "hello"));
        $this->assertEquals("world", StringHelper::stripRight("world", "hello world"));
        $this->assertEquals("", StringHelper::stripRight("", "hello world"));
    }

}
