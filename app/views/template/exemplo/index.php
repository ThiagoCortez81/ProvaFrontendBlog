<div id="exampleApp" class="posts-gallery">    
    <div class="container">
        <div class="row">

            <div class="col-lg-4" v-for="post in posts">

                <blog-post v-bind:post="post" v-bind:key="post.id"></blog-post>    

            </div>

        </div>
    </div>
</div>

