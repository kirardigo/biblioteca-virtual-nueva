<?php

/**
 * Libro form base class.
 *
 * @method Libro getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLibroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idlibro' => new sfWidgetFormInputHidden(),
      'nombre'  => new sfWidgetFormInputText(),
      'archivo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idlibro' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdlibro()), 'empty_value' => $this->getObject()->getIdlibro(), 'required' => false)),
      'nombre'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'archivo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }


}
