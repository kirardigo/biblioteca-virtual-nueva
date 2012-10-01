<?php if (!($sf_user->isAuthenticated())): ?>          
  <!--Comienza Div Login-->
  <div id="login">
      <fieldset>
        <form class="well form-inline form-horizontal" action="<?php echo url_for("login/index");?>" method="post" id="login">
            <input type="text" class="input-small" placeholder="Usuario" name="user"></input>
            <input type="password" class="input-small" placeholder="Contraseña" name="pass"></input>
            
            <input type="submit" class="btn-inverse" value="Entrar"></input>
        </form>
      </fieldset>     
<?php else:?>                   
      <div class="well" style="font-size: small"><?php echo "<i> Hola <b>".$sf_user->getAttribute('userNom')."</b>, Bienvenido!</i>"?>        
<!--        <br/><a href="<?php //echo url_for('usuario/edit?id_usuario='.$sf_user->getAttribute('id')) ?>"><i class="icon-user"></i> Perfil</a>-->
        
          <br/><a href="<?php echo url_for('usuario/edit?id_usuario='.$sf_user->getAttribute('id')) ?>"><i class="icon-user"></i> Perfil</a>
          
          
          <br/><a href="<?php echo url_for('login/logout') ?>"><i class="icon-off"></i> Salir</a>        
      </div>       
<?php endif;?>
  </div>
  <!--Finaliza Div Login-->