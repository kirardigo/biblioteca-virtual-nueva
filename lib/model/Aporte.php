<?php



/**
 * Skeleton subclass for representing a row from the 'aporte' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Aporte extends BaseAporte {
    
  public function save (PropelPDO $con = null){ 
      //obtengo el usuario
    $user = sfContext::getInstance()->getUser();
    //obtengo su id
    $var=$user->getAttribute('id');
    //seteo su id en la bd
    $this->setUsuarioIdUsuario($var);
      
    return parent::save($con);
  }
  
} // Aporte
