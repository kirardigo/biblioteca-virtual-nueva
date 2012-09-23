<?php

/**
 * biblioteca actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage biblioteca
 * @author     Your name here
 */
class bibliotecaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Bibliotecas = BibliotecaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BibliotecaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BibliotecaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Biblioteca = BibliotecaQuery::create()->findPk($request->getParameter('id_biblioteca'));
    $this->forward404Unless($Biblioteca, sprintf('Object Biblioteca does not exist (%s).', $request->getParameter('id_biblioteca')));
    $this->form = new BibliotecaForm($Biblioteca);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Biblioteca = BibliotecaQuery::create()->findPk($request->getParameter('id_biblioteca'));
    $this->forward404Unless($Biblioteca, sprintf('Object Biblioteca does not exist (%s).', $request->getParameter('id_biblioteca')));
    $this->form = new BibliotecaForm($Biblioteca);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Biblioteca = BibliotecaQuery::create()->findPk($request->getParameter('id_biblioteca'));
    $this->forward404Unless($Biblioteca, sprintf('Object Biblioteca does not exist (%s).', $request->getParameter('id_biblioteca')));
    $Biblioteca->delete();

    $this->redirect('biblioteca/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Biblioteca = $form->save();

      $this->redirect('biblioteca/edit?id_biblioteca='.$Biblioteca->getIdBiblioteca());
    }
  }
}
