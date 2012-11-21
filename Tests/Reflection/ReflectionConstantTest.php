<?php

namespace Documentor\Reflection;

/**
 * Test class for ReflectionConstant.
 * Generated by PHPUnit on 2012-11-21 at 18:40:45.
 */
class ReflectionConstantTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ReflectionConstant
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ReflectionConstant("test", "testValue");
    }

    /**
     */
    public function testGetName() {
        $this->assertEquals("test", $this->object->getName());
    }

    /**
     */
    public function testSetName() {
        $this->assertEquals("test", $this->object->getName());
        $this->object->setName("otherName");
        $this->assertEquals("otherName", $this->object->getName());
    }

    /**
     */
    public function testStartLine() {
        $this->assertEquals(0, $this->object->getStartLine());
        $this->object->setStartLine(3);
        $this->assertEquals(3, $this->object->getStartLine());
    }

    /**
     */
    public function testEndLine() {
        $this->assertEquals(0, $this->object->getEndLine());
        $this->object->setEndLine(3);
        $this->assertEquals(3, $this->object->getEndLine());
    }
    
     /**
     */
    public function testDocComment() {
        $this->assertEquals(null, $this->object->getDocComment());
        $doc = new \Documentor\DocComment("/** testComment */");
        $this->object->setDocComment($doc);
        $this->assertEquals($doc, $this->object->getDocComment());
    }

    /**
     */
    public function testValue() {
        $this->assertEquals("testValue", $this->object->getValue());
        $this->object->setValue("newValue");
        $this->assertEquals("newValue", $this->object->getValue());
    }
}
