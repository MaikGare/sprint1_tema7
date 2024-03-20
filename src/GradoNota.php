<?php 

namespace Miquelgarcia\Lvl1Ex2;

class GradoNota{

    public function __construct(){

    }

    public function verificarGrado(int $nota) : string{
        if ($nota > 60) {
            return "El grado es de primera división.";
        } elseif ( $nota >= 45) {
            return "El grado es de segunda división.";
        } elseif ( $nota >= 33) {
            return "El grado es de tercera división.";
        } else{
            return "El estudiante está reprobado.";
        }
     
    }
}

?>