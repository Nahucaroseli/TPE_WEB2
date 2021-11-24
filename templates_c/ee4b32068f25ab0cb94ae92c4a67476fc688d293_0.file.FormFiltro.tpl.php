<?php
/* Smarty version 3.1.39, created on 2021-11-24 01:39:49
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormFiltro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d89d5a05922_18726808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4b32068f25ab0cb94ae92c4a67476fc688d293' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormFiltro.tpl',
      1 => 1637714387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d89d5a05922_18726808 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="form">
    <form action="busquedaFiltro" method="POST">
        <div class="search-group">
          <input type="text" name="filtro" placeholder="Advanced Search">
          <button class="btn btn-secondary btn-info-search" type="submit">Search</button>
        </div>
    </form>
</section><?php }
}
