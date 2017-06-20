# php-filter
A type validate &amp; filter plugin for PHP projects

[![Latest Stable Version](https://poser.pugx.org/taobig/php-filter/v/stable)](https://packagist.org/packages/taobig/php-filter)
[![Total Downloads](https://poser.pugx.org/taobig/php-filter/downloads)](https://packagist.org/packages/taobig/php-filter)
[![License](https://poser.pugx.org/taobig/php-filter/license)](https://packagist.org/packages/taobig/php-filter)
[![Build Status](https://travis-ci.org/taobig/php-filter.svg?branch=master)](https://travis-ci.org/taobig/php-filter)

### INSTALLATION
**Install via Composer**  
If you do not have Composer, you may install it refer to [getcomposer.org](https://getcomposer.org/download/).

You can then install this project template using the following command:
```
php composer.phar require taobig/php-filter

```

## Usage
```
$validator = new taobig\filter\filters\TypeValidator();
$validator->isString("hello world");//return true
$validator->isString(1111.32333, false);//return true
$validator->isInt(1111);//return true
$validator->isInt("1111", false);//return true
$validator->isIntList([1111]);//return true
$validator->isIntList(["1111"], false);//return true
$validator->isStringList(["1111"]);//return true
$validator->isStringList([1111], false);//return true

$filter = new taobig\filter\filters\TypeFilter(['exceptionMessage'=>'parameters type error']);
$filter->stringVal("hello world");//return "hello world"
$filter->stringVal(1111.32333, false);//return "1111.32333"
$filter->intVal("1111", false);//return 1111

$validator = new taobig\filter\validators\MobileValidator();  
$validator->isChineseMobile("13800001111");//return true


-----------------------------------

use taobig\filter\helpers\StringHelper;
StringHelper::startsWith("hello world", "h");//true
StringHelper::startsWith("hello world", "");//true
StringHelper::startsWith("hello world", "H");//false
StringHelper::startsWith("hello", "hello world");//false

StringHelper::endsWith("hello world", "world");//true
StringHelper::endsWith("world", "hello world");//false
StringHelper::endsWith("", "hello world");//false

StringHelper::stripLeft("hello world", "hello ");//"world"

StringHelper::stripRight("hello world", "world");//"hello "


DatetimeHelper::millisecondTimestamps();//1497966001944

```
