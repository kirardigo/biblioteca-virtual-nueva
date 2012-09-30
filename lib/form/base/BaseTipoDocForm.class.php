<?php

/**
 * TipoDoc form base class.
 *
 * @method TipoDoc getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoDocForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_doc' => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_doc' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoDoc()), 'empty_value' => $this->getObject()->getIdTipoDoc(), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('tipo_doc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoDoc';
  }


}
