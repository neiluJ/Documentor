<?php

namespace Documentor;

/**
 * Test class for ThemeResource.
 * Generated by PHPUnit on 2012-11-25 at 22:10:44.
 */
class ThemeResourceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ThemeResource
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ThemeResource(__DIR__ .'/../Themes/Resources/markdown/class.phtml');
    }

    /**
     */
    public function testUrl() {
        $this->assertEquals(
            './classes/Documentor/TestClass', 
            $this->object->url('Documentor\TestClass', 'class')
        );
        
        $this->assertEquals(
            '../../../classes/Documentor/Reflection/ReflectionClass', 
            $this->object->url(
                'Documentor\Reflection\ReflectionClass', 
                'class',
                'Documentor\Reflection\ReflectionMethod'
            )
        );
    }

}