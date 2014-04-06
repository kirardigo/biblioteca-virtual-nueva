<?php

/**
 * Subcontenido form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class SubcontenidoForm extends BaseSubcontenidoForm
{
  public function configure()
  {
          $this->widgetSchema['contenido_id_contenido']->setLabel('Contenido');
 
                    $this->widgetSchema['numero_subcontenido']->setLabel('Numero de Subcontenido');
                    
          $this->embedRelation('Tema', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Tema</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    //'parent_level'=>'6',
                                    'title'=>'Temas',
                                    'post'=>2,
                                    'empty_label'=>'Nuevo Tema',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar el tema?')
                                     
                                            ),
                                  ));
    
      
  }
}
