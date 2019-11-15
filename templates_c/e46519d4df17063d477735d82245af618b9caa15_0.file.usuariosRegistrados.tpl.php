<?php
/* Smarty version 3.1.33, created on 2019-11-13 23:33:06
  from 'C:\xampp\htdocs\tpEspecial\templates\usuariosRegistrados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc84a23215c9_07138133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46519d4df17063d477735d82245af618b9caa15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\usuariosRegistrados.tpl',
      1 => 1573684384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcc84a23215c9_07138133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid margen contenedor">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Usuarios</th>
                    <th>Admin</th>
                    <th>Otorgar Permisos</th>
                    <th>Eliminar Usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin === "1") {?>
                                si
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin === "0") {?>
                                no
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin === "1") {?>
                                <a href="removerAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
"><button type="button" class="btn btn-warning">Remover Admin</button></a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin === "0") {?>
                                <a href="agregarAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
"><button type="button" class="btn btn-success">Agregar Admin</button></a>
                            <?php }?>
                        </td>
                        <td> 
                            <a href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a> 
                        </td>
                    </tr>              
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </tbody>
        <table>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
