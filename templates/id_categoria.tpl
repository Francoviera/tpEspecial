{include 'templates/header.tpl'}
<div class="container"> 
    <h2>Categoria {$categoria->tipo}</h2>
    <table class="table">
                <thead>
                    <tr>
                        <th>Productos Disponibles</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                        {foreach $productos as $producto}
                            <tr>
                                <td> {$producto->nombre}</td>
                                <td> {$producto->precio}</td>
                                <td> {$producto->cantidad}</td>
                            </tr>
                        {/foreach}
                </tbody>
            </table>

</div>
{include 'templates/footer.tpl'}