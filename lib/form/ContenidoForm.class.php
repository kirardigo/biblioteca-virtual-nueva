<?php

/**
 * Contenido form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class ContenidoForm extends BaseContenidoForm
{
  public function configure()
  {
        $this->embedRelation('Subcontenido');
       // unset($this['pedido_producto_list']);
  }
}
