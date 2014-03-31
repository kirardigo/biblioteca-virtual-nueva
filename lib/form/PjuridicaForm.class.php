<?php

/**
 * Pjuridica form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class PjuridicaForm extends BasePjuridicaForm
{
  public function configure()
  {
      $this->embedRelation('DomicilioJ');
      $this->widgetSchema['cuit_cuil']->setLabel('Cuit / Cuil');
             $this->embedRelation('DomicilioJ', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Domicilio</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Domicilios',
                                    'post'=>'nada',
                                    'empty_label'=>'Nuevo Domicilio',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar el domicilio?')
                                     
                                            ),
                                  ));
  }
}
