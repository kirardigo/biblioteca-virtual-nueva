<?php

/**
 * Usuario form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class UsuarioForm extends BaseUsuarioForm
{
  public function configure()
  {
     
    //si el usuario no es admin saco cierttos campos
   $user = sfContext::getInstance()->getUser();
     if ($user->hasCredential('user') ){
       
       unset($this['admin']);
       //quito la opcion de modificar el "usuario"
       unset($this['usuario']);
       
       unset($this['fisica_id_pfisica']);
     }  
     
     $var=$this->getValue('id_usuario');
     if (($user->getAttribute('id'))!= ($var) ){
        // return;

     }  
     $this->widgetSchema['password']->setAttribute('type','password');
 
      $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
        ));
     
     }
}
