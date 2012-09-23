<?php

/**
 * tipodoc actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage tipodoc
 * @author     Your name here
 */
class tipodocActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Tipodocs = TipodocQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipodocForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipodocForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Tipodoc = TipodocQuery::create()->findPk($request->getParameter('id_tipo_doc'));
    $this->forward404Unless($Tipodoc, sprintf('Object Tipodoc does not exist (%s).', $request->getParameter('id_tipo_doc')));
    $this->form = new TipodocForm($Tipodoc);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Tipodoc = TipodocQuery::create()->findPk($request->getParameter('id_tipo_doc'));
    $this->forward404Unless($Tipodoc, sprintf('Object Tipodoc does not exist (%s).', $request->getParameter('id_tipo_doc')));
    $this->form = new TipodocForm($Tipodoc);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Tipodoc = TipodocQuery::create()->findPk($request->getParameter('id_tipo_doc'));
    $this->forward404Unless($Tipodoc, sprintf('Object Tipodoc does not exist (%s).', $request->getParameter('id_tipo_doc')));
    $Tipodoc->delete();

    $this->redirect('tipodoc/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Tipodoc = $form->save();

      $this->redirect('tipodoc/index');
    }
  }
}
