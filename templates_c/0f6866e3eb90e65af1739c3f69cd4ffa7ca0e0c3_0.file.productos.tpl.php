<?php
/* Smarty version 3.1.33, created on 2019-09-28 21:43:20
  from 'C:\xampp\htdocs\tpEspecial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8fb7d85f1f88_96969366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6866e3eb90e65af1739c3f69cd4ffa7ca0e0c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\productos.tpl',
      1 => 1569699798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerJS.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8fb7d85f1f88_96969366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/headerJS.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid margen contenedor">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div>
                <img class="ofertaHotweek" src="img/ofertaHotweek.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>Productos Disponibles</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
                        <th>Categoria</th>
                        <th>Edicion adm</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                            <tr>
                                <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
                                <td> 
                                    <button type="button" class="btnEdit btn btn-warning" data-nombre="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" data-precio="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" data-cantidad="<?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
" data-categoria="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria_fk;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Editar</button>
                                    <a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3 ocultar">
            <section class="publicidadFernet">
                <h3 class="bg-warning">No te Pierdas esta super ¡¡Oferta!!</h3>
                <img src="img/publicidadOferta.jpg" alt="Publicidad Oferta">
                <h3 class="bg-warning">A tan solo $350 </h3>
            </section>
        </div> 
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <button class="btn btn-outline-primary btnAgregar" type="button">agregar Producto</button>
            <div class="formAgregar">
                <form action="agregarProducto" method="post">
                    <h4>Ingrese producto</h4>
                    <input class="form-control" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control" type="number" name="categoria">
                    <button class="btn btn-outline-success" type="submit">agregar</button>
                </form>
            </div>

            <div class="formEditar d-none">
                <form action="editarProducto" method="post">
                    <h4>Editar producto</h4>
                    <input class="form-control valueNombre" type="text" name="nombre">
                    <h4>precio</h4><input class="form-control valuePrecio" type="number" name="precio">
                    <h4>cantidad</h4><input class="form-control valueCantidad" type="number" name="cantidad">
                    <h4>categoria</h4><input class="form-control valueCategoria" type="number" name="categoria">
                    <h4>id-Producto</h4><input class="form-control valueId" type="number" name="id">
                    <button class="btn btn-outline-success" type="submit">Editar</button>
                </form>
            </div>
            
                        </table>
        </div>
    </div>  
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
