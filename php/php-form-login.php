<form id="form-login" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
    <label for="txt-user">Usuario:
        <input id="txt-user" name="txt-user" type="text"
               placeholder="Usuario" class="">
    </label>
    <label for="txt-pass">Contraseña:
        <input id="txt-pass" name="txt-pass" type="text"
               placeholder="Contraseña" class="">
    </label>
    <label for="btn-login">
        <input id="btn-login" name="btn-login" type="submit" value="Iniciar sesión">
    </label>
</form>