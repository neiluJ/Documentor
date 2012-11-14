<?php
/**
 * File Doc Comment
 */
namespace TestNamespace;

use \RuntimeException, \stdClass;
use \Exception
as
BaseException;

/**
 * We love class comments
 */
class TestClass extends stdClass implements Serializable, Testable
{
    /**
     * Constant comment
     */
    const TEST_CONSTANT = 1;
    const TEST_CONSTANTTWO = 2;

    protected $one;

    public $two;

    private $three = array();

    public $four, $five = "test";

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Test method
     *
     * @param stdClass $class
     *
     * @return void
     * @throws \Exception
     */
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

/**
 * This is a function comment
 *
 * @return string
 */
function testFunction(YouPi $paramOne = null, array & $joe = array()) {
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