// Importar os componentes usados na página
import { BlogPostComponent } from './lib/BlogPostComponent';
ExtractTableComponent = require('./lib/ExtractTableComponent');

// Criar o Vue App da página
var vueExampleApp = new Vue({
    el: "#exampleApp",
    data: {
        posts: []
    },
    created() { // vue lifecycle hook
        API.get('/exemplo1').done((res, res2, res3, res4) => {
            switch(res.code) {
                case 200:
                    this.posts = res.data.posts;
                    break;
                default:
                    throw 'Codigo não esperado! ' + res.code
            }
        });
    }
});

// Criar o componente extract-table, buscar o json e preenchê-lo
ExtractTableComponent.init("#extractTable");
API.get('/exemplo2').done((res, res2, res3, res4) => {
    switch(res.code) {
        case 200:
            ExtractTableComponent.fillTable(res.data);
            break;
        default:
            throw 'Codigo não esperado! ' + res.code
    }
});