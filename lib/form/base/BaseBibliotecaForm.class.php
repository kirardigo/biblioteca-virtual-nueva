<?php

/**
 * Biblioteca form base class.
 *
 * @method Biblioteca getObject() Returns the current form's model object
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBibliotecaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_biblioteca'          => new sfWidgetFormInputHidden(),
      'nombre'                 => new sfWidgetFormInputText(),
      'pjuridica_id_pjuridica' => new sfWidgetFormPropelChoice(array('model' => 'Pjuridica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_biblioteca'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdBiblioteca()), 'empty_value' => $this->getObject()->getIdBiblioteca(), 'required' => false)),
      'nombre'                 => new sfValidatorString(array('max_length' => 45)),
      'pjuridica_id_pjuridica' => new sfValidatorPropelChoice(array('model' => 'Pjuridica', 'column' => 'id_pjuridica')),
    ));

    $this->widgetSchema->setNameFormat('biblioteca[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Biblioteca';
  }


}
