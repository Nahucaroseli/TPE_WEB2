<?php
/* Smarty version 3.1.39, created on 2021-11-23 03:29:34
  from 'C:\xampp\htdocs\TPE WEB 2\templates\Usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c520e8c1820_62612596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a74bacc26769b6e7c19db91f71afc9e103e6ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\Usuarios.tpl',
      1 => 1637631448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
  ),
),false)) {
function content_619c520e8c1820_62612596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <table>
        <thead>
            <th>Email</th>
            <th>Es admin</th>  
        </thead>  
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->isAdmin;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->isAdmin == 1) {?>
                            <form method="POST" action="editarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                                <input type="text" name="isAdmin"> 
                                <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                                <button type="submit" id="">Cambiar permiso</button>            
                            </form>
                            <?php } else { ?>
                            <form method="POST" action="editarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                                <input type="text" name="isAdmin"> 
                                <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                                <button type="submit" id="">Cambiar permiso</button>            
                            </form>
                            <?php }?>
                        </td>
                        <td>
                        <form method="POST" action="borrarUsuario">                            
                            <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">                               
                            <button type="submit">Borrar Usuario</button>                  
                        </form>
                        </td>                       
                    </tr>   
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>     
    </table>

</div><?php }
}
