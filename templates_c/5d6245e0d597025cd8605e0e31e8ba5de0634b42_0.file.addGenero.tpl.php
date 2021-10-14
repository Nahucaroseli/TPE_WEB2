<?php
/* Smarty version 3.1.39, created on 2021-09-25 00:19:53
  from 'C:\xampp\htdocs\TPE WEB 2\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e4f098cf9a5_21699778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6245e0d597025cd8605e0e31e8ba5de0634b42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\addGenero.tpl',
      1 => 1632521529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e4f098cf9a5_21699778 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h1>Añadir Genero</h1>
</div>
<form action="addGenero" method="POST">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombreGenero" id="nombreGenero">
    </div>
    <div>
        <label>Descripcion</label>
        <input type="text" name="descripcion" id="descripcion">
    </div>
    <div>
        <label>Tag</label>
        <input type="text" name="tag" id="tag">
    </div>
    <button type="submit">Enviar</button>
</form><?php }
}
