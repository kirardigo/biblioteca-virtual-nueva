<?php

/**
 * Aporte form.
 *
 * @package    biblioteca_virtual_2
 * @subpackage form
 * @author     Your name here
 */
class AporteForm extends BaseAporteForm
{
  public function configure()
  {	 
	  unset($this['usuario_id_usuario']);
	  parent::configure();
          
 
	  //error de csrf token si no se metia el codigo siguiente
    $this->disableLocalCSRFProtection(); 

    $this->widgetSchema['archivo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Cargar archivo',
      'file_src'  => '/uploads/aporte/'.$this->getObject()->getArchivo(),
      'is_image'  => false,
      'edit_mode' => !$this->isNew(),
      'delete_label'=>'¿Eliminar el archivo?',
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['archivo_delete'] = new sfValidatorPass();
    
 
  $this->setValidator('archivo', new sfValidatorFile(array(
    //'mime_types' => array('application/pdf'),
    'path' => sfConfig::get('sf_upload_dir').'/aporte',
    'required' => false,
      'validated_file_class' => 'SwimsuitValidatedFile',
  )));
  
  // $this->widgetSchema['usuario_id_usuario'] = new sfWidgetFormInputText();   
  
  
        $this->embedRelation('MaterialAporte', 
                                 array('add_link'=>'<div class="btn btn-inverse">Agregar Material</div>',
                                  
                                    'delete_name'=>'Eliminar', 
                                    'post_add'=>'add_new_link_post',
                                    'title'=>'Materiales',
                                    'post'=>'nada',
                                    'empty_label'=>'Nuevo material',
                                  
                                    'delete_widget' => new sfWidgetFormDelete(array('alert_text'=>'¿Esta seguro de elminar el material?')
                                     
                                            ),
                                  ));
  
  }
    public function save ($con = null)
  { 
    // Get the uploaded image
    $file = $this->getValue('archivo');

          //obtengo el usuario
    $user = sfContext::getInstance()->getUser();
    //obtengo su id
    $var=$user->getAttribute('user');
    
    
    $autor=$var;
    $titulo= strtoupper($this->getValue('titulo'));
    //cambio espacios por guiones bajos
    $autor=str_replace(" ", "_",$autor);
    $titulo=str_replace(" ", "_",$titulo);
    
    $autor=str_replace(".", "_",$autor);
    $titulo=str_replace(".", "_",$titulo);
    //extension de archivo
    //if (empty ($autor)){
        //$autor='ANONIMO';//anonimo, no autor, especial para caso de imagenes
    //}
    // $filename = sha1($file->getOriginalName()).$file->getExtension($file->getOriginalExtension());
      $caca= $this->getValue('autor');
      
      
    $swimsuit = $this->getObject();

    if ($file)
    {
      
       $extension = strtoupper( $file->getExtension($file->getOriginalExtension()) );
       $file->save( $titulo.'_AUTOR_'.$autor.$extension);
    
      // $caca->save(strtoupper('  '.$caca));
    }

    return parent::save($con);
	  
	  
	  
	  
	  
	  
  }
}
