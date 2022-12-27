<?php 

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd(){

        $calculator = new App\Calculator;
        $result = $calculator->add(15,5);

        
        $this->assertEquals(25,$result);
    }
}

?>