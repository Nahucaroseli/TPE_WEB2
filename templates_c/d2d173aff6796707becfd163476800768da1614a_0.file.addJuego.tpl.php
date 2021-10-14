<?php
/* Smarty version 3.1.39, created on 2021-10-08 03:21:25
  from 'C:\xampp\htdocs\TPE WEB 2\templates\addJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f9d15a8fca2_70776672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d173aff6796707becfd163476800768da1614a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\addJuego.tpl',
      1 => 1633656078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/selectJuegos.tpl' => 1,
  ),
),false)) {
function content_615f9d15a8fca2_70776672 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="form">
    <form action="addJuego" method="POST" class="box">
        <h1>Añadir Juego</h1>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/selectJuegos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label>Descripcion</label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div>
            <label>Calificacion</label>
            <input type="text" name="calificacion" id="calificacion">
        </div>
        <div>
            <label>Precio</label>
            <input type="text" name="precio" id="precio">
        </div>
        <button type="submit">Enviar</button>
    </form>
</section>
<?php }
}
