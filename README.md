# php-filter
A type validate &amp; filter plugin for PHP projects

[![Latest Stable Version](https://poser.pugx.org/taobig/php-filter/v/stable)](https://packagist.org/packages/taobig/php-filter)
[![Latest Unstable Version](https://poser.pugx.org/taobig/php-filter/v/unstable)](https://packagist.org/packages/taobig/php-filter)
[![Total Downloads](https://poser.pugx.org/taobig/php-filter/downloads)](https://packagist.org/packages/taobig/php-filter)
[![License](https://poser.pugx.org/taobig/php-filter/license)](https://packagist.org/packages/taobig/php-filter)
[![Build Status](https://travis-ci.org/taobig/php-filter.svg?branch=master)](https://travis-ci.org/taobig/php-filter)
[![Coverage Status](https://coveralls.io/repos/github/taobig/php-filter/badge.svg)](https://coveralls.io/github/taobig/php-filter)

### INSTALLATION
**Install via Composer**  
If you do not have Composer, you may install it refer to [getcomposer.org](https://getcomposer.org/download/).

You can then install this project template using the following command:
```
php composer.phar require taobig/php-filter

```

## Usage
```
use taobig\filter\filters\TypeValidator;
TypeValidator::isString("hello world");//return true
TypeValidator::isString(1111.32333, false);//return true
TypeValidator::isInt(1111);//return true
TypeValidator::isInt("1111", false);//return true
TypeValidator::isIntList([1111]);//return true
TypeValidator::isIntList(["1111"], false);//return true
TypeValidator::isStringList(["1111"]);//return true
TypeValidator::isStringList([1111], false);//return true


$filter = new taobig\filter\filters\TypeFilter(['exceptionMessage'=>'parameters type error']);
$filter->stringVal("hello world");//return "hello world"
$filter->stringVal(1111.32333, false);//return "1111.32333"
$filter->intVal("1111", false);//return 1111

use taobig\filter\filters\MobileValidator;  
TypeValidator::isChineseMobile("13800001111");//return true


-----------------------------------


use taobig\filter\helpers\MathHelper;
MathHelper::add("1.01", "2.12");//"3.13"
MathHelper::add("1.01666", "2.12999");//"3.14"
MathHelper::sub("5.11", "3.10");//"2.01"
MathHelper::mul("1.11", "3");//"3.33"
MathHelper::div("1", "0.0003");//"3333.33"
MathHelper::comp("3", "3.009");//0

```
