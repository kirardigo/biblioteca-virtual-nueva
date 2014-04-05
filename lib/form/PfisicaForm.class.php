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
            $anios = range(date('Y') - 80, date('Y') - 18);
      $this->widgetSchema['fecha_nac']->setOption('years', $anios);
      $this->widgetSchema['fecha_nac']->setOption('years', array_combine($anios, $anios));
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
       
       
       

   
        $this->embedRelation('CarreraFisica',
                              array('add_link'=>'<div class="btn btn-inverse" onclick="confirm("Esta seguro de eliminar la persona?")">Agregar Carrera</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Carreras',
                                    'post'=>'nada',
                                    'empty_label'=>'Nueva Carrera',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar la carrera?')
                                     
                                            ),
                                  ));
        $this->embedRelation('Domicilio', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Domicilio</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Domicilios',
                                    'post'=>'nada',
                                    'empty_label'=>'Nuevo Domicilio',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar el domicilio?')
                                     
                                            ),
                                  ));
              

            
           
        //$this->embedForm('usuario', $form22);
      
      

      
      
      

      
  }
}
