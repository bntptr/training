<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

include_once("src/Example/ExampleService.php");

class ExampleServiceFactory
{
    public function __construct()
    {
    }

    /**
     * @return ExampleService
     */
    public static function createService()
    {
        return new ExampleService();
    }
}
