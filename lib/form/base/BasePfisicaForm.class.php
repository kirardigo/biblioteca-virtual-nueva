<?php

/**
 * Pfisica form base class.
 *
 * @method Pfisica getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePfisicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pfisica'           => new sfWidgetFormInputHidden(),
      'nombre'               => new sfWidgetFormInputText(),
      'apellido'             => new sfWidgetFormInputText(),
      'varon'                => new sfWidgetFormInputCheckbox(),
      'fecha_nac'            => new sfWidgetFormDate(),
      'tipo_doc_id_tipo_doc' => new sfWidgetFormPropelChoice(array('model' => 'TipoDoc', 'add_empty' => false)),
      'documento'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pfisica'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPfisica()), 'empty_value' => $this->getObject()->getIdPfisica(), 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 45)),
      'apellido'             => new sfValidatorString(array('max_length' => 45)),
      'varon'                => new sfValidatorBoolean(array('required' => false)),
      'fecha_nac'            => new sfValidatorDate(array('required' => false)),
      'tipo_doc_id_tipo_doc' => new sfValidatorPropelChoice(array('model' => 'TipoDoc', 'column' => 'id_tipo_doc')),
      'documento'            => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('pfisica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pfisica';
  }


}
