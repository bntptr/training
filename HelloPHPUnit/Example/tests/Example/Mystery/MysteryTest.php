<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example\mystery;

require_once "src/Example/Mystery/Mystery.php";

class MysteryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * var Mystery
     */
    private $mystery;

    public function setUp()
    {
        $this->mystery = new Mystery();
    }

    /**
     * @expectedException bntptr\example\mystery\exception\MysteryException
     */
    public function testMysteryException()
    {
        $this->mystery->random();
    }

    public function testDoSomething()
    {
        $this->assertEquals("I do", $this->mystery->doSomething());
    }
}
