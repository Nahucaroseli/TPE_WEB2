<?php
/* Smarty version 3.1.39, created on 2021-11-23 02:07:55
  from 'C:\xampp\htdocs\TPE WEB 2\templates\addComentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c3eeb513592_11003165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85d00a0bf9538baab650cd6efc6fe20c32d2ac2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB 2\\templates\\addComentario.tpl',
      1 => 1637629674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c3eeb513592_11003165 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="form">
        <form id="formComentario" class="box">
            <div>
                <label>Ingrese su comentario</label>
            </div>
            <div>
                <textarea type="text" name="Texto" required placeholder="Texto"></textarea>
            </div>
            <div>
                <input type="number" name="puntaje" min="1" max="5" required placeholder="Puntaje">
            </div>
            <div>
                <button type="submit">Insertar</button>
            </div>
        </form>
</section>


<?php }
}
