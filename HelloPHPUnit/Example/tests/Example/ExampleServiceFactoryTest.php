<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once "src/Example/ExampleServiceFactory.php";

use bntptr\example\ExampleServiceFactory;

class ExampleServiceFactoryTest extends \PHPUnit_Framework_TestCase
{
    private $factory;

    public function setUp()
    {
        $this->factory = new ExampleServiceFactory();
    }

    public function testCreateService()
    {
        $this->assertInstanceOf(
            ExampleService::class,
            ExampleServiceFactory::createService()
        );
    }
}
