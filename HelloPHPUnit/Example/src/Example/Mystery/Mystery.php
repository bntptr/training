<?php
/**
 * @author Benoit Potier
 * @license MIT
 */
namespace bntptr\example\mystery;

require_once "src/Example/Mystery/Exception/MysteryException.php";

use bntptr\example\mystery\exception\MysteryException;

class Mystery
{
    
    /**
     * @throws bntptr\example\mystery\exception\MysteryException
     */
    public function random()
    {
        throw new MysteryException();
    }

    /**
     * @return string
     */
    public function doSomething()
    {
        return "I do";
    }
}
