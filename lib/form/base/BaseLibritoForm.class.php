<?php

/**
 * Librito form base class.
 *
 * @method Librito getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLibritoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_librito' => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'price'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_librito' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdLibrito()), 'empty_value' => $this->getObject()->getIdLibrito(), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'price'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('librito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Librito';
  }


}
