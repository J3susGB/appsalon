<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Rellena el formulario para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input
            type="text"
            id="nombre"
            placeholder="Introduce tu nombre"
            name="nombre"
            value="<?php echo s($usuario->nombre); ?>"
        />
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input
            type="text"
            id="apellido"
            placeholder="Introduce tu apellido"
            name="apellido"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input
            type="tel"
            id="telefono"
            placeholder="Introduce tu teléfono"
            name="telefono"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>
    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            placeholder="Introduce tu e-mail"
            name="email"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            placeholder="Introduce tu constraseña"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Crear cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="olvide">¿Olvidaste tu contraseña?</a>
</div>