<?php declare(strict_types= 1);
namespace Miquelgarcia\tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Miquelgarcia\Lvl1Ex1\NumberChecker;

final class NumberCheckerTest extends TestCase{

    public static function listaNumerosPar() : array{
        return [[1, false],[4, true],[7, false],[10, true]];
    }
    #[DataProvider('listaNumerosPar')]
    public function testIsEven(int $numero, bool $respuestaEsperada){

        $numberChecker = new NumberChecker($numero);
        $respuestaCorrecta = $numberChecker->isEven();
        $this->assertEquals($respuestaEsperada,$respuestaCorrecta);
    }

    public static function listaNumerosPositivo() : array{
        return [[-1, false],[4, true],[-7, false],[10, true]];
    }
    #[DataProvider('listaNumerosPositivo')]
    public function testIsPositive(int $numero, bool $respuestaEsperada){
        $numberChecker = new NumberChecker($numero);
        $respuestaCorrecta = $numberChecker->isPositive();
        $this->assertEquals($respuestaEsperada,$respuestaCorrecta);
    }
}

?>