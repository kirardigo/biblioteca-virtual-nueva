<?php

/**
 * Anuncio form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class AnuncioForm extends BaseAnuncioForm
{
  public function configure()
  {
	  
      unset($this['fecha_anuncio']);
unset($this['usuario_id_usuario']);
      
      
      
    //  $cosa=$this->getValue('titulo');
    //  $cosa->save(strtoupper($cosa));
   // unset($this['usuario_id_usuario']);
      
      
 //   $user = sfContext::getInstance()->getUser();
  //    $nombre= $user->getAttribute('id');
        

$this->widgetSchema['informacion'] = new sfWidgetFormTextarea();
//$this->widgetSchema['usuario_id_usuario']->setLabel('Usuario'); 
//$this->setDefault('usuario_id_usuario', 90);
        // 


      
          
  }



  
  
}
