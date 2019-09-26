{include 'templates/headerProductos.tpl'}
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
                        {foreach $inventario as $producto}
                            <tr>
                                <td> {$producto->nombre}</td>
                                <td> {$producto->precio}</td>
                                <td> {$producto->cantidad}</td>
                                <td> {$producto->categoria}</td>
                                <td> 
                                    <button type="button" class="btnEdit" data-nombre="{$producto->nombre}" data-precio="{$producto->precio}" data-cantidad="{$producto->cantidad}" data-categoria="{$producto->categoria}" data-id="{$producto->id}">Editar</button>
                                    <a href="eliminar/{$producto->id}"><button type="button">Eliminar</button></a>
                                </td>
                            </tr>
                        {/foreach}
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
            
            {* <div>
                <h3>Total Final</h3> 
                <div class="input-group-text total"
                            {$valor= 0}
                        {foreach $productos as $producto}
                            {$valor += $producto->total}
                        {/foreach}
                        <h2>valor</h2>
                </div>
            </div>
            <div class="respuesta"></div>
        </div>
        <div class="col-md-6 col-xs-12">
            <table>
                <thead>
                    <tr>
                        <th><i class="tamañoLogo fas fa-cart-arrow-down"></i></th>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>total</th>
                    </tr>
                </thead>
                <tbody class="tablaDeProductos table">
                        foreach $productos as $producto
                            <tr>
                                <td> producto->cantidad</td>
                                <td> producto->nombre</td>
                                <td> producto->precio_fk</td>
                                <td> producto->total</td>
                            </tr> 
                         /foreach 
                         esto trae todos los productos de compras que ingreso el usuario, una idea para hacer mas adelante 
                </tbody> *}
            </table>
        </div>
    </div>  
</div>
{include 'templates/footer.tpl'}