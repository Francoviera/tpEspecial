{literal}
<section id="section-comentarios">

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

       
        
</section>
{/literal}
