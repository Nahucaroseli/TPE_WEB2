<?php
/* Smarty version 3.1.39, created on 2021-11-24 17:37:16
  from 'C:\xampp\htdocs\TPE WEB 2\templates\listajuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e6a3c5eb849_83963922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f759177e932376f36e27aa9f9f17de0eda76238c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\listajuego.tpl',
      1 => 1637771807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/logoutButton.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/FormFiltro.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619e6a3c5eb849_83963922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/logoutButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<ul>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
    <li>
        <h3 class="titleGames"><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
 / <?php echo $_smarty_tpl->tpl_vars['juego']->value->nombreGenero;?>
</h3>
         <a class="buttons" href="verJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Ver detalles</a> ||
         <?php if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
             <a class="buttons" href="eliminarJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Borrar</a> ||
         <a class="buttons" href="updateJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Modificar</a> 
         <?php }?>
         
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
    
<?php if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
<section class="form">
    <form action="addJuego" method="POST" class="box" enctype="multipart/form-data">
        <h1>Añadir Juego</h1>
        <select name="genero" id="genero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombreGenero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <div>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion" required></textarea>
        </div>
        <div>
            <input type="text" name="calificacion" id="calificacion" placeholder="Calificacion" required>
        </div>
        <div>
            <input type="text" name="precio" id="precio" placeholder="Precio" required>
        </div>
        <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin']) {?>
        <div>
            <input type="file" name="img" id="img" placeholder="IMG">
        </div>
        <?php }?>
        <button type="submit">Enviar</button>
    </form>
</section>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/FormFiltro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
