<?php

/**
 * Anuncio form base class.
 *
 * @method Anuncio getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnuncioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_anuncio'         => new sfWidgetFormInputHidden(),
      'titulo'             => new sfWidgetFormInputText(),
      'informacion'        => new sfWidgetFormTextarea(),
      'fecha_anuncio'      => new sfWidgetFormDateTime(),
      'usuario_id_usuario' => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_anuncio'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAnuncio()), 'empty_value' => $this->getObject()->getIdAnuncio(), 'required' => false)),
      'titulo'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'informacion'        => new sfValidatorString(),
      'fecha_anuncio'      => new sfValidatorDateTime(),
      'usuario_id_usuario' => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id_usuario')),
    ));

    $this->widgetSchema->setNameFormat('anuncio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Anuncio';
  }


}
