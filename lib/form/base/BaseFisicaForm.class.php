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
      'id_pfisica'           => new sfWidgetFormInputHidden(),
      'nombre'               => new sfWidgetFormInputText(),
      'apellido'             => new sfWidgetFormInputText(),
      'varon'                => new sfWidgetFormInputCheckbox(),
      'fecha_nac'            => new sfWidgetFormInputText(),
      'tipo_doc_id_tipo_doc' => new sfWidgetFormPropelChoice(array('model' => 'TipoDoc', 'add_empty' => false)),
      'documento'            => new sfWidgetFormInputText(),
      'persona_id_persona'   => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_pfisica'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPfisica()), 'empty_value' => $this->getObject()->getIdPfisica(), 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'apellido'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'varon'                => new sfValidatorBoolean(array('required' => false)),
      'fecha_nac'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'tipo_doc_id_tipo_doc' => new sfValidatorPropelChoice(array('model' => 'TipoDoc', 'column' => 'id_tipo_doc')),
      'documento'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'persona_id_persona'   => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona')),
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
