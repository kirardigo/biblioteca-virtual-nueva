<?php

/**
 * pjuridica actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage pjuridica
 * @author     Your name here
 */
class pjuridicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Pjuridicas = PjuridicaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PjuridicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PjuridicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Pjuridica = PjuridicaQuery::create()->findPk($request->getParameter('id_pjuridica'));
    $this->forward404Unless($Pjuridica, sprintf('Object Pjuridica does not exist (%s).', $request->getParameter('id_pjuridica')));
    $this->form = new PjuridicaForm($Pjuridica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Pjuridica = PjuridicaQuery::create()->findPk($request->getParameter('id_pjuridica'));
    $this->forward404Unless($Pjuridica, sprintf('Object Pjuridica does not exist (%s).', $request->getParameter('id_pjuridica')));
    $this->form = new PjuridicaForm($Pjuridica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Pjuridica = PjuridicaQuery::create()->findPk($request->getParameter('id_pjuridica'));
    $this->forward404Unless($Pjuridica, sprintf('Object Pjuridica does not exist (%s).', $request->getParameter('id_pjuridica')));
    $Pjuridica->delete();

    $this->redirect('pjuridica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Pjuridica = $form->save();

      $this->redirect('pjuridica/edit?id_pjuridica='.$Pjuridica->getIdPjuridica());
    }
  }
}
