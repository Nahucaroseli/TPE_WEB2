{include "templates/header.tpl"}
{include "templates/nav.tpl"}

<ul>
    <h1>Detalles</h1>
    {foreach from=$juego item=$detalles}
    <li>
        <strong>Nombre: </strong> {$detalles->nombre}
    </li>
    <li>
        <strong>Descripcion:</strong> {$detalles->descripcion}
   </li>
   <li>
    <strong>Calificacion:</strong>: {$detalles->calificacion}
    </li>
    <li>
        <strong>Precio:</strong>: {$detalles->precio}
   </li>
   <li>
       <img src="{$detalles->img}" alt="imagen">
    </li>
    {/foreach}
</ul>

{include "templates/Vue/listacomentario.tpl"}

{include "templates/addComentario.tpl"}

<script src="js/main.js"></script>

<a href="Juego">Volver</a>

{include "templates/footer.tpl"}
