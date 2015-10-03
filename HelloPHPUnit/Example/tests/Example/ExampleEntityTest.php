<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once "src/Example/ExampleEntity.php";

use bntptr\example\ExampleEntity;

class ExampleEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider exampleDataProvider
     */
    public function testGetName($name, $version)
    {
        $exemple = new ExampleEntity($name, $version);

        $this->assertEquals($name, $exemple->getName());
    }

    public function testsetName()
    {
        $exemple = new ExampleEntity("Example", "RC1");

        $name = "ExampleA";
        $exemple->setName($name);
        $this->assertEquals($name, $exemple->getName());
    }

    /**
     * @dataProvider exampleDataProvider
     */
    public function testGetVersion($name, $version)
    {
        $exemple = new ExampleEntity($name, $version);

        $this->assertEquals($version, $exemple->getVersion());
    }

    /**
     * @dataProvider exampleDataProvider
     */
    public function testsetVersion($name, $version)
    {
        $exemple = new ExampleEntity($name, $version);

        $versionAlpha = "Alpha";
        $exemple->setVersion($versionAlpha);
        $this->assertEquals($versionAlpha, $exemple->getVersion());
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
