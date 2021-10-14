<?php
/* Smarty version 3.1.39, created on 2021-10-10 01:57:49
  from 'C:\xampp\htdocs\TPE WEB 2\templates\FormEditGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61622c7d4d2d35_05336931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f224f894bbc3fb231704ace283e6e0268c630ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\FormEditGenero.tpl',
      1 => 1633823862,
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
function content_61622c7d4d2d35_05336931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="form">
    <form action="updateGenre" method="POST" class="box">
        <h1>Modificar Genero</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'detalles');
$_smarty_tpl->tpl_vars['detalles']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalles']->value) {
$_smarty_tpl->tpl_vars['detalles']->do_else = false;
?>
        <input type="hidden" name="id_genero" id="id_genero" value="<?php echo $_smarty_tpl->tpl_vars['detalles']->value->id_genero;?>
">
        <div>
            <input type="text" name="nombreGenero" id="nombreGenero" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['detalles']->value->nombreGenero;?>
">
        </div>
        <div>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion"><?php echo $_smarty_tpl->tpl_vars['detalles']->value->descripcion;?>
</textarea>
        </div>
        <div>
             <input type="text" id="tag" name="tag" placeholder="Tag" value="<?php echo $_smarty_tpl->tpl_vars['detalles']->value->tag;?>
">
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <button class="buttons" type="submit">Modificar</button>
    </form>
</section>
<a class="buttons" href="Genero">Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
