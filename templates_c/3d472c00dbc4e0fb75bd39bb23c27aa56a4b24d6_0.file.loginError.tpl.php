<?php
/* Smarty version 3.1.33, created on 2019-10-16 02:24:44
  from 'C:\xampp\htdocs\tpEspecial\templates\loginError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6634c1a7a80_41014680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d472c00dbc4e0fb75bd39bb23c27aa56a4b24d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\loginError.tpl',
      1 => 1571185474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da6634c1a7a80_41014680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container margen contenedor">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <form action="login" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                    <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                </div>
                <a href="registrarse"><button type="button" class="btn btn-secondary btnSingup">registrate</button></a>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
