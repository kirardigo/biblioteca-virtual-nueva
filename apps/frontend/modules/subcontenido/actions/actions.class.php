<?php

/**
 * subcontenido actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage subcontenido
 * @author     Your name here
 */
class subcontenidoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Subcontenidos = SubcontenidoQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SubcontenidoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SubcontenidoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Subcontenido = SubcontenidoQuery::create()->findPk($request->getParameter('id_subcontenido'));
    $this->forward404Unless($Subcontenido, sprintf('Object Subcontenido does not exist (%s).', $request->getParameter('id_subcontenido')));
    $this->form = new SubcontenidoForm($Subcontenido);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Subcontenido = SubcontenidoQuery::create()->findPk($request->getParameter('id_subcontenido'));
    $this->forward404Unless($Subcontenido, sprintf('Object Subcontenido does not exist (%s).', $request->getParameter('id_subcontenido')));
    $this->form = new SubcontenidoForm($Subcontenido);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Subcontenido = SubcontenidoQuery::create()->findPk($request->getParameter('id_subcontenido'));
    $this->forward404Unless($Subcontenido, sprintf('Object Subcontenido does not exist (%s).', $request->getParameter('id_subcontenido')));
    $Subcontenido->delete();

    $this->redirect('subcontenido/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Subcontenido = $form->save();

      $this->redirect('subcontenido/edit?id_subcontenido='.$Subcontenido->getIdSubcontenido());
    }
  }
}
