<?php

/**
 * Localidad form base class.
 *
 * @method Localidad getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLocalidadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_localidad'           => new sfWidgetFormInputHidden(),
      'nombre'                 => new sfWidgetFormInputText(),
      'cod_postal'             => new sfWidgetFormInputText(),
      'provincia_id_provincia' => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_localidad'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdLocalidad()), 'empty_value' => $this->getObject()->getIdLocalidad(), 'required' => false)),
      'nombre'                 => new sfValidatorString(array('max_length' => 45)),
      'cod_postal'             => new sfValidatorString(array('max_length' => 45)),
      'provincia_id_provincia' => new sfValidatorPropelChoice(array('model' => 'Provincia', 'column' => 'id_provincia')),
    ));

    $this->widgetSchema->setNameFormat('localidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Localidad';
  }


}
