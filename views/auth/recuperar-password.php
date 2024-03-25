<h1 class="nombre-pagina">Recuperar contraseña</h1>
<p class="descripcion-pagina">A continuación, indica tu nueva contraseña</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php'; 
?>

<?php if ($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            placeholder="Introduce tu nueva contraseña"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Guardar">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
</div>