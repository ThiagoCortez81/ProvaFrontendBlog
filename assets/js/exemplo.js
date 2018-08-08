Vue.component('blog-post', {
    props: ['post'],
    template: '<div class="blog-post">' +
            '<img class="blog-post-img" v-bind:src="post.img" v-bind:alt="post.title">' +
            '<div class="blog-post-body">' +
                '<p><small class="blog-post-tag">{{post.tag}}</small></p>' +   
                '<h5 class="blog-post-title">{{post.title}}</h5>' +
                '<p class="blog-post-text">{{post.text}}</p>' +
                '<a href="#" class="btn btn-primary">LER MAIS</a>' +
            '</div>' +
        '</div>'
  })

var vueExampleApp = new Vue({
    el: "#exampleApp",
    data: {
        posts: []
    },
    methods: {
        removeTrip: function (tripId) {
            if (confirm('Tem certeza que deseja remover a viagem ' + tripId)) {
                var index = this.trips.findIndex(t => t.id == tripId);

                if (index > -1) {
                    this.trips.splice(index, 1);
                }
            }
        }
    },
    created() { // vue lifecycle hook
        $.get('/exemplo', null, null, 'json').then(response => {
            this.posts = response.data.posts;
        });
    }
});