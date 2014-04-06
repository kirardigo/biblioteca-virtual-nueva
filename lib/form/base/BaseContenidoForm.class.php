<?php

/**
 * Contenido form base class.
 *
 * @method Contenido getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContenidoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_contenido'     => new sfWidgetFormInputHidden(),
      'numero_contenido' => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_contenido'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdContenido()), 'empty_value' => $this->getObject()->getIdContenido(), 'required' => false)),
      'numero_contenido' => new sfValidatorString(array('max_length' => 45)),
      'nombre'           => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('contenido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contenido';
  }


}
