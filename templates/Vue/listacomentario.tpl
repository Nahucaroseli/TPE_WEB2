<div>
    <h1>Comentarios</h1>
</div>
<input type="hidden"  name=admin value="{$user}">
<input type="hidden" name=juego value="{$detalles->id_juego}">
{literal}

<section id="app">
    <div>
        <form id="orderForm">
            <select name="atributo" required class="box">
                <option value="fecha">Fecha</option>
                <option value="puntaje">Puntaje</option>
            </select>
            <select name="criterio" required class="box">
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
            <input v-on:click="orderBy" type="submit">
        </form>
    </div>

     <div class="container" v-for="comentario in comentarios">
        <div>
            
            <h3>Puntaje</h3>
            <div>
                <p>{{comentario.puntaje}}</p>
            </div>
            <h3>Comentario</h3>
            <div>
                <p>{{comentario.texto}}</p>
            </div>
            <h3>Fecha</h3>
            <div>
                <p>{{comentario.fecha}}</p>
            </div>
         <button id="btn-borrar" v-if="admin"  v-on:click="eliminarComentario(comentario.id)">Borrar</button>
        </div>
     </div>
</section>
{/literal}