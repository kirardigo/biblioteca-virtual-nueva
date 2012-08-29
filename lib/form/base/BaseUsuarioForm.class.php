<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUsuarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idusuario' => new sfWidgetFormInputHidden(),
      'nombre'    => new sfWidgetFormInputText(),
      'password'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idusuario' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdusuario()), 'empty_value' => $this->getObject()->getIdusuario(), 'required' => false)),
      'nombre'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'password'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }


}
