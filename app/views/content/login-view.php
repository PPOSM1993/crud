<br><br>
<br><br>
<div class="columns is-flex is-justify-content-center">
    	<figure class="image is-128x128">
        <img src="<?php echo APP_URL; ?>app/views/img/bulma.png" alt="Default" width="500" height="200">
		</figure>
  	</div>
<div class="main-container">
	
    <form class="box login" action="" method="POST" autocomplete="off" >
		<h5 class="title is-5 has-text-centered is-uppercase">LOGIN</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-success">Login</button>
		</p>
	</form>
</div>
<br>