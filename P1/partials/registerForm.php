<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="userName">Nombre</label>
		<br/>
		<input type="text" name="userName" class="item_requerid" size="20" maxlength="25" value="<?php print $userName ?>"
		 placeholder="Miguel" />
        <br/>
        <label for="lastName">Apellido</label>
        <br/>
        <input type="text" name="lastName" class="item_requerid" size="20" maxlength="25" value="<?php print $lastName ?>"
               placeholder="Cervantes" />
		<br/>
		<label for="email">Email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $email ?>"
		 placeholder="kiko@ic.es" />
		<br/>
        <label for="dni">DNI</label>
        <br/>
        <input type="text" name="dni" class="item_requerid" size="20" maxlength="25" value="<?php print $dni ?>"
               placeholder="1234567X" />
        <br/>
		<label for="passwd">Clave</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value="<?php print $passwd ?>"/>
		<br/>
        <label for="fotoFile">Foto</label>
        <br/>
        <input type="text" name="fotoFile" class="item_requerid" size="20" maxlength="25" value="<?php print $fotoFile ?>"/>
        <br/>

		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
	</form>
</main>