<?php if (!($sf_user->isAuthenticated())): ?>          
  <!--Comienza Div Login-->
  <div id="login" style="width: 160px; height: 100px;">
      <fieldset>
        <form class="well form-inline form-horizontal" action="<?php echo url_for("login/index");?>" method="post" id="login">
            <input type="text" class="input-small" placeholder="Usuario" name="user"></input>
            <br/>
            <input type="password" class="input-small" placeholder="Contraseña" name="pass"></input>
            <br/><br/>
            <input type="submit" class="btn-inverse" value="Entrar"></input>
        </form>
      </fieldset>     
<?php else:?>                   
      <div style="width: 160px; height: 100px;" class="well" style="font-size: small"><?php echo "<i> Hola <b>".$sf_user->getAttribute('userNom')."</b>, Bienvenido!</i>"?>        
<!--        <br/><a href="<?php //echo url_for('usuario/edit?id_usuario='.$sf_user->getAttribute('id')) ?>"><i class="icon-user"></i> Perfil</a>-->
        
          <br/><br/><a class="btn btn-inverse" href="<?php echo url_for('usuario/edit?id_usuario='.$sf_user->getAttribute('id')) ?>"><i class="icon-user icon-white"></i> Perfil</a>
          
         
          <a class="btn btn-inverse" href="<?php echo url_for('login/logout') ?>"><i class="icon-off icon-white"></i> Salir</a>        
      </div>       
<?php endif;?>
  </div>
  <!--Finaliza Div Login-->