{include "templates/header.tpl"}
{include "templates/nav.tpl"}
<section class="form">
    <form action="updateGenre" method="POST" class="box">
        <h1>Modificar Genero</h1>
        {foreach from=$genero item=$detalles}
        <input type="hidden" name="id_genero" id="id_genero" value="{$detalles->id_genero}">
        <div>
            <input type="text" name="nombreGenero" id="nombreGenero" placeholder="Nombre" value="{$detalles->nombreGenero}">
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion">{$detalles->descripcion}</textarea>
        </div>
        <div>
             <input type="text" id="tag" name="tag" placeholder="Tag" value="{$detalles->tag}">
        </div>
        {/foreach}
        <button class="buttons" type="submit">Modificar</button>
    </form>
</section>
<a class="buttons" href="Genero">Volver</a>
{include "templates/footer.tpl"}

