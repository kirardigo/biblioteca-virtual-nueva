<?php

/**
 * Tema form base class.
 *
 * @method Tema getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTemaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tema'                      => new sfWidgetFormInputHidden(),
      'nombre'                       => new sfWidgetFormInputText(),
      'numero_tema'                  => new sfWidgetFormInputText(),
      'subcontenido_id_subcontenido' => new sfWidgetFormPropelChoice(array('model' => 'Subcontenido', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_tema'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTema()), 'empty_value' => $this->getObject()->getIdTema(), 'required' => false)),
      'nombre'                       => new sfValidatorString(array('max_length' => 45)),
      'numero_tema'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'subcontenido_id_subcontenido' => new sfValidatorPropelChoice(array('model' => 'Subcontenido', 'column' => 'id_subcontenido')),
    ));

    $this->widgetSchema->setNameFormat('tema[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tema';
  }


}
