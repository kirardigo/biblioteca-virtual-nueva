<?php

/**
 * anuncio actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage anuncio
 * @author     Your name here
 */
class anuncioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Anuncios = AnuncioQuery::create()->find();

    
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AnuncioForm();
    
    //$this->form->setDefault('usuario_id_usuario', $this->getUser()->getAttribute('id'));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AnuncioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Anuncio = AnuncioQuery::create()->findPk($request->getParameter('id_anuncio'));
    

    
    
    
    $this->forward404Unless($Anuncio, sprintf('Object Anuncio does not exist (%s).', $request->getParameter('id_anuncio')));
    $this->form = new AnuncioForm($Anuncio);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Anuncio = AnuncioQuery::create()->findPk($request->getParameter('id_anuncio'));
    
        //saco el id del usuario que esta editando el anuncio y lo seteo
    //$id_user=$this->getUser()->getAttribute('id');
    //$Anuncio->setUsuarioIdUsuario($id_user);
    
    $this->forward404Unless($Anuncio, sprintf('Object Anuncio does not exist (%s).', $request->getParameter('id_anuncio')));
    $this->form = new AnuncioForm($Anuncio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Anuncio = AnuncioQuery::create()->findPk($request->getParameter('id_anuncio'));
    $this->forward404Unless($Anuncio, sprintf('Object Anuncio does not exist (%s).', $request->getParameter('id_anuncio')));
    $Anuncio->delete();

    $this->redirect('principal/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Anuncio = $form->save();

      $this->redirect('principal/index');
    }
  }
}
