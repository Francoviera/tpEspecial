<?php
/* Smarty version 3.1.33, created on 2019-11-27 06:26:26
  from 'C:\xampp\htdocs\tpEspecial\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde09029e1f16_44137786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '418836b8ecbaf5f5ec83aca919dfccb19b150e3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\detalleProducto.tpl',
      1 => 1574832383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerJS.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dde09029e1f16_44137786 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" alt="">
                    <?php if ($_smarty_tpl->tpl_vars['userAdmin']->value === true) {?>
                    <a href="eliminarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button class="btn btn-danger" type="button">Eliminar Imagen</button></a>
                    <?php }?>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Detalle del Producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['producto']->value->cantidad > 0) {?>
                                <td class="text-success">Producto Disponible</td>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['producto']->value->cantidad <= 0) {?>
                                <td class="text-warning">Producto No Disponible</td>
                            <?php }?>
                        </tr>
                    </tbody>
                </table>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-md-3 ocultar">
                <section class="publicidadFernet">
                    <h3 class="bg-warning">No te Pierdas esta super ¡¡Oferta!!</h3>
                    <img src="img/publicidadOferta.jpg" alt="Publicidad Oferta">
                    <h3 class="bg-warning">A tan solo $350 </h3>
                </section>
            </div> 
        </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
