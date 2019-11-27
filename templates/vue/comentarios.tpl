{if $userLogged === true}
    {literal}
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
                            {/literal}
                            {if $userAdmin === true}
                            {literal}
                                <button @click="(event)=>{borrarComentario(event, comentario.id)}">Eliminar</button>
                            {/literal}
                            {/if}
                            {literal}
                        </a>
                    </ul>
                </div>
        
        {/literal}
        <input type="hidden" id="idProducto" value={$producto->id}>
        <input type="hidden"  id="idUsuario" value={$idUser}>
        {literal}
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
    {/literal}
{/if}
