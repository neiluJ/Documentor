<?php
namespace TestNamespace;

use \RuntimeException, \stdClass;
use \Exception 
as 
BaseException;

class TestClass
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
        
        echo "pw";
    }
    
    public static function factory()
    {
        return new self();
    }
}