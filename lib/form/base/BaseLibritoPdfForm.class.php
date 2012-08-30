<?php

/**
 * LibritoPdf form base class.
 *
 * @method LibritoPdf getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLibritoPdfForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_librito_pdf'     => new sfWidgetFormInputHidden(),
      'filename'           => new sfWidgetFormInputText(),
      'caption'            => new sfWidgetFormInputText(),
      'librito_id_librito' => new sfWidgetFormPropelChoice(array('model' => 'Librito', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_librito_pdf'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdLibritoPdf()), 'empty_value' => $this->getObject()->getIdLibritoPdf(), 'required' => false)),
      'filename'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'caption'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'librito_id_librito' => new sfValidatorPropelChoice(array('model' => 'Librito', 'column' => 'id_librito')),
    ));

    $this->widgetSchema->setNameFormat('librito_pdf[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LibritoPdf';
  }


}
