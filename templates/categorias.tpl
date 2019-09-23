{include 'templates/header.tpl'}
<div class="container"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table">
                    {foreach $categorias as $categoria}
                        <tr>
                            <td> {$categoria->tipo}</td>
                            <td> {$categoria->desc}</td>
                            <td> <a href="http://localhost/tpEspecial/categoria/{$categoria->id_categorias_fk}"><input class="verCategoria" type="button" value="Ver Categoria"></a></td>
                        </tr>
                    {/foreach}
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h2>Ingrese Categoria</h2>
            <form action="categoria/agregar" method="post">
                <h4>tipo</h4><input class="form-control" type="text" name="tipo">
                <h4>desc</h4><input class="form-control" type="text" name="desc">
                <button class="btn btn-outline-success" type="submit">agregar</button>
            </form>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}