<?php /* @var $usuario PersonaFisica */ ?>
<?php

class myUser extends sfBasicSecurityUser{
    
    protected $usuario_db;

    public function iniciarSesion(Usuario $usuario){                
        //guardo el objeto usuario en la sesion
        $this->setUsuarioDB($usuario);
        //$this->usuario_db = $usuario;        
        
        //$anio_socio = $usuario->getFechaNacimiento('Y');
        //$anio_socio = date('Y')-$anio_socio;
        //$this->setAttribute('edad', $anio_socio);
        //seteo la credencial de usuario
        if ($usuario->getAdmin()==true){
        $this->addCredential('admin');
        $this->setAttribute("admin", $usuario->getAdmin());
                
        }else{$this->addCredential('user');};//getTipoSocioId());
        //Seteo el atributo "nombre" del usuario
        $this->setAttribute("userNom",$usuario->getPfisica()->getNombre() );//$usuario->getNombre()
        $this->setAttribute("user", $usuario->getUsuario());//$usuario->getUsuario());
        //Seteo el atributo "dni" del usuario
        $this->setAttribute("id", $usuario->getIdUsuario());
        //$this->setAttribute("admin", $usuario->getAdmin());        
        //autentico el usuario.
        $this->setAuthenticated(true);
    }       
    
    public function getUsuarioDB(){
        return $this->usuario_db;
    }

    public function setUsuarioDB($user){
        $this->usuario_db = $user;
    }
    
    public function cerrarSesion(){       
        $this->getAttributeHolder()->clear();
        $this->setAuthenticated(false);
        $this->clearCredentials();
    }
    
    public function setErrorLogin($msj){
        $this->setAttribute('error_login',$msj);        
    }
    
    public function getErrorLogin(){
        return $this->getAttribute('error_login',"");        
    }
    
    public function removerErrorLogin(){
        $this->getAttributeHolder()->remove('error_login');
    }        
    

}
