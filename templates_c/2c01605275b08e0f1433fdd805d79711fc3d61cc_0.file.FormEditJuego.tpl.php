<?php
/* Smarty version 3.1.39, created on 2021-10-10 01:56:58
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormEditJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61622c4a83b965_89581645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c01605275b08e0f1433fdd805d79711fc3d61cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormEditJuego.tpl',
      1 => 1633823799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61622c4a83b965_89581645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="form">
<form action="updateGame" method="POST" class="box">
    <h1>Modificar Juego</h1>
    <select name="genero" id="genero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombreGenero;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <input type="hidden" name="id_juego"  id="id_juego" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_juego;?>
">

    <div>
        <input type="text" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
" placeholder="Nombre"> 
    </div>
    <div>
        <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion"><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</textarea>
    </div>
    <div>
        <input type="text" name="calificacion" id="calificacion" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->calificacion;?>
" placeholder="Calificacion">
    </div>
    <div>
        <input type="text" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
" placeholder="Precio">
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <button type="submit">Modificar</button>
</form>
</section>
<a class="buttons" href="Juego">Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
