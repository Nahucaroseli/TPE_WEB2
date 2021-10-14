<?php
/* Smarty version 3.1.39, created on 2021-09-23 20:03:19
  from 'C:\xampp\htdocs\TPE WEB 2\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cc1678e9100_95841573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d8b81252d12e080497a2b7c1eba05963f2f071' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\index.tpl',
      1 => 1632419542,
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
function content_614cc1678e9100_95841573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
    <div class="content">
        <section>
            <img id="robotImage" src="img/img1.jpg" alt="robotImage">
            <h1>
                Juegos de Accion
            </h1>
        </section>
        <section>
            <img src="img/img2.jpg" alt="Characters">
            <h1>
                Busca tu juego preferido
            </h1>
        </section>
    </div>
    <div class="content">
        <section>
            <img id="robotImage" src="img/img1.jpg" alt="robotImage">
            <h1>
                Juegos de Accion
            </h1>
        </section>
        <section>
            <img src="img/img2.jpg" alt="Characters">
            <h1>
                Busca tu juego preferido
            </h1>
        </section>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
