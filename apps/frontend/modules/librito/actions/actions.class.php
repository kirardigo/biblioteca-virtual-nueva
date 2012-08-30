<?php

/**
 * librito actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage librito
 * @author     Your name here
 */
class libritoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Libritos = LibritoQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LibritoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LibritoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Librito = LibritoQuery::create()->findPk($request->getParameter('id_librito'));
    $this->forward404Unless($Librito, sprintf('Object Librito does not exist (%s).', $request->getParameter('id_librito')));
    $this->form = new LibritoForm($Librito);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Librito = LibritoQuery::create()->findPk($request->getParameter('id_librito'));
    $this->forward404Unless($Librito, sprintf('Object Librito does not exist (%s).', $request->getParameter('id_librito')));
    $this->form = new LibritoForm($Librito);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Librito = LibritoQuery::create()->findPk($request->getParameter('id_librito'));
    $this->forward404Unless($Librito, sprintf('Object Librito does not exist (%s).', $request->getParameter('id_librito')));
    $Librito->delete();

    $this->redirect('librito/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Librito = $form->save();

      $this->redirect('librito/edit?id_librito='.$Librito->getIdLibrito());
    }
  }
}
