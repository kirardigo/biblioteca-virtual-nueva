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
    // $user= $this->getValue('id_usuario');
     //keria sacar el usuario,, pero esto sirve cuando se guarda nomas
     //$this->setDefault('password', 'hola');
    // $pass=$this->setWidget('password', 'hola');
     //$this->widgetSchema['usuario']->setAttribute('value','userrr');
     
     $this->widgetSchema['password']->setAttribute('type','password');
     $this->validatorSchema['password']->setOption('min_length', 6);
 //$this->widgetSchema['password']->set
     

//$this->validatorSchema['password']-> 
     
     
     $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
        ));
     
     }
}
