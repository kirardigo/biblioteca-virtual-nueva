<?php

/**
 * AccesoMaterial form base class.
 *
 * @method AccesoMaterial getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAccesoMaterialForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_acceso_material'   => new sfWidgetFormInputHidden(),
      'fisica_id_fisica'     => new sfWidgetFormPropelChoice(array('model' => 'Fisica', 'add_empty' => false)),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
      'fecha_acceso'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_acceso_material'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAccesoMaterial()), 'empty_value' => $this->getObject()->getIdAccesoMaterial(), 'required' => false)),
      'fisica_id_fisica'     => new sfValidatorPropelChoice(array('model' => 'Fisica', 'column' => 'id_fisica')),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
      'fecha_acceso'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('acceso_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccesoMaterial';
  }


}
