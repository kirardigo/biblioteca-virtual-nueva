<?php

/**
 * PersonaDomicilio form base class.
 *
 * @method PersonaDomicilio getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonaDomicilioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpersona_domicilio'    => new sfWidgetFormInputHidden(),
      'pfisica_id_pfisica'     => new sfWidgetFormPropelChoice(array('model' => 'Pfisica', 'add_empty' => true)),
      'pjuridica_id_pjuridica' => new sfWidgetFormPropelChoice(array('model' => 'Pjuridica', 'add_empty' => true)),
      'domicilio_id_domicilio' => new sfWidgetFormPropelChoice(array('model' => 'Domicilio', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idpersona_domicilio'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdpersonaDomicilio()), 'empty_value' => $this->getObject()->getIdpersonaDomicilio(), 'required' => false)),
      'pfisica_id_pfisica'     => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica', 'required' => false)),
      'pjuridica_id_pjuridica' => new sfValidatorPropelChoice(array('model' => 'Pjuridica', 'column' => 'id_pjuridica', 'required' => false)),
      'domicilio_id_domicilio' => new sfValidatorPropelChoice(array('model' => 'Domicilio', 'column' => 'id_domicilio')),
    ));

    $this->widgetSchema->setNameFormat('persona_domicilio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonaDomicilio';
  }


}
