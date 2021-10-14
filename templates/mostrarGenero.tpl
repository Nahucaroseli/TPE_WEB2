{include "templates/header.tpl"}
<link rel="stylesheet" href="assets/style.css">
{include "templates/nav.tpl"}

<ul>
    <h1>Juegos del Genero</h1>
    {foreach from=$juegos item=$detalles}
    <li>
         {$detalles->nombre}
    </li>
    {/foreach}
</ul>
<a href="Genero">Volver</a>

{include "templates/footer.tpl"}