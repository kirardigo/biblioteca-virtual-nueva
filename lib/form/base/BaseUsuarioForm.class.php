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
      'id_usuario'        => new sfWidgetFormInputHidden(),
      'usuario'           => new sfWidgetFormInputText(),
      'password'          => new sfWidgetFormInputText(),
      'admin'             => new sfWidgetFormInputCheckbox(),
      'email'             => new sfWidgetFormInputText(),
      'fisica_id_pfisica' => new sfWidgetFormPropelChoice(array('model' => 'Pfisica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_usuario'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdUsuario()), 'empty_value' => $this->getObject()->getIdUsuario(), 'required' => false)),
      'usuario'           => new sfValidatorString(array('max_length' => 45)),
      'password'          => new sfValidatorString(array('max_length' => 45)),
      'admin'             => new sfValidatorBoolean(array('required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fisica_id_pfisica' => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica')),
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
