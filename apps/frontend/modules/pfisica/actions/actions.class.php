<?php

/**
 * pfisica actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage pfisica
 * @author     Your name here
 */
class pfisicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->Pfisicas = PfisicaQuery::create()->find();
      // $this->Materials = MaterialQuery::create()->find();
     
          $this->elegido = array();
    //$this->Materials = MaterialQuery::create()->find();
    $this->Pfisicas = PfisicaQuery::create()->find();
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){     
        //guardo el id de esa pelicula
        $nombre = $request->getParameter('nombre');
        $apellido = $request->getParameter('apellido');
        $documento = $request->getParameter('documento');

        
        if((empty($nombre))){
        $nombre='*';    
        }
        if((empty($apellido))){
        $apellido='*';    
        }
        if((empty($documento))){
        $documento='*';    
        }

        
            $consulta2 = PfisicaQuery::create();
            $consulta2->filterByNombre($nombre)
            ->filterByApellido($apellido)
            ->filterByDocumento($documento)

                  
                    
                  
             
                     
                    
            ;
            $this->elegido = $consulta2->find();              
       
    }
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PfisicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PfisicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Pfisica = PfisicaQuery::create()->findPk($request->getParameter('id_pfisica'));
    $this->forward404Unless($Pfisica, sprintf('Object Pfisica does not exist (%s).', $request->getParameter('id_pfisica')));
    $this->form = new PfisicaForm($Pfisica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Pfisica = PfisicaQuery::create()->findPk($request->getParameter('id_pfisica'));
    $this->forward404Unless($Pfisica, sprintf('Object Pfisica does not exist (%s).', $request->getParameter('id_pfisica')));
    $this->form = new PfisicaForm($Pfisica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Pfisica = PfisicaQuery::create()->findPk($request->getParameter('id_pfisica'));
    $this->forward404Unless($Pfisica, sprintf('Object Pfisica does not exist (%s).', $request->getParameter('id_pfisica')));
    $Pfisica->delete();

    $this->redirect('pfisica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Pfisica = $form->save();
		
		if ($this->getUser()->hasCredential('admin')){
      $this->redirect('pfisica/index');}else{
		$this->redirect('principal/index');  };
    }
  }
}
