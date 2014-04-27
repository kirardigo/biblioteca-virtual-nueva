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
        
        
        //$contenido = $request->getParameter('contenido');
        $subcontenido = $request->getParameter('subcontenido');
        $tema = $request->getParameter('tema');
        
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
            $this->elegido = $consulta2->filterByBibliotecaIdBiblioteca(2)->find();                
    }
  }
  
      public function executeGuardado(sfWebRequest $request)
  {
  
  }
  

  public function executeUdc(sfWebRequest $request)
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

}
