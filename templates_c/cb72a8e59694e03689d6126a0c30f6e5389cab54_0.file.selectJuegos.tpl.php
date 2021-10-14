<?php
/* Smarty version 3.1.39, created on 2021-09-29 22:06:17
  from 'C:\xampp\htdocs\TPE WEB 2\templates\selectJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154c73956e2b1_50385355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb72a8e59694e03689d6126a0c30f6e5389cab54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\selectJuegos.tpl',
      1 => 1632945314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6154c73956e2b1_50385355 (Smarty_Internal_Template $_smarty_tpl) {
?><label>Genero</label>
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
</select><?php }
}
