<?php

/**
 * libritopdf actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage libritopdf
 * @author     Your name here
 */
class libritopdfActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Libritopdfs = LibritopdfQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LibritopdfForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LibritopdfForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Libritopdf = LibritopdfQuery::create()->findPk($request->getParameter('id_librito_pdf'));
    $this->forward404Unless($Libritopdf, sprintf('Object Libritopdf does not exist (%s).', $request->getParameter('id_librito_pdf')));
    $this->form = new LibritopdfForm($Libritopdf);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Libritopdf = LibritopdfQuery::create()->findPk($request->getParameter('id_librito_pdf'));
    $this->forward404Unless($Libritopdf, sprintf('Object Libritopdf does not exist (%s).', $request->getParameter('id_librito_pdf')));
    $this->form = new LibritopdfForm($Libritopdf);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Libritopdf = LibritopdfQuery::create()->findPk($request->getParameter('id_librito_pdf'));
    $this->forward404Unless($Libritopdf, sprintf('Object Libritopdf does not exist (%s).', $request->getParameter('id_librito_pdf')));
    $Libritopdf->delete();

    $this->redirect('libritopdf/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Libritopdf = $form->save();

      $this->redirect('libritopdf/edit?id_librito_pdf='.$Libritopdf->getIdLibritoPdf());
    }
  }
}
