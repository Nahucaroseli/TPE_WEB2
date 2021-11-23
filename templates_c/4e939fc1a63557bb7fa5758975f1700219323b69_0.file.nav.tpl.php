<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:18:00
  from 'C:\xampp\htdocs\TPE WEB 2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae1b892ae54_58156529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e939fc1a63557bb7fa5758975f1700219323b69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\nav.tpl',
      1 => 1637519052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ae1b892ae54_58156529 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="navbar">
    <nav>
        <li><a href="Juego">Juegos</a></li>
        <li><a href="Genero">Generos</a></li>
        <?php if (!(isset($_SESSION['logged']))) {?>
            <li><a href="Login">Login</a></li>
        <?php }?>
        <?php if ((isset($_SESSION['isAdmin']))) {?>
            <li><a href="Usuario">Usuarios</a></li>
        <?php }?>
    </nav>
</section><?php }
}
