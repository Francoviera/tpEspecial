<?php
/* Smarty version 3.1.33, created on 2019-11-27 06:45:39
  from 'C:\xampp\htdocs\tpEspecial\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde0d83230c35_77004646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e357799b973a522d01e36718eb2e410aa1e3cdd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpEspecial\\templates\\vue\\comentarios.tpl',
      1 => 1574833536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde0d83230c35_77004646 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['userLogged']->value === true) {?>
    
    <section id="section-comentarios">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">{{ title }}</h4>
                        <button type="button" class="btnRefrescar">Refrescar</button>
                        <button type="button" id="btnObtenerComentariosDesc" @click="(event)=>{getComentariosDesc(event)}">Ordenar Comentarios desde el mejor</button>
                        <button type="button" id="btnObtenerComentariosAsc" @click="(event)=>{getComentariosAsc(event)}">Ordenar Comentarios desde el peor</button>

                    </div>
                    <div v-if="loading" class="card-body">
                        Cargando...
                    </div>

                    <ul v-if="!loading" class="list-group list-group-flush comentarios">
                        <li>Promedio: {{promedio}}</li>
                        <a v-for="comentario in comentarios" class="list-group-item list-group-item-action"> 
                            <div class="card-footer">
                                <li>Puntaje: {{comentario.puntaje}}</li>
                            </div>
                            {{ comentario.texto }}
                            
                            <?php if ($_smarty_tpl->tpl_vars['userAdmin']->value === true) {?>
                            
                                <button @click="(event)=>{borrarComentario(event, comentario.id)}">Eliminar</button>
                            
                            <?php }?>
                            
                        </a>
                    </ul>
                </div>
        
        
        <input type="hidden" id="idProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
>
        <input type="hidden"  id="idUsuario" value=<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
>
        
        <textarea name="textarea" rows="2" cols="100" id="comentario"></textarea>
        <label>Puntaje</label>
        <select class="custom-select" id="puntajeComentario">
            <option selected value="0"> Seleccione un valor </option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit" id="btnAgregarComentario"  v-on:click="agregarComentario">Agregar Comentario</button>
    
    </section> 
    
<?php }
}
}
