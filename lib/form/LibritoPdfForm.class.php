<?php

/**
 * LibritoPdf form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class LibritoPdfForm extends BaseLibritoPdfForm
{
  public function configure()
  {
$this->setWidget('linkToFile', new sfWidgetFormInputFile(array(), array()));
      $this->getWidget('linkToFile')->setLabel('Document Upload');
      $this->setValidator('linkToFile', new sfValidatorFile(array("required"=>false), array()));
      //$this->setDefault('linkToFile', $this->getObject()->getLinkToFile());
      
     /* $this->widgetSchema['caption'] = new sfWidgetFormInputFileEditable(array(
    'label' => ' ',
    'file_src' => '/uploads/products/'.$this->getObject()->getCaption(),
    'is_image' => true,
    'edit_mode' => true,
    'template' => '<div>%file%<br />%input%</div>',
));*/
  }
}
