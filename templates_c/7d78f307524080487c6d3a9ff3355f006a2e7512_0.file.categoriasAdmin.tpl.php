<?php
/* Smarty version 3.1.33, created on 2019-11-13 23:29:28
  from 'C:\xampp\htdocs\tpEspecial\templates\categoriasAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc83c81a3cd0_07225105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d78f307524080487c6d3a9ff3355f006a2e7512' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\categoriasAdmin.tpl',
      1 => 1573581943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcc83c81a3cd0_07225105 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
                            <td><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><input class="verCategoria btn btn-primary" type="button" value="Ver Categoria"></a></td>
                            <td><a href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button" class="btn btn-warning">Editar</button></a></td>
                            <td><a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <h4 class="bg bg-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
            <?php }?>
            <form action="agregarCategoria" method="post">
                <h2>Ingrese Categoria</h2>
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
