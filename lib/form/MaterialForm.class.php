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
  )));
      
  }
}
