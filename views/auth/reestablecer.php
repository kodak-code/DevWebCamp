<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo Password</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <?php if($token_valido) {  ?>

    <form class="formulario" method="POST">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nuevo Password</label>
            <input type="password" class="formulario__input" placeholder="Tu nuevo Password" id="password" name="password">
        </div>

        <input type="submit" value="Actualizar Password" class="formulario__submit">
    </form>

    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tenes una cuenta? ¡Inicia Sesion!</a>
        <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? ¡Obtene una!</a>
    </div>


</main>