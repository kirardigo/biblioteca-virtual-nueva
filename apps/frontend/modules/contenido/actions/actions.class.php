<?php

/**
 * contenido actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage contenido
 * @author     Your name here
 */
class contenidoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Contenidos = ContenidoQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ContenidoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ContenidoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Contenido = ContenidoQuery::create()->findPk($request->getParameter('id_contenido'));
    $this->forward404Unless($Contenido, sprintf('Object Contenido does not exist (%s).', $request->getParameter('id_contenido')));
    $this->form = new ContenidoForm($Contenido);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Contenido = ContenidoQuery::create()->findPk($request->getParameter('id_contenido'));
    $this->forward404Unless($Contenido, sprintf('Object Contenido does not exist (%s).', $request->getParameter('id_contenido')));
    $this->form = new ContenidoForm($Contenido);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Contenido = ContenidoQuery::create()->findPk($request->getParameter('id_contenido'));
    $this->forward404Unless($Contenido, sprintf('Object Contenido does not exist (%s).', $request->getParameter('id_contenido')));
    $Contenido->delete();

    $this->redirect('contenido/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Contenido = $form->save();

      $this->redirect('contenido/edit?id_contenido='.$Contenido->getIdContenido());
    }
  }
}
