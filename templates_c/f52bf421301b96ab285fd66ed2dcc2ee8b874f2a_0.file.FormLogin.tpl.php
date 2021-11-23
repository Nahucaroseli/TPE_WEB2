<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:18:10
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae1c2323e00_95376555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52bf421301b96ab285fd66ed2dcc2ee8b874f2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormLogin.tpl',
      1 => 1635979075,
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
function content_619ae1c2323e00_95376555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="form">
    <form action="verify" method="POST" class="box">
        <h1>Login</h1>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
        <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        
        <button type="submit">Acceder</button>
        <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
    </form>
    
   
    <div> 
        <a class="buttons" href="Register">Registrarse</a>
    </div>
</section>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
