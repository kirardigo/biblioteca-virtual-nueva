<?php

/**
 * Provincia form base class.
 *
 * @method Provincia getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProvinciaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_provincia' => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_provincia' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdProvincia()), 'empty_value' => $this->getObject()->getIdProvincia(), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('provincia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Provincia';
  }


}
