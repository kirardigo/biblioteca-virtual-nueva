<?php

/**
 * provincia actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage provincia
 * @author     Your name here
 */
class provinciaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Provincias = ProvinciaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProvinciaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProvinciaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Provincia = ProvinciaQuery::create()->findPk($request->getParameter('id_provincia'));
    $this->forward404Unless($Provincia, sprintf('Object Provincia does not exist (%s).', $request->getParameter('id_provincia')));
    $this->form = new ProvinciaForm($Provincia);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Provincia = ProvinciaQuery::create()->findPk($request->getParameter('id_provincia'));
    $this->forward404Unless($Provincia, sprintf('Object Provincia does not exist (%s).', $request->getParameter('id_provincia')));
    $this->form = new ProvinciaForm($Provincia);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Provincia = ProvinciaQuery::create()->findPk($request->getParameter('id_provincia'));
    $this->forward404Unless($Provincia, sprintf('Object Provincia does not exist (%s).', $request->getParameter('id_provincia')));
    $Provincia->delete();

    $this->redirect('provincia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Provincia = $form->save();

      $this->redirect('provincia/index');
    }
  }
}
