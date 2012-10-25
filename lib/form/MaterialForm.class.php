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
     $this->widgetSchema['subcontenido_id_subcontenido']->setLabel('Tema');
     $this->widgetSchema['biblioteca_id_biblioteca']->setLabel('Biblioteca');
     $this->widgetSchema['carrera_id_carrera']->setLabel('Carrera');

          parent::configure();
    
    //error de csrf token si no se metia el codigo siguiente
    $this->disableLocalCSRFProtection(); 

    $this->widgetSchema['archivo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Cargar archivo',
      'file_src'  => '/uploads/files/'.$this->getObject()->getArchivo(),
      'is_image'  => false,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['archivo_delete'] = new sfValidatorPass();
    
 
  $this->setValidator('archivo', new sfValidatorFile(array(
    //'mime_types' => array('application/pdf'),
    'path' => sfConfig::get('sf_upload_dir').'/files',
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
    $autor=str_replace(" ", "_",$autor);
    $titulo=str_replace(" ", "_",$titulo);
    
    $autor=str_replace(".", "_",$autor);
    $titulo=str_replace(".", "_",$titulo);
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
