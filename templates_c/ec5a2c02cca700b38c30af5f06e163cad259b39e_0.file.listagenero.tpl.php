<?php
/* Smarty version 3.1.39, created on 2021-11-22 01:20:55
  from 'C:\xampp\htdocs\TPE WEB 2\templates\listagenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ae267854756_12776903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5a2c02cca700b38c30af5f06e163cad259b39e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\listagenero.tpl',
      1 => 1635979086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/logoutButton.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ae267854756_12776903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/logoutButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <li>
         <h3 class="titleGames"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombreGenero;?>
 </h3>
         <a class="buttons" href="verGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">Ver Genero</a> ||
         <?php if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
        <a href="eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">Borrar</a> ||
         <a href="updateGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">Modificar</a> 
         <?php }?>
  
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
<section class="form">
    <form action="addGenero" method="POST" class="box">
        <div>
            <h1>Añadir Genero</h1>
        </div>
        <div>
            <input type="text" name="nombreGenero" id="nombreGenero" placeholder="Nombre">
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion"></textarea>
        </div>
        <div>
            <input type="text" name="tag" id="tag" placeholder="Tag">
        </div>
        <button type="submit">Agregar</button>
    </form>
</section>  
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
