<?php

/**
 * Fisica form base class.
 *
 * @method Fisica getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFisicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_fisica' => new sfWidgetFormInputHidden(),
      'nombre'    => new sfWidgetFormInputText(),
      'apellido'  => new sfWidgetFormInputText(),
      'usuario'   => new sfWidgetFormInputText(),
      'password'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_fisica' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdFisica()), 'empty_value' => $this->getObject()->getIdFisica(), 'required' => false)),
      'nombre'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'apellido'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'usuario'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'password'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fisica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fisica';
  }


}
