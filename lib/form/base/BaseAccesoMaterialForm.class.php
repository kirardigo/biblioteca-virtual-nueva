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
      'fecha_acceso'         => new sfWidgetFormDateTime(),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
      'usuario_id_usuario'   => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_acceso_material'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAccesoMaterial()), 'empty_value' => $this->getObject()->getIdAccesoMaterial(), 'required' => false)),
      'fecha_acceso'         => new sfValidatorDateTime(),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
      'usuario_id_usuario'   => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id_usuario')),
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
