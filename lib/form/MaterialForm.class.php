<?php

/**
 * Material form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class MaterialForm extends BaseMaterialForm
{
  public function configure()
  {
     $this->widgetSchema['tema_id_tema']->setLabel('Tema');
     $this->widgetSchema['biblioteca_id_biblioteca']->setLabel('Biblioteca');
     //$this->widgetSchema['carrera_id_carrera']->setLabel('Carrera');
        $this->embedRelation('MaterialCarrera', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Carrera</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Carreras',
                                    'post'=>'nada',
                                    'empty_label'=>'Nueva Carrera',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar la carrera?')
                                     
                                            ),
                                  ));
          parent::configure();
    
    //error de csrf token si no se metia el codigo siguiente
    $this->disableLocalCSRFProtection(); 

    $this->widgetSchema['archivo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Cargar archivo',
      'file_src'  => '/uploads/material/'.$this->getObject()->getArchivo(),
      'is_image'  => false,
      'edit_mode' => !$this->isNew(),
      'delete_label'=>'¿Eliminar el archivo?',
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['archivo_delete'] = new sfValidatorPass();
    
 
  $this->setValidator('archivo', new sfValidatorFile(array(
    //'mime_types' => array('application/pdf'),
    //'max_size'=>'999M',
    'path' => sfConfig::get('sf_upload_dir').'/material',
    'required' => false,
      'validated_file_class' => 'SwimsuitValidatedFile',
  )));
      
  }
    public function save ($con = null)
  { 
    // Get the uploaded image
    $file = $this->getValue('archivo');
    //$editorial=$this->getValue('editorial');
    //pasar a mayusculas
    $autor= strtoupper($this->getValue('autor'));
    $titulo= strtoupper($this->getValue('titulo'));
    //cambio espacios por guiones bajos

$revisador= new myFunctions();

$autor=$revisador->sanearString($autor);
$titulo=$revisador->sanearString($titulo);
    //extension de archivo
    if (empty ($autor)){
        $autor='ANONIMO';//anonimo, no autor, especial para caso de imagenes
    }
    // $filename = sha1($file->getOriginalName()).$file->getExtension($file->getOriginalExtension());
      $caca= $this->getValue('autor');
      
      
    $swimsuit = $this->getObject();

    if ($file)
    {
      
       $extension = strtoupper( $file->getExtension($file->getOriginalExtension()) );
       $file->save( $autor.'_'.$titulo.$extension);
    
      // $caca->save(strtoupper('  '.$caca));
    }

    return parent::save($con);
  }
}
