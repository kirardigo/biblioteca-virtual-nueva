
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>

    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
      
    <!-- more metas -->
    <meta charset="utf-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>
    <meta name="viewport" content="width=device-width"></meta>

    <!-- include base css files from plugin -->
    
    <?php include_partial('default/mpProjectPlugin_css_assets', array('load' => array('twitter_bootstrap'))); ?>

    <?php include_stylesheets() ?>
    <?php //include_javascripts() ?>
</head>
  <body>
   
 

   
 
   <div align="left" class="span8"> 
   <img style="width: 700px; height: 150px;" src="<?php echo image_path('logo.png')?>"></img>
</div>
  <div align="right" class="span3" >
         <?php include_partial("global/estado");?>
    </div>

      <br></br><br></br><br></br><br></br><br></br>

      
  <!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <!-- sample navbar -->
    <div class="navbar navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url_for('principal/index');?>">Inicio</a>
          <div class="nav-collapse">
            <ul class="nav">
              
<?php if($sf_user->hasCredential('admin')):?>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Administracion de Persona<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">

               <li><a href="<?php echo url_for('pfisica/index');?>">ABM Personas Fisicas</a></li>
               <li><a href="<?php echo url_for('pjuridica/index');?>">ABM Personas Juridicas</a></li>
               <li><a href="<?php echo url_for('provincia/index');?>">ABM Provincia/Localidad</a></li>
               <li><a href="<?php echo url_for('carrera/index');?>">ABM Carreras</a></li>
               <li><a href="<?php echo url_for('tipodoc/index');?>">ABM Tipo de Documento</a></li>
               <li><a href="<?php echo url_for('biblioteca/index');?>">ABM Biblioteca</a></li>

                </ul>
              </li>
              <?php endif;?>
<?php if($sf_user->hasCredential('admin')):?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Administracion de Material <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">

              
             
              <li><a href="<?php echo url_for('material/index');?>">ABM Material</a></li>
             <li><a href="<?php echo url_for('contenido/index');?>">ABM Contenido</a></li>
             <li><a href="<?php echo url_for('subcontenido/index');?>">ABM Subcontenido</a></li>
              <li><a href="<?php echo url_for('accesomaterial/index');?>">Registro de acceso al Material</a></li>
               
                </ul>
                  </li>
      <?php endif;?> 
                  
               
                
              
              <li class="dropdown">
                <a href="<?php echo url_for('principal/udc');?>">Material UDC</a>

              </li>
              
              
              <li class="dropdown">
                <a href="<?php echo url_for('principal/vacchina');?>">Material Vacchina</a>

              </li>
              <?php if(!$sf_user->isAuthenticated()):?>
              <li class="dropdown">
                <a href="<?php echo url_for('pfisica/new');?>">Registrarse</a>

              </li>
              <?php endif ?>
              <?php if($sf_user->isAuthenticated()):?>
              <li class="dropdown">
                <a href="<?php echo url_for('aporte/index');?>">Aportes</a>

              </li>
              <?php endif; ?>
              <li class="dropdown">
                <a target="_blank" href="http:\\www.udc.edu.ar">Universidad del Chubut</a>

              </li>


              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div  style="" class="container-fluid">
      <?php echo $sf_content ?>
      

        

      
    </div> <!-- /container -->
      <div style="margin-top:5%; text-align: center;">
      <hr>
      <p style="color:white" >&copy; Universidad del Chubut 2014</p>
      </div>
    <!-- include base js files from plugin -->
    <?php include_partial('default/mpProjectPlugin_js_assets', array('load' => array('jquery', 'twitter_bootstrap'))); ?>
    
    <?php include_javascripts() ?>
  </body>
  

</html>
