<?php
/* Smarty version 3.1.39, created on 2021-11-23 01:10:23
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c316fa77d01_96601462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc5bda1d5585bddcdf66f9dce0101fe16ca9580' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormRegister.tpl',
      1 => 1635990715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
  ),
),false)) {
function content_619c316fa77d01_96601462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="form">
    <form action="RegisterPage" method="POST" class="box">
        <h1>Registrarse</h1>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
             <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        
        <button type="submit">Registrarse</button>
    </form>
</section><?php }
}
