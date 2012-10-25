<?php



/**
 * Skeleton subclass for representing a row from the 'material' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Material extends BaseMaterial {
    public function setTitulo($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->titulo !== $v) {
            $this->titulo = $v;
            $this->modifiedColumns[] = MaterialPeer::TITULO;
        }


        return $this;
    }
    
      public function setEditorial($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->editorial !== $v) {
            $this->editorial = $v;
            $this->modifiedColumns[] = MaterialPeer::EDITORIAL;
        }


        return $this;
    }
    
    
     public function setAutor($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->autor !== $v) {
            $this->autor = $v;
            $this->modifiedColumns[] = MaterialPeer::AUTOR;
        }


        return $this;
    }
    
        public function setDescripcion($v)
    { $v=strtoupper($v);
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = MaterialPeer::DESCRIPCION;
        }


        return $this;
    }
} // Material
