Vue.component('blog-post', {
    props: ['post'],
    template: `
        <div class="blog-post">
            <img class="blog-post-img" v-bind:src="post.img" v-bind:alt="post.title">
            <div class="blog-post-body">
                <p><small class="blog-post-tag">{{post.tag}}</small></p>
                <h5 class="blog-post-title">{{post.title}}</h5>
                <p class="blog-post-text">{{post.text}}</p>
                <a href="#" class="btn btn-primary">LER MAIS</a>
            </div>
        </div>
    `
})