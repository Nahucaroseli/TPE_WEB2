<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:18:02
  from 'C:\xampp\htdocs\TPE WEB 2\templates\mostrarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae1bae5e513_15899443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1b500947cabed4a651dd83d19af6bc8d554cb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\mostrarJuego.tpl',
      1 => 1637532205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/Vue/listacomentario.tpl' => 1,
    'file:templates/addComentario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ae1bae5e513_15899443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <h1>Detalles</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'detalles');
$_smarty_tpl->tpl_vars['detalles']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalles']->value) {
$_smarty_tpl->tpl_vars['detalles']->do_else = false;
?>
    <li>
        <strong>Nombre: </strong> <?php echo $_smarty_tpl->tpl_vars['detalles']->value->nombre;?>

    </li>
    <li>
        <strong>Descripcion:</strong> <?php echo $_smarty_tpl->tpl_vars['detalles']->value->descripcion;?>

   </li>
   <li>
    <strong>Calificacion:</strong>: <?php echo $_smarty_tpl->tpl_vars['detalles']->value->calificacion;?>

    </li>
    <li>
        <strong>Precio:</strong>: <?php echo $_smarty_tpl->tpl_vars['detalles']->value->precio;?>

   </li>
   <li>
       <img src="<?php echo $_smarty_tpl->tpl_vars['detalles']->value->img;?>
" alt="imagen">
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/Vue/listacomentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/addComentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

<a href="Juego">Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
