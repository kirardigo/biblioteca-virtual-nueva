<?php

/**
 * Subcontenido form base class.
 *
 * @method Subcontenido getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSubcontenidoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_subcontenido'        => new sfWidgetFormInputHidden(),
      'nombre'                 => new sfWidgetFormInputText(),
      'numero_subcontenido'    => new sfWidgetFormInputText(),
      'contenido_id_contenido' => new sfWidgetFormPropelChoice(array('model' => 'Contenido', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_subcontenido'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdSubcontenido()), 'empty_value' => $this->getObject()->getIdSubcontenido(), 'required' => false)),
      'nombre'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero_subcontenido'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'contenido_id_contenido' => new sfValidatorPropelChoice(array('model' => 'Contenido', 'column' => 'id_contenido')),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Subcontenido', 'column' => array('numero_subcontenido')))
    );

    $this->widgetSchema->setNameFormat('subcontenido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subcontenido';
  }


}
