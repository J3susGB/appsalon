<h1 class="nombre-pagina">Reestablecer contraseña</h1>
<p class="descripcion-pagina">Escribe tu email para restablecer la contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            placeholder="Introduce tu e-mail"
            name="email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Intrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear cuenta</a>
</div>