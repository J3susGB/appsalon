<div class="campo">
    <label for="nombre">Nombre</label>
    <input 
        type="text" 
        name="nombre" 
        id="nombre" 
        placeholder="Introduce el nombre del servicio"
        value="<?php echo $servicio->nombre; ?>"
    />
</div>

<div class="campo">
    <label for="precio">Precio</label>
    <input 
        type="number" 
        name="precio" 
        d="precio" 
        placeholder="Introduce el precio del servicio"
        value="<?php echo $servicio->precio; ?>"
    />
</div>