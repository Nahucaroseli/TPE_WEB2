<div>
    <h1>Comentarios</h1>
</div>
<input type="hidden"  name=admin value="{$user}">
<input type="hidden" name=juego value="{$detalles->id_juego}">
{literal}
<section id="app">
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
         <button id="btn-borrar" v-if="admin"  v-on:click="eliminarComentario(comentario.id)">Borrar</button>
        </div>
     </div>
</section>
{/literal}