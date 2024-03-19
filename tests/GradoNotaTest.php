<?php 

namespace Miquelgarcia\tests;

use PHPUnit\Framework\TestCase;
use Miquelgarcia\Lvl1Ex2\GradoNota;

class GradoNotaTest extends TestCase{

    public function testGradoNotaPrimeraDivision(){

        $gradoNota = new GradoNota();

        $this->assertEquals("El grado es de primera división.", $gradoNota->verificarGrado(68));
    }

    public function testGradoNotaSegundaDivision(){

        $gradoNota = new GradoNota();

        $this->assertEquals("El grado es de segunda división.", $gradoNota->verificarGrado(53));
    }

    public function testGradoNotaTerceraDivision(){

        $gradoNota = new GradoNota();

        $this->assertEquals("El grado es de tercera división.", $gradoNota->verificarGrado(37));
    }

    public function testGradoNotaReprobado(){

        $gradoNota = new GradoNota();

        $this->assertEquals("El estudiante está reprobado.", $gradoNota->verificarGrado(8));
    }
}


?>