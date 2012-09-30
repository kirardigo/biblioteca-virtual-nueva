<?php

/**
 * FisicaDom form base class.
 *
 * @method FisicaDom getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFisicaDomForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_fisica_dom'          => new sfWidgetFormInputHidden(),
      'pfisica_id_pfisica'     => new sfWidgetFormPropelChoice(array('model' => 'Pfisica', 'add_empty' => false)),
      'domicilio_id_domicilio' => new sfWidgetFormPropelChoice(array('model' => 'Domicilio', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_fisica_dom'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdFisicaDom()), 'empty_value' => $this->getObject()->getIdFisicaDom(), 'required' => false)),
      'pfisica_id_pfisica'     => new sfValidatorPropelChoice(array('model' => 'Pfisica', 'column' => 'id_pfisica')),
      'domicilio_id_domicilio' => new sfValidatorPropelChoice(array('model' => 'Domicilio', 'column' => 'id_domicilio')),
    ));

    $this->widgetSchema->setNameFormat('fisica_dom[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FisicaDom';
  }


}
