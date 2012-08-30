<?php

/**
 * material actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage material
 * @author     Your name here
 */
class materialActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Materials = MaterialQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MaterialForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MaterialForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Material = MaterialQuery::create()->findPk($request->getParameter('id_material'));
    $this->forward404Unless($Material, sprintf('Object Material does not exist (%s).', $request->getParameter('id_material')));
    $this->form = new MaterialForm($Material);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Material = MaterialQuery::create()->findPk($request->getParameter('id_material'));
    $this->forward404Unless($Material, sprintf('Object Material does not exist (%s).', $request->getParameter('id_material')));
    $this->form = new MaterialForm($Material);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Material = MaterialQuery::create()->findPk($request->getParameter('id_material'));
    $this->forward404Unless($Material, sprintf('Object Material does not exist (%s).', $request->getParameter('id_material')));
    $Material->delete();

    $this->redirect('material/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Material = $form->save();

      $this->redirect('material/edit?id_material='.$Material->getIdMaterial());
    }
    

    
  }
      public function executeDescargarArchivo(sfWebRequest $request) { 

                    $archivo=$request->getParameter('archivito');
                  // Buscamos el archivo en la carpeta de upload (nuestro caso) 
                  $file = sfConfig::get('sf_upload_dir').'/files/'.$archivo; 
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
        public function caca(int $mishi){
            
        }
}
