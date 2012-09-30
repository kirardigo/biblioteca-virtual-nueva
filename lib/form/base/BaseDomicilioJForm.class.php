<?php

/**
 * DomicilioJ form base class.
 *
 * @method DomicilioJ getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDomicilioJForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_domicilio_j'         => new sfWidgetFormInputHidden(),
      'barrio'                 => new sfWidgetFormInputText(),
      'calle'                  => new sfWidgetFormInputText(),
      'altura'                 => new sfWidgetFormInputText(),
      'cod_postal'             => new sfWidgetFormInputText(),
      'real'                   => new sfWidgetFormInputCheckbox(),
      'localidad_id_localidad' => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'pjuridica_id_pjuridica' => new sfWidgetFormPropelChoice(array('model' => 'Pjuridica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_domicilio_j'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDomicilioJ()), 'empty_value' => $this->getObject()->getIdDomicilioJ(), 'required' => false)),
      'barrio'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'calle'                  => new sfValidatorString(array('max_length' => 45)),
      'altura'                 => new sfValidatorString(array('max_length' => 45)),
      'cod_postal'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'real'                   => new sfValidatorBoolean(array('required' => false)),
      'localidad_id_localidad' => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id_localidad')),
      'pjuridica_id_pjuridica' => new sfValidatorPropelChoice(array('model' => 'Pjuridica', 'column' => 'id_pjuridica')),
    ));

    $this->widgetSchema->setNameFormat('domicilio_j[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DomicilioJ';
  }


}
