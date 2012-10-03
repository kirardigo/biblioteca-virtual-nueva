<?php



/**
 * Skeleton subclass for representing a row from the 'usuario' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Usuario extends BaseUsuario {
  public function setPassword($v){
  //una vez ingresado el password, se guarda
  //en la base con la codificacion 'md5()'
      $aux=$v;
      if(($v)){
         $v= md5($v);}else{$v=md5('123');}
       if ($aux==$this->getPassword()){
           $v=$aux;
       }    
      return parent::setPassword($v);
  }// setPassword()
 //   public function getPassword(){
  //una vez ingresado el password, se guarda
  //en la base con la codificacion 'md5()'

           
   //   return '';
 // }// setPassword()
  
} // Usuario
