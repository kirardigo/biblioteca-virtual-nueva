<?php

/**
 * Material form base class.
 *
 * @method Material getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMaterialForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_material'                  => new sfWidgetFormInputHidden(),
      'archivo'                      => new sfWidgetFormInputText(),
      'nombre'                       => new sfWidgetFormInputText(),
      'titulo'                       => new sfWidgetFormInputText(),
      'editorial'                    => new sfWidgetFormInputText(),
      'autor'                        => new sfWidgetFormInputText(),
      'descripcion'                  => new sfWidgetFormTextarea(),
      'subcontenido_id_subcontenido' => new sfWidgetFormPropelChoice(array('model' => 'Subcontenido', 'add_empty' => false)),
      'biblioteca_id_biblioteca'     => new sfWidgetFormPropelChoice(array('model' => 'Biblioteca', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_material'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdMaterial()), 'empty_value' => $this->getObject()->getIdMaterial(), 'required' => false)),
      'archivo'                      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'titulo'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'editorial'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'autor'                        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'descripcion'                  => new sfValidatorString(array('required' => false)),
      'subcontenido_id_subcontenido' => new sfValidatorPropelChoice(array('model' => 'Subcontenido', 'column' => 'id_subcontenido')),
      'biblioteca_id_biblioteca'     => new sfValidatorPropelChoice(array('model' => 'Biblioteca', 'column' => 'id_biblioteca')),
    ));

    $this->widgetSchema->setNameFormat('material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Material';
  }


}
