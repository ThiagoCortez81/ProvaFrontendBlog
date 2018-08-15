<div class="container">

    <h1>Exemplo de componente criado com Vue:</h1>

    <div id="exampleApp" class="posts-gallery">
        <blog-post v-for="post in posts" v-bind:post="post" v-bind:key="post.id"></blog-post>
    </div>

    <h1>Exemplo de componente criado com JQuery e module.exports:</h1>

    <div id="extractTable"></div>

</div>



