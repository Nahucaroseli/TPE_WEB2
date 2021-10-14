<?php
/* Smarty version 3.1.39, created on 2021-09-30 00:54:58
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154eec217b078_39762466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd75c77f1f72ed31f605625821e13c85d6c52662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormEdit.tpl',
      1 => 1632956073,
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
function content_6154eec217b078_39762466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="assets/style.css">
<?php $_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h1>Modificar</h1>
</div>
<form action="update" method="POST">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <select name="genero" id="genero">
   
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <div>
               <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombreGenero;?>
</option>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="hidden" name="id_juego"  id="id_juego" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_juego;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre"> 
    </div>
    <div>
        <label>Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" >
    </div>
    <div>
        <label>Calificacion</label>
        <input type="text" name="calificacion" id="calificacion" >
    </div>
    <div>
        <label>Precio</label>
        <input type="text" name="precio" id="precio" >
    </div>
    <button type="submit">Modificar</button>
</form>
<a href="Juego">Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
