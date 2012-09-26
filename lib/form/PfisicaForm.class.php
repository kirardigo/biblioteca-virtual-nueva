<?php

/**
 * Pfisica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class PfisicaForm extends BasePfisicaForm
{
  public function configure()
  {
      //$this->embedRelation('Usuario');
      
     // $this->validatorSchema->setOption('allow_extra_fields',true); 
  
           parent::configure();

        if($this->isNew())
            $child = new Usuario ();
        else
            $child = $this->getObject()->getUsuario();
        $child->Parent = $this->getObject();
        $this->getObject()->setUsuario($child);
        
        $form2 = new UsuarioForm($child);

        $this->embedForm('usuario', $form2);

       // unset($this['pedido_producto_list']);
   
      $this->embedRelation('CarreraFisica');
      
  }
}
