<?php
/* Smarty version 3.1.39, created on 2021-10-03 20:02:40
  from 'C:\xampp\htdocs\TPE WEB 2\templates\adminGameButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159f0404c3c38_11801104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b402b96b5096e64441b8fc14af51746cd7564c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\adminGameButtons.tpl',
      1 => 1633283467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159f0404c3c38_11801104 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="buttons" href="eliminarJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Borrar</a>
<a class="buttons" href="updateJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Modificar</a> <?php }
}
