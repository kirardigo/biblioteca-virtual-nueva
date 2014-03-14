<?php

/**
 * Anuncio form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class AnuncioForm extends BaseAnuncioForm
{
  public function configure()
  {
	  unset($this['fecha_anuncio']);
	  //$this->widgetSchema['usuario_id_usuario']->setLabel('Usuario');
	  //unset('fecha_anuncio');
  }
}
