<?php

/**
 * Domicilio form base class.
 *
 * @method Domicilio getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDomicilioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_domicilio'           => new sfWidgetFormInputHidden(),
      'barrio'                 => new sfWidgetFormInputText(),
      'calle'                  => new sfWidgetFormInputText(),
      'altura'                 => new sfWidgetFormInputText(),
      'cod_postal'             => new sfWidgetFormInputText(),
      'real'                   => new sfWidgetFormInputCheckbox(),
      'localidad_id_localidad' => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'pfisica_id_pfisica'     => new sfWidgetFormPropelChoice(array('model' => 'Pfisica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_domicilio'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDomicilio()), 'empty_value' => $this->getObject()->getIdDomicilio(), 'required' => false)),
      'barrio'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'calle'                  => new sfValidatorString(array('max_length' => 45)),
      'altura'                 => new sfValidatorString(array('max_length' => 45)),
      'cod_postal'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'real'                   => new sfValidatorBoolean(array('required' => false)),
      'localidad_id_localidad' => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id_localidad')),
      'pfisica_id_pfisica'     => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica')),
    ));

    $this->widgetSchema->setNameFormat('domicilio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Domicilio';
  }


}
