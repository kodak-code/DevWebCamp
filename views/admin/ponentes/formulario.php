<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Personal</legend>
    
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input" value="<?php echo $ponente->nombre ?? ''; ?>" placeholder="Nombre Ponente">
    </div>
    
    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="formulario__input" value="<?php echo $ponente->apellido ?? ''; ?>" placeholder="Apellido Ponente">
    </div>
    
    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" class="formulario__input" value="<?php echo $ponente->ciudad ?? ''; ?>" placeholder="Ciudad Ponente">
    </div>
    
    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais</label>
        <input type="text" name="pais" id="pais" class="formulario__input" value="<?php echo $ponente->pais ?? ''; ?>" placeholder="Pais Ponente">
    </div>
    
    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input type="file" name="imagen" id="imagen" class="formulario__input formulario__input--file">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Extra</legend>
    
    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Areas de Experiencia (separadas por coma)</label>
        <input type="text" id="tags_input" class="formulario__input" placeholder="Ej. Node.js, PHP, Laravel, UX/UI">
    </div>
    
    <div class="formulario__listado" id="tags"></div>
    
    <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>
    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input type="text" name="redes[facebook]" class="formulario__input--sociales" value="<?php echo $ponente->facebook ?? ''; ?>" placeholder="Facebook">
        </div>
    </div>
    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input type="text" name="redes[twitter]" class="formulario__input--sociales" value="<?php echo $ponente->twitter ?? ''; ?>" placeholder="Twitter">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input type="text" name="redes[youtube]" class="formulario__input--sociales" value="<?php echo $ponente->youtube ?? ''; ?>" placeholder="Youtube">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input type="text" name="redes[instagram]" class="formulario__input--sociales" value="<?php echo $ponente->instagram ?? ''; ?>" placeholder="Instagram">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input type="text" name="redes[tiktok]" class="formulario__input--sociales" value="<?php echo $ponente->tiktok ?? ''; ?>" placeholder="Tiktok">
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>
            <input type="text" name="redes[github]" class="formulario__input--sociales" value="<?php echo $ponente->github ?? ''; ?>" placeholder="Github">
        </div>
    </div>

</fieldset>