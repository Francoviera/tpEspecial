{include 'templates/header.tpl'}
<div class="container-fluid margen contenedor">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Usuarios</th>
                    <th>Admin</th>
                    <th>Otorgar Permisos</th>
                    <th>Eliminar Usuario</th>
                </tr>
            </thead>
            <tbody>
                {foreach $usuarios as $usuario}
                    <tr>
                        <td>{$usuario->email}</td>
                        <td>
                            {if $usuario->admin === "1"}
                                si
                            {/if}
                            {if $usuario->admin === "0"}
                                no
                            {/if}
                        </td>
                        <td> 
                            {if $usuario->admin === "1"}
                                <a href="removerAdmin/{$usuario->id}"><button type="button" class="btn btn-warning">Remover Admin</button></a>
                            {/if}
                            {if $usuario->admin === "0"}
                                <a href="agregarAdmin/{$usuario->id}"><button type="button" class="btn btn-success">Agregar Admin</button></a>
                            {/if}
                        </td>
                        <td> 
                            <a href="eliminarUsuario/{$usuario->id}"><button type="button" class="btn btn-danger">Eliminar</button></a> 
                        </td>
                    </tr>              
                {/foreach}  
            </tbody>
        <table>
    </div>
</div>
{include 'templates/footer.tpl'}