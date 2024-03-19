<?php 
namespace Miquelgarcia\tests;

use PHPUnit\Framework\TestCase;
use Miquelgarcia\Lvl1Ex1\NumberChecker;

class NumberCheckerTest extends TestCase{

    public function testIsEven(){
        $numberChecker = new NumberChecker(3);

        $this->assertEquals(false, $numberChecker->isEven());
    }

    public function testIsPositive(){
        $numberChecker = new NumberChecker(-2);

        $this->assertEquals(false, $numberChecker->isPositive());
    }
}



?>