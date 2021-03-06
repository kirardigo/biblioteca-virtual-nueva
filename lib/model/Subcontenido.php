<?php



/**
 * Skeleton subclass for representing a row from the 'subcontenido' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Subcontenido extends BaseSubcontenido {
    public function setNombre($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::NOMBRE;
        }


        return $this;
    }
    
      public function setNumeroSubcontenido($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->numero_subcontenido !== $v) {
            $this->numero_subcontenido = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::NUMERO_SUBCONTENIDO;
        }


        return $this;
    }
} // Subcontenido
