<?php



/**
 * Skeleton subclass for representing a row from the 'pjuridica' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Pjuridica extends BasePjuridica {
    public function setNombre($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = PjuridicaPeer::NOMBRE;
        }


        return $this;
    }
    
      public function setRazonSocial($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->razon_social !== $v) {
            $this->razon_social = $v;
            $this->modifiedColumns[] = PjuridicaPeer::RAZON_SOCIAL;
        }


        return $this;
    }
} // Pjuridica
