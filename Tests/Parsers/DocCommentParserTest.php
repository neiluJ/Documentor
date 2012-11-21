<?php

namespace Documentor\Parsers;


/**
 * Test class for DocCommentParser.
 * Generated by PHPUnit on 2012-11-21 at 17:45:22.
 */
class DocCommentParserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var DocCommentParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DocCommentParser(__DIR__ .'/../Resources/TestClass.php');
    }

    /**
     */
    public function testParse() {
        $res = $this->object->parse();
        $this->assertTrue(is_array($res));
        $this->assertEquals(6, count($res));
    }

}