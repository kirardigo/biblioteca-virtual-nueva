<?php

/**
 * Provincia form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class ProvinciaForm extends BaseProvinciaForm
{
  public function configure()
  {
      $this->embedRelation('Localidad');
      
                   $this->embedRelation('Localidad', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Localidad</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Localidades',
                                    'post'=>'nada',
                                    'empty_label'=>'Nueva Localidad',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar la localidad?')
                                     
                                            ),
                                  ));
  }
}
