<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
      
    <!-- more metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <!-- include base css files from plugin -->
    <?php include_partial('default/mpProjectPlugin_css_assets', array('load' => array('twitter_bootstrap'))); ?>

    <?php include_stylesheets() ?>
  </head>
  <body>
      
<table>
<tr>
<td><div class="span4">
    <a  href="<?php echo url_for('principal/vacchina');?>">   
     <img src="<?php echo image_path('vacchina.png')?>" width="300px"></a> 
        
        </div>
</td>
<td><div class="span7">
<div class="offset1">
    <a  href="<?php echo url_for('material/index');?>">   
            <img src="<?php echo image_path('virtual.png')?>"  width="300px"  >
            </a>
<div/>
    </div>
</td>
<td> <div class="span3">
         <?php include_partial("global/estado");?>
    </div>
</td>
</tr>

</table>
      
    
      
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
              <li><a href="<?php echo url_for('accesomaterial/index');?>">Registro de acceso al Material</a></li>
               
                </ul>
      <?php endif;?>             
                  
              <?php if($sf_user->isAuthenticated()):?>
              <li class="dropdown">
                <a href="<?php echo url_for('material/index');?>">Material</a>

              </li>
              <?php endif?>
              
              <li class="dropdown">
                <a href="<?php echo url_for('principal/vacchina');?>">Biblioteca Vacchina</a>

              </li>
              
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <?php echo $sf_content ?>
      <hr>
      <footer>
        <p>&copy; Company 2012</p>
      </footer>
    </div> <!-- /container -->
    <!-- include base js files from plugin -->
    <?php include_partial('default/mpProjectPlugin_js_assets', array('load' => array('jquery', 'twitter_bootstrap'))); ?>
    <?php include_javascripts() ?>
  </body>
</html>
