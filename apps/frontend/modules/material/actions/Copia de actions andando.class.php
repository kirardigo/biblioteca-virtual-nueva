﻿<?php

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
   // $this->Materials = MaterialQuery::create()->find();
     
     // $this->Materials = $this->getRoute()->getObject();
       
        
//$this->pager->setCriteria($this->materials->getActiveJobsCriteria());
//$this->pager->setPage($request->getParameter('page', 1));
      
      
      
      
      
      
      
      
      
      
          $this->elegido = array();
    $this->Materials = MaterialQuery::create()->filterByBibliotecaIdBiblioteca(1)->find();  
    
    
    
     //$this->pager = new sfDoctrinePager('Material',2);
    
    
//                    $c = new Criteria();    
//$c->add(MaterialPeer::FISICO,false);
//        $pager = new sfPropelPager('Material', 2);
//    $pager->setCriteria($c);
//    $pager->setPage($this->getRequestParameter('page', 1));
//    $pager->init();
//    $this->pager = $pager;
    

    
    
    
    
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){     
        //guardo el id de esa pelicula
        $autor = $request->getParameter('autor');
        $titulo = $request->getParameter('titulo');
        $editorial = $request->getParameter('editorial');
//        $id = $request->getParameter('carrera');
        
       // $aux22= CarreraQuery::create();
       // $aux22->findByNombre($carrera);
       // $id=$aux22->get('id_carrera');        
       // $dsa=$aux22->getHaving('nombre',$carrera);
        
        
        //$contenido = $request->getParameter('contenido');
        $subcontenido = $request->getParameter('subcontenido');
        $tema= $request->getParameter('tema');
        
        if((empty($autor))){
        $autor='*';    
        }
        if((empty($titulo))){
        $titulo='*';    
        }
        if((empty($editorial))){
        $editorial='*';    
        }
//        if((empty($id))){
//        $id='*';    
//        }
        if((empty($tema))){
        $tema='*';    
        }
        if((empty($subcontenido))){
        $subcontenido='*';    
        }
        
            $consulta2 = MaterialQuery::create();
            $consulta2->filterByAutor($autor)
            ->filterByTitulo($titulo)
            ->filterByEditorial($editorial)

                 ->useTemaQuery()
                    ->filterByNombre($tema)
                    ->useSubcontenidoQuery()
                      ->filterByNombre($subcontenido)
                        
                    ->endUse()
                    
                  ->endUse()
                  
                    
                  
             
                     
         ->orderBy('Autor', Criteria::ASC)
         ->orderBy('Titulo', Criteria::ASC)        
            ;
            $this->elegido = $consulta2->filterByBibliotecaIdBiblioteca(1)->find();          
       


            
            
            
    }
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

            if ($Material->getFisico()==true){$this->redirect('principal/vacchina');}
            else{$this->redirect('material/index');}
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Material = $form->save();
            if ($Material->getFisico()==true){$this->redirect('principal/vacchina');}
            else{$this->redirect('material/index');}
      
    }
    

    
  }
      public function executeDownload(sfWebRequest $request) { 
          
           $archivo=$request->getParameter('archivito');
           
          $this->cosa= new AccesoMaterial();
          $this->cosa->setUsuarioIdusuario($this->getUser()->getAttribute('id'));//sacar el id del usuario por su session
          $this->cosa->setMaterialIdMaterial($request->getParameter('id'));
          //$this->cosa->setFechaAcceso();
          $this->cosa->save();
          
                  // Buscamos el archivo en la carpeta de upload (nuestro caso) 
                  $file = sfConfig::get('sf_upload_dir').'/material/'.$archivo; 
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
/*$nameFile=’mi.archivo.txt’;

$ext = pathinfo($nameFile);

echo $ext['extension'];
 */
}
