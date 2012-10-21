<?php

namespace Documentor\Parsers;

/**
 * Test class for NamespaceParser.
 * Generated by PHPUnit on 2012-10-20 at 16:15:50.
 */
class NamespaceParserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var NamespaceParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new NamespaceParser(__DIR__ .'/../../File.php');
    }

    /**
     */
    public function testParse() {
        $res = $this->object->parse();
        $this->assertTrue(is_array($res));
        $this->assertEquals(3, count($res));
    }
    
    /**
     */
    public function testGetNamespace() {
        $this->assertEquals('Documentor', $this->object->getNamespace());
    }
} 