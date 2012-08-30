<?php

/**
 * carrera actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage carrera
 * @author     Your name here
 */
class carreraActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Carreras = CarreraQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CarreraForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CarreraForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Carrera = CarreraQuery::create()->findPk($request->getParameter('id_carrera'));
    $this->forward404Unless($Carrera, sprintf('Object Carrera does not exist (%s).', $request->getParameter('id_carrera')));
    $this->form = new CarreraForm($Carrera);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Carrera = CarreraQuery::create()->findPk($request->getParameter('id_carrera'));
    $this->forward404Unless($Carrera, sprintf('Object Carrera does not exist (%s).', $request->getParameter('id_carrera')));
    $this->form = new CarreraForm($Carrera);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Carrera = CarreraQuery::create()->findPk($request->getParameter('id_carrera'));
    $this->forward404Unless($Carrera, sprintf('Object Carrera does not exist (%s).', $request->getParameter('id_carrera')));
    $Carrera->delete();

    $this->redirect('carrera/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Carrera = $form->save();

      $this->redirect('carrera/edit?id_carrera='.$Carrera->getIdCarrera());
    }
  }
}
