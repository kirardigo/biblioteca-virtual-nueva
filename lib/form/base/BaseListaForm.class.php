<?php

/**
 * Lista form base class.
 *
 * @method Lista getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseListaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_lista'             => new sfWidgetFormInputHidden(),
      'informacion'          => new sfWidgetFormTextarea(),
      'material_id_material' => new sfWidgetFormPropelChoice(array('model' => 'Material', 'add_empty' => false)),
      'usuario_id_usuario'   => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_lista'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdLista()), 'empty_value' => $this->getObject()->getIdLista(), 'required' => false)),
      'informacion'          => new sfValidatorString(array('required' => false)),
      'material_id_material' => new sfValidatorPropelChoice(array('model' => 'Material', 'column' => 'id_material')),
      'usuario_id_usuario'   => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id_usuario')),
    ));

    $this->widgetSchema->setNameFormat('lista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lista';
  }


}
