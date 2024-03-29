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
        
            <div class="col-xs-12 col-md-9">
                <div>
                    <img src="{$producto->imagen}" alt="">
                    {if $userAdmin === true}
                    <a href="eliminarImagen/{$producto->id}"><button class="btn btn-danger" type="button">Eliminar Imagen</button></a>
                    {/if}
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
            {include 'templates/vue/comentarios.tpl'}
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
{include 'templates/footer.tpl'}