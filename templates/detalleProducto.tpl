{include 'templates/headerJS.tpl'}
<div class="container-fluid margen contenedor">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div>
                <img class="ofertaHotweek" src="img/ofertaHotweek.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <section id="section-comentarios">
            <div class="col-xs-12 col-md-9">
                <div>
                    <img src="{$producto->imagen}" alt="">
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Detalle del Producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {$producto->nombre}</td>
                            <td> {$producto->precio}</td>
                            <td> {$producto->cantidad}</td>
                            <td> {$producto->categoria}</td>
                            {if $producto->cantidad > 0}
                                <td class="text-success">Producto Disponible</td>
                            {/if}
                            {if $producto->cantidad <= 0}
                                <td class="text-warning">Producto No Disponible</td>
                            {/if}
                        </tr>
                    </tbody>
                </table>
                {if $userLogged === true}
                    <div>
                        {literal}
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
                            {/literal}
                    </div>  

                    <div class="comentarios">       
                    </div>
                    <section id="crearComentario">
                        <input type="hidden" id="idProducto" value={$producto->id}>
                        <input type="hidden"  id="idUsuario" value={$idUser}>
                        <textarea name="textarea" rows="2" cols="100" id="comentario"></textarea>
                        <button type="submit" id="btnAgregarComentario">Agregar Comentario</button>
                    <section>
                {/if}
            </div>
            <div class="col-md-3 ocultar">
                <section class="publicidadFernet">
                    <h3 class="bg-warning">No te Pierdas esta super ¡¡Oferta!!</h3>
                    <img src="img/publicidadOferta.jpg" alt="Publicidad Oferta">
                    <h3 class="bg-warning">A tan solo $350 </h3>
                </section>
            </div> 
        </div>
    </section>
</div>
{include 'templates/footer.tpl'}