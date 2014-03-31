<?php

/**
 * Contenido form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class ContenidoForm extends BaseContenidoForm
{
  public function configure()
  {
        $this->embedRelation('Subcontenido');
       // unset($this['pedido_producto_list']);
        
                $this->embedRelation('Subcontenido', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Subcontenido</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Subcontenidos',
                                    'post'=>'nada',
                                    'empty_label'=>'Nuevo Subcontenido',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar el subcontenido?')
                                     
                                            ),
                                  ));
  }
}
