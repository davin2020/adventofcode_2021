<?php declare(strict_types=1);
require 'BoilerPlate.php';

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error;

class BoilerPlateTest extends TestCase
{
    private $boiler;

    protected function setUp()
    {
        $this->boiler = new BoilerPlate();
    }
 
    protected function tearDown()
    {
        $this->boiler = NULL;
    }
 
    //function names should match corresponding class method name - names should be descriptive as will get used by --testdox flag
    //test function might not return something, but function itself must, in order to be testable
    //name must start with word Test + Success (with valid input) or Failure (with incorrect data type or data outside of expected range) or Malformed (when an exception/error is expected) + function name, or can be stand alone method eg assertInstanceOf


    public function testSuccess1_calculateFinalPosition150(): void
    {
        $firstInput = "forward 5
down 5
forward 8
up 3
down 8
forward 2";  
        $result = $this->boiler->calculateFinalPosition($firstInput);
        $this->assertEquals(150, $result);
    }

        public function testSuccess2_calculateFinalPosition24(): void
    {
        $secondInput = "forward 3
down 4
forward 3
up 4
down 4";  
        $result = $this->boiler->calculateFinalPosition($secondInput);
        $this->assertEquals(24, $result);
    }

    
    public function testSuccess1_calculatePart2Position900(): void
    {
        $part2Input = "forward 5
down 5
forward 8
up 3
down 8
forward 2";  
        $result = $this->boiler->calculatePart2Position($part2Input);
        $this->assertEquals(900, $result);
    }

}