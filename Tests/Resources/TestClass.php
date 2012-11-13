<?php
namespace TestNamespace;

use \RuntimeException, \stdClass;
use \Exception 
as 
BaseException;

abstract class TestClass extends stdClass implements Serializable, Testable
{
    const TEST_CONSTANT = 1;
    const TEST_CONSTANTTWO = 2;
    
    protected $one;
    
    public $two;
    
    private $three = array();
    
    public $four, $five = "test";
    
    public function __construct() {
    }
    
    public function testMethod(stdClass $class)
    {
        echo "test";
    }
    
    public static function factory()
    {
        return new self();
    }
}


class TestClassTwo
{
    const TEST = 2;
}

function testFunction() {
    return "test";
}

function joeBarTeam() {
    echo "yeah";
}

interface TestInterface
{
    const JOE_BAR = 'test';
    
    public function test();
}