{include "templates/header.tpl"}
{include "templates/nav.tpl"}

<section class="form">
<form action="updateGame" method="POST" class="box">
    <h1>Modificar Juego</h1>
    <select name="genero" id="genero">
        {foreach from=$generos item=$genero}
        <option value="{$genero->id_genero}">{$genero->nombreGenero}</option>
        {/foreach}
    </select>
    {foreach from=$juego  item=$item}
        <input type="hidden" name="id_juego"  id="id_juego" value="{$item->id_juego}">

    <div>
        <input type="text" name="nombre" id="nombre" value="{$item->nombre}" placeholder="Nombre"> 
    </div>
    <div>
        <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion">{$item->descripcion}</textarea>
    </div>
    <div>
        <input type="text" name="calificacion" id="calificacion" value="{$item->calificacion}" placeholder="Calificacion">
    </div>
    <div>
        <input type="text" name="precio" id="precio" value="{$item->precio}" placeholder="Precio">
    </div>
    {/foreach}
    <button type="submit">Modificar</button>
</form>
</section>
<a class="buttons" href="Juego">Volver</a>
{include "templates/footer.tpl"}

