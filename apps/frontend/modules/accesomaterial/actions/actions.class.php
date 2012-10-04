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
    $this->AccesoMaterials = AccesoMaterialQuery::create()
            ->find();
    

     
          $this->elegido = array();

    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){     
        //guardo el id de esa pelicula
        $usuario = $request->getParameter('usuario');
        $material = $request->getParameter('material');
        $fecha = $request->getParameter('fecha');

        
        if((empty($usuario))){
        $usuario='';    
        }
        if((empty($material))){
        $material='';    
        }
        if((empty($fecha))){
        //$fecha='*';    
        }

        
            $consulta2 = AccesoMaterialQuery::create();
            $consulta2
            ->joinWith('Material')
            ->joinWith('Usuario');


            if(!empty($material))        
            $consulta2->where('Material.archivo = ?', $material);
            
            if(!empty($material) && !empty($usuario))
            {$consulta2->_and();}else{$consulta2->_or();}
            
            if(!empty($usuario))        
            $consulta2
            ->where('Usuario.usuario = ?', $usuario);
            $consulta2
            ->orderBy('IdAccesoMaterial', Criteria::DESC)
            ->limit(10)

            ;
            $this->elegido = $consulta2->find();              
       
    }
    
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
