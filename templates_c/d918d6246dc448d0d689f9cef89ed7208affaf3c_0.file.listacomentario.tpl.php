<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:21:27
  from 'C:\xampp\htdocs\TPE WEB 2\templates\Vue\listacomentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c4217f3ed43_88852204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd918d6246dc448d0d689f9cef89ed7208affaf3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\Vue\\listacomentario.tpl',
      1 => 1637630487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c4217f3ed43_88852204 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h1>Comentarios</h1>
</div>
<input type="hidden"  name=admin value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
<input type="hidden" name=juego value="<?php echo $_smarty_tpl->tpl_vars['detalles']->value->id_juego;?>
">

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
<?php }
}
