<?php

/**
 * download actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage download
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class downloadActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      
      $this->getResponse()->clearHttpHeaders();
$this->getResponse()->setHeader('Content-Disposition', 'attachment;filename=uploads/files/test.jpg'); 
$this->getResponse()->setHeader('Content-Type', 'application/octet-stream');

  }
  
}
