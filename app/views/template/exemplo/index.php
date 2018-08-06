<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/docs">Docs</a>
        </li>
        <li class="breadcrumb-item active">Vue</li>
    </ol>
</nav>
<section>
    <div class="container-fluid">
        <h3 class="text-center">Exemplo de uso do Vue</h3>
        <hr>
        <p class="text-center"><small>Criação de uma lista de thumbnails usando <code>v-for</code>.<br> Para mais informações, consulte a <a href="https://vuejs.org/v2/guide/#What-is-Vue-js" target="_blank">documentação</a> do Vue</small></p>
    </div>

    <div class="container-fluid">
        <h3 class="text-center">Resultado </h3>
        <hr>
        <div id="exampleApp">

            <h3>{{trips.code}}</h3>
            <p>{{trips.message}}</p>
            <pre>{{trips.data}}</pre>

            <!-- <div class="col-md-3 col-sm-6 col-xs-12" v-for="trip in trips">
                <div class="thumbnail">
                    <img v-bind:src="trip.imgSrc" v-bind:alt="trip.imgAlt">
                    <div class="caption">
                        <h3>{{trip.title}}</h3>
                        <p>{{trip.comment}}</p>
                        <p>
                            <button class="btn btn-danger" role="button" v-on:click="removeTrip(trip.id)">Remover</button>
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
