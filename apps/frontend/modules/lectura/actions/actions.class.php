<?php

/**
 * lectura actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage lectura
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lecturaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $cosa=$request->getParameter('archivo');
      $this->arch=$cosa;
  }
}
