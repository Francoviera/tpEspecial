<?php
/* Smarty version 3.1.33, created on 2019-11-25 22:42:46
  from 'C:\xampp\htdocs\tpEspecial\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc4ad67a5601_36025320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e357799b973a522d01e36718eb2e410aa1e3cdd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\vue\\comentarios.tpl',
      1 => 1574718162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc4ad67a5601_36025320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="section-comentarios">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ title }}</h4>
                <button class="btnRefrescar" type="button" class="btn btn-primary btn-sm" >Refresh</button>
            </div>
            <div v-if="loading" class="card-body">
                Cargando...
            </div>

            <ul v-if="!loading" class="list-group list-group-flush comentarios">
                <a v-for="comentario in comentarios" v-bind:href="'comentario/' + comentario.id" class="list-group-item list-group-item-action"> 
                    {{ comentario.texto }}
                </a>
            </ul>

            
        </div>

       
        
</section>

<?php }
}
