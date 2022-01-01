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
    //name must start with word Test + Success or Failure or Malformed + function name, or can be stand alone method eg assertInstanceOf

    // Success Test = pass in good/valid input of correct data type
    // public function testSuccess_AddSomething(): void
    // {
    //     $result = $this->boiler->addSomething(2, 5);
    //     $this->assertEquals(7, $result);
    // }
 
    // Failure Test = pass in correct data type that is outside of range, to test that this fails as expected (assumes a retricted range of inputs)
    // public function testFailureExampleNumbersNotEquals(): void {
    //     $this->assertNotEquals(5, 9);
    // }

    // Malformed Test = for when you expect an exception/error to be thrown
    // public function  testMalformedAddingIntToArrayReturnsError()
    // {
    //     $inputInt = 77;
    //     $inputArray = [];
    //     // must call the expectException() line before the $result line
    //     $this->expectException(TypeError::class);
    //     $result = $this->boiler->addSomething($inputInt, $inputArray);
    // }



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

        public function testSuccess2_calculateFinalPosition130(): void
    {
        $secondInput = "forward 5
down 5
forward 8
up 3
down 8";  
        $result = $this->boiler->calculateFinalPosition($secondInput);
        $this->assertEquals(130, $result);
    }

}