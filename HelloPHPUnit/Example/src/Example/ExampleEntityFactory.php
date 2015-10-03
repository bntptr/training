<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once("src/Example/ExampleEntity.php");

class ExampleEntityFactory
{
    public function __construct()
    {
    }

    /**
     * @param string $name
     * @param string $version
     * @return ExampleEntity
     */
    public static function createEntity($name, $version)
    {
        return new ExampleEntity($name, $version);
    }
}
