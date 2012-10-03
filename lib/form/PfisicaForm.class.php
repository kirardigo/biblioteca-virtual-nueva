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
   $this->widgetSchema['tipo_doc_id_tipo_doc']->setLabel('Tipo de Documento');
       $this->widgetSchema['fecha_nac']->setLabel('Fecha de Nacimiento');
   $this->widgetSchema['varon']->setLabel('¿Es Masculino?');
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
        $this->embedRelation('Domicilio');
              


            
           
        //$this->embedForm('usuario', $form22);
      
      

      
      
      

      
  }
}
