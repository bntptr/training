<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example;

class ExampleEntity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    public function __construct($name, $version)
    {
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     * @return string
     */
    public function setName($name)
    {
        return $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string
     * @return string
     */
    public function setVersion($version)
    {
        return $this->version = $version;
    }
}
