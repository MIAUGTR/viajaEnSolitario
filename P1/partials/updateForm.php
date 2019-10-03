<main>
    <h1>Modifica usuario </h1>
    <form class="fom_usuario" action="?action=update" method="POST">

        <!-- Saca los datos de la BBDD y los mete en el formulario -->

        <?php

        /** Importa los métodos de gestionBD */
        include("./gestionBD.php");

        $tabla = "A_cliente";

        $consulta = consultaPorId($pdo, $tabla, $_GET['client_id']);

        $clientId = $consulta[0]["client_id"];
        $userName = $consulta[0]["nombre"];
        $lastName = $consulta[0]["apellidos"];
        $email = $consulta[0]["email"];
        $dni = $consulta[0]["dni"];
        $passwd = $consulta[0]["clave"];
        $fotoFile = $consulta[0]["foto_file"];

        ?>

        <!-- -->

        <legend>Datos básicos</legend>
        <label for="clientId">ID</label>
        <br/>
        <input type="text" name="clientId" class="item_requerid" size="20" maxlength="25" value="<?php print $clientId ?>"
               placeholder=""  readonly />
        <br/>
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

        <input type="submit" value="Modificar">
        <input type="reset" value="Deshacer">
    </form>
</main>