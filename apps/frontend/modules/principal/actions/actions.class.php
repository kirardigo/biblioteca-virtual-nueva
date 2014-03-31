<?php

/**
 * principal actions.
 *
 * @package    biblioteca_virtual_2
 * @subpackage principal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class principalActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  $this->Anuncios = AnuncioQuery::create()
            ->orderBy('FechaAnuncio', Criteria::DESC)
            ->limit(10)
            ->find();
  //$this->Material = MaterialQuery::create()->find();
  }
  
    public function executeVacchina(sfWebRequest $request)
  {
     // $this->Materials = MaterialQuery::create()->find();
     
          $this->elegido = array();
   $this->Materials = MaterialQuery::create()->filterByBibliotecaIdBiblioteca(2)->find();  
            

   
   
   
   
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
        
        
        $contenido = $request->getParameter('contenido');
        $subcontenido = $request->getParameter('subcontenido');
        
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
        if((empty($contenido))){
        $contenido='*';    
        }
        if((empty($subcontenido))){
        $subcontenido='*';    
        }
        
            $consulta2 = MaterialQuery::create();
            $consulta2->filterByAutor($autor)
            ->filterByTitulo($titulo)
            ->filterByEditorial($editorial)
            //->filterByCarreraIdCarrera($id)
                 ->useSubcontenidoQuery()
                    ->filterByNombre($subcontenido)
                    ->useContenidoQuery()
                      ->filterByNombre($contenido)
                        
                    ->endUse()
                    
                  ->endUse()
                  
                    
                  
             
                     
         ->orderBy('IdMaterial', Criteria::DESC)       
            ;
            $this->elegido = $consulta2->filterByBibliotecaIdBiblioteca(2)->find();                
    }
  }
  
      public function executeGuardado(sfWebRequest $request)
  {
  
  }
  

  

}
