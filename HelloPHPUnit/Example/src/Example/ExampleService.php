<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

require_once "src/Example/Mystery/Mystery.php";
require_once "src/Example/Mystery/Exception/MysteryException.php";
require_once "src/Example/ExampleEntityFactory.php";

use bntptr\example\mystery\exception\MysteryException;

class ExampleService
{
    /**
     * @var ExampleEntity
     */
    private $exampleEntity;

    /**
     * @var Mystery
     */
    private $mystery;

    public function __construct()
    {
        $this->exampleEntity = ExampleEntityFactory::createEntity('bntptr', 'Alpha');
    }

    /**
     * @return ExampleEntity
     */
    public function getExampleEntity()
    {
        return $this->exampleEntity;
    }

    /**
     * @param ExampleEntity $exampleEntity
     * @return ExampleEntity
     */
    public function setExampleEntity($exampleEntity)
    {
        return $this->exampleEntity = $exampleEntity;
    }

    /**
     * @param Mystery $mystery
     * @return Mystery
     */
    public function setMystery($mystery)
    {
        return $this->mystery = $mystery;
    }

    /**
     * @throws bntptr\example\mystery\exception\MysteryException
     * @return string
     */
    public function doSomething()
    {
        try {
            return $this->mystery->doSomething();
        } catch (\Exception $e) {
            throw new MysteryException();
        }
    }
}
