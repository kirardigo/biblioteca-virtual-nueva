<?php



/**
 * Skeleton subclass for representing a row from the 'pfisica' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Pfisica extends BasePfisica {
    public function setNombre($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = PfisicaPeer::NOMBRE;
        }


        return $this;
    }
    
        public function setApellido($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apellido !== $v) {
            $this->apellido = $v;
            $this->modifiedColumns[] = PfisicaPeer::APELLIDO;
        }


        return $this;
    }
} // Pfisica
