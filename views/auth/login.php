<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    // $alertas = [];
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Introduce email"
            name="email"
        />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            placeholder="Introduce constraseña"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
    <a href="olvide">¿Olvidaste tu contraseña?</a>
</div>