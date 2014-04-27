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
      'id_usuario' => new sfWidgetFormInputHidden(),
      'valido'     => new sfWidgetFormInputCheckbox(),
      'usuario'    => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'admin'      => new sfWidgetFormInputCheckbox(),
      'email'      => new sfWidgetFormInputText(),
      'subidor'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id_usuario' => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica', 'required' => false)),
      'valido'     => new sfValidatorBoolean(array('required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 45)),
      'password'   => new sfValidatorString(array('max_length' => 45)),
      'admin'      => new sfValidatorBoolean(array('required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'subidor'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Usuario', 'column' => array('usuario')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }


}
