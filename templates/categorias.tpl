{include 'templates/headerJS.tpl'}
<div class="container"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table">
                    {foreach $categorias as $categoria}
                        <tr>
                            <td>{$categoria->tipo}</td>
                            <td>{$categoria->descripcion}</td>
                            <td><a href="categoria/{$categoria->id}"><input class="verCategoria" type="button" value="Ver Categoria"></a></td>
                            <td><button type="button" class="btnEdit" data-tipo="{$categoria->tipo}" data-desc="{$categoria->descripcion}" data-id="{$categoria->id}">Editar</button></td>
                            <td><a href="eliminarCategoria/{$categoria->id}"><button type="button">Eliminar</button></a></td>
                        </tr>
                    {/foreach}
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <button class="btn btn-outline-primary btnAgregar" type="submit">Agregar Categoria</button>
            <div class="formAgregar">
                <form action="agregarCategoria" method="post">
                    <h2>Ingrese Categoria</h2>
                    <h4>tipo</h4><input class="form-control" type="text" name="tipo">
                    <h4>desc</h4><input class="form-control" type="text" name="desc">
                    <button class="btn btn-outline-success" type="submit">agregar</button>
                </form>
            </div>

            <div class="formEditar d-none">
                <form action="editarCategoria" method="post">
                    <h2>Editar Categoria</h2>
                    <h4>tipo</h4><input class="form-control valueTipo" type="text" name="tipo">
                    <h4>desc</h4><input class="form-control valueDesc" type="text" name="desc">
                    <h4>id-categoria</h4><input class="form-control valueId" type="number" name="id">
                    <button class="btn btn-outline-success" type="submit">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}