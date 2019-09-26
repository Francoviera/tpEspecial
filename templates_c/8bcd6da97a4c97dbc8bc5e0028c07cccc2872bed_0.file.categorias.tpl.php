<?php
/* Smarty version 3.1.33, created on 2019-09-27 00:50:00
  from 'C:\xampp\htdocs\tpEspecial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8d4098aa4495_74427828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcd6da97a4c97dbc8bc5e0028c07cccc2872bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\categorias.tpl',
      1 => 1569538093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerCategorias.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8d4098aa4495_74427828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/headerCategorias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
                            <td><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><input class="verCategoria" type="button" value="Ver Categoria"></a></td>
                            <td><button type="button" class="btnEdit" data-tipo="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
" data-desc="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">Editar</button></td>
                            <td><a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button">Eliminar</button></a></td>
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
            <button class="btn btn-outline-primary btnAgregar" type="submit">Agregar Categoria</button>
            <div class="formAgregar">
                <form action="agregarCategoria" method="post">
                    <h2>Ingrese Categoria</h2>
                    <h4>tipo</h4><input class="form-control" type="text" name="tipo">
                    <h4>desc</h4><input class="form-control" type="text" name="desc">
                    <button class="btn btn-outline-success" type="submit">agregar</button>
                </form>
            </div>

            <div class="formEditar d-none">
                <form action="editarCategoria" method="post">
                    <h2>Editar Categoria</h2>
                    <h4>tipo</h4><input class="form-control valueTipo" type="text" name="tipo">
                    <h4>desc</h4><input class="form-control valueDesc" type="text" name="desc">
                    <h4>id-categoria</h4><input class="form-control valueId" type="number" name="id">
                    <button class="btn btn-outline-success" type="submit">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
