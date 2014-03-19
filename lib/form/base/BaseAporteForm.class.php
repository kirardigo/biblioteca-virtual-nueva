<?php

/**
 * Aporte form base class.
 *
 * @method Aporte getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAporteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_aporte'          => new sfWidgetFormInputHidden(),
      'archivo'            => new sfWidgetFormInputText(),
      'titulo'             => new sfWidgetFormInputText(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'usuario_id_usuario' => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_aporte'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAporte()), 'empty_value' => $this->getObject()->getIdAporte(), 'required' => false)),
      'archivo'            => new sfValidatorString(array('max_length' => 45)),
      'titulo'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'descripcion'        => new sfValidatorString(array('required' => false)),
      'usuario_id_usuario' => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id_usuario')),
    ));

    $this->widgetSchema->setNameFormat('aporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aporte';
  }


}
