<?php

namespace Humberto;

class Multiple
{
    public function setMultiple($Multiplo, $Texto, $Incremento)
    {
        if (gettype($Incremento) != 'string' && $Incremento % ($Multiplo) == 0) {
            return $Texto;
        }
        return $Incremento;
    }

    public function get($Total)
    {
        $Multiples = array();
        for ($i=0; $i <= $Total; $i++) {
            $Multiples[] = $this->setMultiple(3, 'Linio', $this->setMultiple(5, 'IT', $this->setMultiple(5 * 3, 'Linianos', $i)));
        }
        return $Multiples;
    }
}

?>
