Vue.component('full-head', {
    props: ['tags', 'colors'],
    template: '<div class="jumbotron text-white">\n' +
        '        <div class="container">\n' +
        '            <div class="row">\n' +
        '                <div class="col-md-6 padding-0">\n' +
        '                    <input type="text" placeholder="Buscar..." class="top-search-input">\n' +
        '                    <!-- social icons -->\n' +
        '                    <br>\n' +
        '                    <img src="/img/social-media/facebook-outlined-icon.png" class="social-icons" alt="">\n' +
        '                    <img src="/img/social-media/linkedin-outlined-icon.png" class="social-icons" alt="">\n' +
        '                    <img src="/img/social-media/twitter-outlined-icon.png" class="social-icons" alt="">\n' +
        '                    <!-- end -->\n' +
        '                </div>\n' +
        '                <div class="col-md-6">\n' +
        '                       <!-- menu -->' +
        '                       <button :class="\'btn badge text-white badge-size botao-\'+index" v-for="(tag, index) in tags">#{{ tag }}</button>' +
        '                       <!-- fim -->' +
        '                   </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        <div class="container main-jumbotron-content">\n' +
        '            <h1 class="fontStem"><b>Blog</b></h1>\n' +
        '            <h5 class="col-sm-5 padding-0">Cras tincidunt quis erat in semper. Nunc pellentesque dui nisi.</h5>\n' +
        '        </div>' +
        '        <div id="menu_mob">' +
        '           <!-- menu -->' +
        '           <button :class="\'btn >mobile_badge badge text-white badge-size botao-\'+index" v-for="(tag, index) in tags">#{{ tag }}</button>' +
        '           <!-- fim -->' +
        '        </div>\n' +
        '    </div>'
});
Vue.component('blog-post-big', {
    props: ['posts'],
    template: '<div class="container sombra-esquerda recuo-post-destaque background-white">\n' +
        '        <section class="row margin-left-0">\n' +
        '            <div class="col-md-4 padding-0 margin-bottom-10">\n' +
        '                <h5 class="margin-top-10">\n' +
        '                    <small><b>{{ posts[0].tag }}</b></small>\n' +
        '                </h5>\n' +
        '                <h1 class="text-purple"><b>{{ posts[0].title }}</b></h1>\n' +
        '                <br>\n' +
        '                <h5 class="text-light-gray">\n' +
        '                    {{ posts[0].text }}\n' +
        '                </h5>\n' +
        '                <a href="#" class="btn btn-sm btn-ler-mais margin-top-10">LER MAIS</a>\n' +
        '            </div>\n' +
        '            <div class="col-md-8 padding-0 big-image-post-blog">\n' +
        '            </div>\n' +
        '        </section>\n' +
        '    </div>'
});
Vue.component('blog-post', {
    props: ['posts'],
    template: '<div class="container background-white padding-left-0">\n' +
        '            <section class="row margin-left-0">\n' +
        '                <div class="col-md-4 padding-0 sombra-esquerda" v-for="(value, index) in posts">\n' +
        '                    <img src="https://picsum.photos/380/150/?random" class="w-100" alt="">\n' +
        '                    <div class="pl-15">\n' +
        '                        <h5 class="margin-top-10">\n' +
        '                            <small><b>{{value.tag}}</b></small>\n' +
        '                        </h5>\n' +
        '                        <h1 class="text-purple"><b>{{value.title}}</b></h1>\n' +
        '                        <h5 class="text-light-gray">\n' +
        '                            {{value.text}}\n' +
        '                        </h5>\n' +
        '                        <a href="#" class="btn btn-sm btn-ler-mais margin-top-10 margin-bottom-20">LER MAIS</a>\n' +
        '                        <br>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </section>\n' +
        '        </div>'
});
Vue.component('blog-post-end', {
    props: ['posts'],
    template: '<div class="container background-white padding-left-0">\n' +
        '            <section class="row margin-left-0">\n' +
        '                <div class="col-md-6 padding-0 sombra-esquerda" v-for="(value, index) in posts">\n' +
        '                    <img src="https://picsum.photos/563/300/?random" class="w-100" alt="">\n' +
        '                    <div class="pl-15">\n' +
        '                        <h5 class="margin-top-10">\n' +
        '                            <small><b>{{value.tag}}</b></small>\n' +
        '                        </h5>\n' +
        '                        <h1 class="text-purple"><b>{{value.title}}</b></h1>\n' +
        '                        <h5 class="text-light-gray">\n' +
        '                            {{value.text}}' +
        '                        </h5>\n' +
        '                        <a href="#" class="btn btn-sm btn-ler-mais margin-top-10 margin-bottom-20">LER MAIS</a>\n' +
        '                        <br>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </section>\n' +
        '        </div>'
});
Vue.component('conheca', {
    template: '<div class="container background-white padding-left-0 text-center">\n' +
        '            <h2 class="text-purple"><b>Conheça nossa plataforma, gratuitamente.</b></h2>\n' +
        '            <br><br>\n' +
        '            <div class="botoes-conheca-footer">\n' +
        '                <button class="btn btn-outline-purple">INVESTIMENTOS</button>\n' +
        '                <button class="btn btn-outline-purple">FINANCIAMENTO</button>\n' +
        '            </div>\n' +
        '            <a href="#" data-element="#menu_mob" id="menu_mob_hack">' +
        '                <object class="icon-menu" data="/img/menu-button.svg" type="image/svg+xml"></object>' +
        '            </a>' +
        '      </div>'
});

// Criar o Vue App da página
new Vue({
    el: '#app',
    data: {
        tags: [],
        posts: [],
        posts_middle: [],
        posts_end: [],
        colors: ['#FA0']
    },
    created() {
        API.get('/prova').done((res, res2, res3, res4) => {
            switch (res.code) {
                case 200:
                    this.tags = res.data.tags;
                    this.posts = res.data.posts;
                    this.posts_middle = res.data.posts.slice(1, 4);
                    this.posts_end = res.data.posts.slice(4, 8);
                    break;
                default:
                    throw 'Codigo não esperado! ' + res.code
            }
        });
    }
});

$(function () {
    $("#menu_mob_hack").click(function (e) {
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});