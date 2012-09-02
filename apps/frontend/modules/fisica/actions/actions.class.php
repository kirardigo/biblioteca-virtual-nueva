<?php

/**
 * fisica actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage fisica
 * @author     Your name here
 */
class fisicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Fisicas = FisicaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FisicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FisicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Fisica = FisicaQuery::create()->findPk($request->getParameter('id_fisica'));
    $this->forward404Unless($Fisica, sprintf('Object Fisica does not exist (%s).', $request->getParameter('id_fisica')));
    $this->form = new FisicaForm($Fisica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Fisica = FisicaQuery::create()->findPk($request->getParameter('id_fisica'));
    $this->forward404Unless($Fisica, sprintf('Object Fisica does not exist (%s).', $request->getParameter('id_fisica')));
    $this->form = new FisicaForm($Fisica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Fisica = FisicaQuery::create()->findPk($request->getParameter('id_fisica'));
    $this->forward404Unless($Fisica, sprintf('Object Fisica does not exist (%s).', $request->getParameter('id_fisica')));
    $Fisica->delete();

    $this->redirect('fisica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Fisica = $form->save();

      $this->redirect('fisica/edit?id_fisica='.$Fisica->getIdFisica());
    }
  }
}
