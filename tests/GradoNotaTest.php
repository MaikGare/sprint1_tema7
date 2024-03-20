<?php 

namespace Miquelgarcia\Lvl1Ex2\tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Miquelgarcia\Lvl1Ex2\GradoNota;


class GradoNotaTest extends TestCase{

    public static function listaNotas() : array{
        return [[68,"El grado es de primera división."],
                [53,"El grado es de segunda división."],
                [37,"El grado es de tercera división."],
                [8,"El estudiante está reprobado."]];
    }

    #[DataProvider('listaNotas')]
    public function testGradoNota(int $nota, string $expected) : void{

        $gradoNota = new GradoNota();
        $resultado = $gradoNota->verificarGrado($nota);

        $this->assertEquals($expected,$resultado);
    }
}


?>