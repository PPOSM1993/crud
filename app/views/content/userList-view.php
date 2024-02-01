<br>
<div class="container is-fluid mb-6">
	<h1 class="title" style="text-align:center; text-transform:uppercase;">Usuarios</h1>
    <br>
	<h2 class="subtitle" style="text-align:center;">Lista de usuario</h2>
</div>
<br>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<?php
		use app\controllers\userController;

		$insUsuario = new userController();

		echo $insUsuario->listarUsuarioControlador($url[1],15,$url[0],"");
	?>
</div>