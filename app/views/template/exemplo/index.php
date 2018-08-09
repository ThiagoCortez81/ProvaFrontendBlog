<div class="container">

    <h1>Exemplo de componente criado com Vue:</h1>

    <div id="exampleApp" class="posts-gallery">    
        <div class="row">
            <div class="col-lg-4" v-for="post in posts">
                <blog-post v-bind:post="post" v-bind:key="post.id"></blog-post>    
            </div>
        </div>
    </div>

    <h1>Exemplo de componente criado com JQuery e module.exports:</h1>

    <div id="extractTable"></div>

</div>



