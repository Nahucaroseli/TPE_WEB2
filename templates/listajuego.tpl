{include "templates/header.tpl"}
{if $verificar == true}
    {include "templates/logoutButton.tpl"}
{/if}

{include "templates/nav.tpl"}
    
<ul>
    
    {foreach from=$juegos item=$juego}
    <li>
        <h3 class="titleGames">{$juego->nombre} / {$juego->nombreGenero}</h3>
         <a class="buttons" href="verJuego/{$juego->id_juego}">Ver detalles</a> ||
         {if $verificar == true }
             <a class="buttons" href="eliminarJuego/{$juego->id_juego}">Borrar</a> ||
         <a class="buttons" href="updateJuego/{$juego->id_juego}">Modificar</a> 
         {/if}
         
    </li>
    {/foreach}
</ul>
    
{if $verificar == true }
<section class="form">
    <form action="addJuego" method="POST" class="box" enctype="multipart/form-data">
        <h1>Añadir Juego</h1>
        <select name="genero" id="genero">
            {foreach from=$generos item=$genero}
            <option value="{$genero->id_genero}">{$genero->nombreGenero}</option>
            {/foreach}
        </select>
        <div>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion" required></textarea>
        </div>
        <div>
            <input type="text" name="calificacion" id="calificacion" placeholder="Calificacion" required>
        </div>
        <div>
            <input type="text" name="precio" id="precio" placeholder="Precio" required>
        </div>
        <div>
            <input type="file" name="img" id="img" placeholder="IMG" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</section>
{/if}

{include "templates/footer.tpl"}
