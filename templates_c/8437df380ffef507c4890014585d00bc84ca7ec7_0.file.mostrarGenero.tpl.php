<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:20:57
  from 'C:\xampp\htdocs\TPE WEB 2\templates\mostrarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae269e730f4_29656778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8437df380ffef507c4890014585d00bc84ca7ec7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\mostrarGenero.tpl',
      1 => 1635979092,
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
function content_619ae269e730f4_29656778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="assets/style.css">
<?php $_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <h1>Juegos del Genero</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'detalles');
$_smarty_tpl->tpl_vars['detalles']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalles']->value) {
$_smarty_tpl->tpl_vars['detalles']->do_else = false;
?>
    <li>
         <?php echo $_smarty_tpl->tpl_vars['detalles']->value->nombre;?>

    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<a href="Genero">Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
