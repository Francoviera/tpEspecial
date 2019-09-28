{include 'templates/headerJS.tpl'}
<div class="container margen contenedor">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="divLogin">
                <form action="logIn" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                        <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                    </div>
                    <button type="button" class="btn btn-secondary btnSingup">registrate</button>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="divSingup d-none">
                <form action="singup" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="newEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introdusca el Email">
                        <small id="emailHelp" class="form-text text-muted">Nosotros nunca vamos a compartir el email a otra persona.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" name="newPassword" id="exampleInputPassword1" placeholder="Introdusca su Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">registrarme</button>
                </form>
            </div>
        </div>
    </div>
</div>
{include 'templates/footer.tpl'}