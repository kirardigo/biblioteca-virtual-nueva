<?php

/**
 * aporte actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage aporte
 * @author     Your name here
 */
class aporteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Aportes = AporteQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AporteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AporteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
      
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    //si usuario kiere editar otro aporte lo redirecciono
    if(   ($this->getUser()->getAttribute('id')==$Aporte->getUsuarioIdUsuario()) || ($this->getUser()->hasCredential('admin'))   ){
        $this->form = new AporteForm($Aporte);
    }
    else{
        $this->redirect('error/error401');
    }
    
    
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $this->form = new AporteForm($Aporte);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
        //si usuario kiere eliminar otro aporte lo redirecciono
    if(   ($this->getUser()->getAttribute('id')==$Aporte->getUsuarioIdUsuario()) || ($this->getUser()->hasCredential('admin'))   ){
        $Aporte->delete();
    }
    else{
        $this->redirect('error/error401');
    }
    
    
    

    $this->redirect('aporte/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Aporte = $form->save();

      $this->redirect('aporte/index');
    }
    
  }
  
       public function executeDownload(sfWebRequest $request) { 
          
           $archivo=$request->getParameter('archivito');
           
          //$this->cosa= new AccesoMaterial();
          //$this->cosa->setUsuarioIdusuario($this->getUser()->getAttribute('id'));//sacar el id del usuario por su session
          //$this->cosa->setAporteIdAporte($request->getParameter('id'));
          //$this->cosa->setFechaAcceso();
          //$this->cosa->save();
          

                   
                  // Buscamos el archivo en la carpeta de upload (nuestro caso) 
                  $file = sfConfig::get('sf_upload_dir').'/aporte/'.$archivo; 
                    $file_name="test.jpg";
                // Cabeceras necesarias para ejecutar la descarga 
                  $response = $this->getResponse(); 
                      $response->setContentType('application/octet-stream', true); 
                      $response->setHttpHeader('Content-Disposition','attachment; filename='.$archivo, true); 

                      $response->sendHttpHeaders(); 
                // Send file to user client 
                $response->setContent(readfile(utf8_decode($file))); 
                $response->sendContent(); 

                // No retorne ninguna vista 
                sfView::NONE; 
        } 
        
    public function getExtension($fileStr){
         $this->palabra=strtolower(end(explode('.',$fileStr)));
    
         return $this;
    }
      
    
    public function extension($filename){
    $this->ext= substr(strrchr($filename, '.'), 1);
    return $this->ext;
    
    }
  
  
  
  
  
}
