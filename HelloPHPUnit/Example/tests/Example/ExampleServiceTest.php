<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once "src/Example/ExampleService.php";

use bntptr\example\ExampleService;
use bntptr\example\ExampleEntity;
use bntptr\example\mystery\Mystery;

class ExampleServiceTest extends \PHPUnit_Framework_TestCase
{
    private $service;

    public function setUp()
    {
        $this->service = new ExampleService();
    }

    /**
     * @param ExampleEntity $entity
     * @dataProvider exampleDataProvider
     */
    public function testExampleEntity($entity)
    {
        $this->service->setExampleEntity($entity);

        $this->assertEquals($entity, $this->service->getExampleEntity());
    }

    public function exampleDataProvider()
    {
        return [
            [
                new ExampleEntity('exampleA', '1.0.0')
            ],
            [
                new ExampleEntity('exampleB', 'Alpha')
            ]
        ];
    }

    public function testDoSomething()
    {
        $this->markTestIncomplete(
          'This test is not ok.'
        );
        $mystery = $this->getMockBuilder('Mystery')
                     ->getMock();

        $mystery->method('doSomething')
             ->willReturn('foo');

        $this->service->setMystery($mystery);

        $this->assertEquals('foo', $this->service->doSomething());
    }

    /**
     * @expectedException bntptr\example\mystery\exception\MysteryException
     */
    public function testDoSomethingMysteryException()
    {
        $this->markTestSkipped(
          'This test is not ok.'
        );
        $example = new ExampleService();
        $example->setMystery(null);
        $example->doSomething();
    }
}
