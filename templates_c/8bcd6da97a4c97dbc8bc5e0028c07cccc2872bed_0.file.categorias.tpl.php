<?php
/* Smarty version 3.1.33, created on 2019-09-21 06:10:03
  from 'C:\xampp\htdocs\tpEspecial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d85a29bb751b9_94222305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcd6da97a4c97dbc8bc5e0028c07cccc2872bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\categorias.tpl',
      1 => 1569037037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d85a29bb751b9_94222305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->desc;?>
</td>
                            <td> <a href="http://localhost/tpEspecial/categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias_fk;?>
"><input class="verCategoria" type="button" value="Ver Categoria"></a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h2>Ingrese Categoria</h2>
            <form action="categoria/agregar" method="post">
                <h4>tipo</h4><input class="form-control" type="text" name="tipo">
                <h4>desc</h4><input class="form-control" type="text" name="desc">
                <button class="btn btn-outline-success" type="submit">agregar</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
