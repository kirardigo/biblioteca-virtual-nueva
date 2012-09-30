<?php

/**
 * JuridicaDom form base class.
 *
 * @method JuridicaDom getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseJuridicaDomForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_juridica_dom'        => new sfWidgetFormInputHidden(),
      'pjuridica_id_pjuridica' => new sfWidgetFormPropelChoice(array('model' => 'Pjuridica', 'add_empty' => false)),
      'domicilio_id_domicilio' => new sfWidgetFormPropelChoice(array('model' => 'Domicilio', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_juridica_dom'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdJuridicaDom()), 'empty_value' => $this->getObject()->getIdJuridicaDom(), 'required' => false)),
      'pjuridica_id_pjuridica' => new sfValidatorPropelChoice(array('model' => 'Pjuridica', 'column' => 'id_pjuridica')),
      'domicilio_id_domicilio' => new sfValidatorPropelChoice(array('model' => 'Domicilio', 'column' => 'id_domicilio')),
    ));

    $this->widgetSchema->setNameFormat('juridica_dom[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JuridicaDom';
  }


}
