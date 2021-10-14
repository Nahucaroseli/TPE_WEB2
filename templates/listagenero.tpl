{include "templates/header.tpl"}
{if $verificar == true}
    {include "templates/logoutButton.tpl"}
{/if}
{include "templates/nav.tpl"}


<ul>
    {foreach from=$generos item=$genero}
    <li>
         <h3 class="titleGames">{$genero->nombreGenero} </h3>
         <a class="buttons" href="verGenero/{$genero->id_genero}">Ver Genero</a> ||
         {if $verificar == true}
        <a href="eliminarGenero/{$genero->id_genero}">Borrar</a> ||
         <a href="updateGenero/{$genero->id_genero}">Modificar</a> 
         {/if}
  
    </li>
    {/foreach}
</ul>
{if $verificar == true}
<section class="form">
    <form action="addGenero" method="POST" class="box">
        <div>
            <h1>Añadir Genero</h1>
        </div>
        <div>
            <input type="text" name="nombreGenero" id="nombreGenero" placeholder="Nombre">
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion"></textarea>
        </div>
        <div>
            <input type="text" name="tag" id="tag" placeholder="Tag">
        </div>
        <button type="submit">Agregar</button>
    </form>
</section>  
{/if}

{include "templates/footer.tpl"}
