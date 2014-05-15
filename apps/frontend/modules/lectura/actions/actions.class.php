<?php

/**
 * lectura actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage lectura
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lecturaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $cosa=$request->getParameter('archivo');
      $this->arch=$cosa;
      
      $this->aporte='../js/pdfjs/web/viewer.html?file=../../../uploads/aporte/'.$cosa;
      $this->material='../js/pdfjs/web/viewer.html?file=../../../uploads/material/'.$cosa;
      
    $cosa2=$request->getParameter('apo');
      $this->apo=$cosa2;
      
          $cosa3=$request->getParameter('id');
      $this->idarch=$cosa3;
      
      $this->Listita = ListaQuery::create()->filterByUsuarioIdUsuario($this->getUser()->getAttribute('id'))->filterByMaterialIdMaterial($this->idarch)->find();
     // $this->Listita->getFirst();
  }
  
    public function executeAgregar(sfWebRequest $request)
  {

      
	  $this->cosa= new Lista();
          $this->cosa->setUsuarioIdusuario($this->getUser()->getAttribute('id'));//sacar el id del usuario por su session
          $this->cosa->setMaterialIdMaterial($request->getParameter('idarch'));
         
          $this->cosa->save();
          
		//$this->getUser()->setFlash('agregado', 'Material agregado con exito');
		
          
    $this->redirect('lectura/index?archivo='.$request->getParameter('arch').'&id='.$request->getParameter('idarch'));

  }
      public function executeLista(sfWebRequest $request)
  {
          
          $this->Listas = ListaQuery::create()->filterByUsuarioIdUsuario($this->getUser()->getAttribute('id'))->find();
          //$this->Materiales = MaterialQuery::create()->find();
          
  }
  
  public function executeFiltrar(sfWebRequest $request){


	  
}

}
