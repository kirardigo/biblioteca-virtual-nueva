<?php

/**
 * Usuario form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class UsuarioForm extends BaseUsuarioForm
{
  public function configure()
  {
   /* parent::configure();
    
    //error de csrf token si no se metia el codigo siguiente
    $this->disableLocalCSRFProtection(); 

    $this->widgetSchema['password'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Company logo',
      'file_src'  => '/uploads/products/'.$this->getObject()->getPassword(),
      'is_image'  => false,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['password_delete'] = new sfValidatorPass();
    
 
  $this->setValidator('password', new sfValidatorFile(array(
    //'mime_types' => array('application/pdf'),
    'path' => sfConfig::get('sf_upload_dir').'/products',
    'required' => false,
  )));*/
  }
}
