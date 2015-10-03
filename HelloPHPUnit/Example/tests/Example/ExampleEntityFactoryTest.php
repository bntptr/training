<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once "src/Example/ExampleEntityFactory.php";

use bntptr\example\ExampleEntityFactory;

class ExampleEntityFactoryTest extends \PHPUnit_Framework_TestCase
{
    private $factory;

    public function setUp()
    {
        $this->factory = new ExampleEntityFactory();
    }

    /**
     * @dataProvider exampleDataProvider
     */
    public function testCreateEntity($name, $version)
    {
        // mock des méthodes
        $this->assertInstanceOf(
            ExampleEntity::class,
            ExampleEntityFactory::createEntity($name, $version)
        );
    }

    public function exampleDataProvider()
    {
        return [
            [
                'exampleA',
                '1.0.0'
            ],
            [
                'exampleB',
                'RC1'
            ]
        ];
    }
}
