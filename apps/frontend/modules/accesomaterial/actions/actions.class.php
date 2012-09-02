<?php

/**
 * accesomaterial actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage accesomaterial
 * @author     Your name here
 */
class accesomaterialActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->AccesoMaterials = AccesoMaterialQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AccesoMaterialForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AccesoMaterialForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $AccesoMaterial = AccesoMaterialQuery::create()->findPk($request->getParameter('id_acceso_material'));
    $this->forward404Unless($AccesoMaterial, sprintf('Object AccesoMaterial does not exist (%s).', $request->getParameter('id_acceso_material')));
    $this->form = new AccesoMaterialForm($AccesoMaterial);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $AccesoMaterial = AccesoMaterialQuery::create()->findPk($request->getParameter('id_acceso_material'));
    $this->forward404Unless($AccesoMaterial, sprintf('Object AccesoMaterial does not exist (%s).', $request->getParameter('id_acceso_material')));
    $this->form = new AccesoMaterialForm($AccesoMaterial);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $AccesoMaterial = AccesoMaterialQuery::create()->findPk($request->getParameter('id_acceso_material'));
    $this->forward404Unless($AccesoMaterial, sprintf('Object AccesoMaterial does not exist (%s).', $request->getParameter('id_acceso_material')));
    $AccesoMaterial->delete();

    $this->redirect('accesomaterial/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $AccesoMaterial = $form->save();

      $this->redirect('accesomaterial/edit?id_acceso_material='.$AccesoMaterial->getIdAccesoMaterial());
    }
  }
}
