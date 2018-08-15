
# Introdução

### Requisitos:

- Docker (CE): https://docs.docker.com/install/linux/docker-ce/ubuntu/
- Docker Compose: https://docs.docker.com/compose/install/
- git
- Um bom editor de código
- Criar o arquivo `environment.js` na **raiz do projeto**

```js
const environment = {
    apiUrl: ''
};

export {
    environment
};
```
- execute o comando: `docker-compose up` na **raiz do projeto**

Observações:
- Quando o **docker-compose** terminar de inicializar os containers, a aplicação estará disponível em: http://localhost:3000.
- Utilizamos o grunt para auxiliar nas *tasks* de desenvolvimento. As tasks existentes são:
    - Browserify:
    - Uglify:
    - Sass transform, minification:
    - Copy:
    - Watch:
    - BrowserSync:


### Informações Gerais:

Caso necessite instalar dependências, via **composer** ou **npm**, utilize os comandos abaixo:

- NPM
```sh
# acessa o container phpstart-node
docker exec -it phpstart-node sh
# rodar comandos dentro do container
# npm i vue --save
```

- Composer
```sh
# atualizar dependências do php
docker exec -it phpstart sh
# composer require pimple/pimple
# composer update
```

**Importante**: Para evitar problemas de caching em navegadores, durante o desenvolvimento, recomenda-se desativar o cache na janela de debug (rede) do navegador.

# Informações sobre o desenvolvimento

## Estrutura
O repositório possui a estrutura abaixo. Algumas pastas e arquivos que não são importantes para esse texto foram omitidos por clareza

```md
├── app/
│   ├── config/
│   │   ├── json/ : Arquivos json utilizados localmente no desenvolvimento
│   │   ├── json-mapper.php : Associa arquivos json às respectivas chamadas de API
│   │   └── template-routes.php : Configuração das rotas
│   ├── src/
│   └── views/ : Contém os layouts, templates e partials
├── assets/ : Arquivos que serão processadose copiados para a pasta public automaticamente pelo sistema
│   ├── fonts/
│   ├── img/
│   ├── js/
│   └── sass/
├── public/ : Arquivos acessíveis pela aplicação.
├── .babelrc
├── .dockerignore
├── .editorconfig
├── .gitignore
├── composer.json
├── composer.lock
├── docker-compose.yml
├── environment.js
├── gruntfile.js
├── package-lock.json
├── package.json
└── README.md
```

## Rotas
Para criar uma nova rota:
1. Criar o template na pasta `app/views/template`.
2. Se necessário, criar o javascript na pasta `assets/js`.
3. Se necessário, criar a folha de estilo na pasta `assets/sass`.
4. Adicionar uma nova entrada no arquivo `app/config/template-routes.php` conforme o exemplo:

```
    [
        'pattern' => '/exemplo',
        'callback' => function () {
            $layout = new View\Layout();
            $layout
                ->addStylesheet('/css/exemplo')
                ->addScript('/js/exemplo')
                ->render('exemplo/index');
        }
    ],
```

## Html
Cada vez que um usuário acessa uma rota, o sistema utiliza diversos arquivos para montar a estrutura da página. Esses arquivos encontram-se organizados em pastas específicas conforme sua função na estrutura da página.

### Layout
Os arquivos de layout encontram-se na pasta `app/views/partail/layout`.

O layout é o nível mais básico da estrutura da página: um arquivo de layout contém as tags <doctype>, <html>, <head> e <body>. É nele que são definidas as meta informações da página e são carregados os scripts e folhas de estilo, além de códigos de analytics, etc. Esse arquivo também define o layout básico da página: menu para navegação, rodapé e posição do conteúdo da página. Ou seja, **todo o código html mais básico que se repete ao longo de várias páginas é colocado em um arquivo de layout**.

Quando o sistema possuir conjuntos de páginas com estrutura parecida deve ser usado um arquivo de layout para cada um desses conjuntos. Por exemplo, esse projeto inicial contém três layouts: `layout.php`, para ser usado nas páginas comuns, `layout-error.php`, para ser usado nas páginas de erro e `layout-docs.php`, usado nas páginas de documentação. Caso seja necessário criar um "portal do administrador", que possui estrutura diferente das páginas comuns (menu de navegação diferente, carrega diferentes scripts ou folhas de estilo, etc.) poderia ser criado um arquivo `layout-admin.php`.

### Templates
Os arquivos de template encontram-se na pasta `app/views/template`.

O template é a estrutura **de uma página específica**. Configurando corretamente as rotas, o sistema automaticamente insere o template dentro do layout. Cada página do sistema deve ter seu próprio template, mas templates de páginas relacionadas podem ser organizados em pastas. Por exemplo, os templates de todas as páginas de documentação encontram-se na pasta `app/views/template/docs`.

### Partials
Os arquivos de partials encontram-se na pasta `app/views/partial`.

A função dos partials é definir **trechos pequenos de código html reutilizável**. Por exemplo, um breadcrumb é um elemento que provavelmente aparecerá em diversas páginas. O html do breadcrumb pode ser colocado em um partial e, quando quisermos inserir um breadcrumb, ao invés de copiar e colar o código, podemos usar o comando php `require` para inserir o conteúdo do arquivo naquele local.

## CSS
O projeto utiliza o preprocessador sass para gerar as folhas de estilo. Os arquivos podem ser encontrados na pasta `assets/sass`. Folhas de estilo de páginas específicas devem ser criados diretamente dentro desta pasta. Já a pasta `theme` contém as folhas de estilo que compõe o tema da aplicação, disponível para todas as páginas. A estrutura é a seguinte:

- `_type.scss`: Classes relacionadas a fontes e tipografia;
- `_variables.scss`: Definição das variáveis do Bootstrap e também dos componentes da aplicação;
- `main.scss`: Aquivo principal que inclui as fontes, os arquivos do Bootstrap e também nossos componentes customizados. Esse arquivo é incluído no layout, fazendo com que o Bootstrap e o tema estejam disponíveis em todas as páginas;
- `partials/`: Aqui devem ser criados os arquivos scss referentes aos componentes da aplicação. Esses arquivos devem ser adicionados no `main.scss` para serem incluídos no projeto.

## JS
Na pasta `assets/js` encontram-se os arquivos javascript utilizados no sistema. Arquivos de páginas específicas são colocados na raiz da pasta. Caso um código deva ser reutilizado na aplicação toda (como o código de um componente, por exemplo), colocá-lo na pasta `lib` e incluí-lo no arquivo `app.js`.

### API Service
O projeto disponibiliza um serviço para fazer chamadas de API que retornam dados no formato JSON. Para acessá-lo, utilize o objeto API e chame um de seus métodos: `get()`, `post()`, `put()` e `delete()` que fazem, cada um, a respectiva requisição, e `request()`, que aceita um parâmetro method indicando o tipo de requisição. Esse serviço foi implementado de forma a chamar a API real caso a aplicação esteja rodando em produção, ou retornar um arquivo json de teste caso a aplicação esteja rodando localmente.

**Exemplo:** O código abaixo faz uma requisição GET para a rota `/teste`. Ao completar a requisição é recebido um json. Primeiro testamos o código de retorno para determinar se a requisição obteve sucesso e então preenchemos um objeto com os dados recebidos. Caso o código não seja de sucesso, lançamos um erro.

```
API.get('/teste').done((res, res2, res3, res4) => {
    switch(res.code) {
        case 200:
            this.posts = res.data.posts;
            break;
        default:
            throw 'Codigo não esperado! ' + res.code
    }
});
```

# Prova de Front-end

Faça um fork e clone clone esse projeto, crie um branch (pode ser com o seu nome). Siga as instruções disponíveis no [README](https://github.com/incluirtecnologia/PhpStartWebApp/blob/master/README.md) para instalar as dependências e executar a aplicação.

## A Prova!
A idéia da prova é implementar o layout proposto nos arquivos **prova.png**, **prova_320.png** e **prova_320_menu.png**.

1. Leia as informações disponíveis na wiki para aprender como trabalhar com o projeto;
2. Crie uma nova rota para o seu layout;
3. Os dados devem ser carregados a partir do arquivo **prova.json**, utilizando o serviço de API que disponibilizamos. Para isso, fazer uma requisição `get()` para o endereço `/prova`;
4. Se esforce para criar componentes que podem ser reutilizados em outras páginas. Use os exemplos contidos no projeto para se inspirar. Eles podem ser visualizados na rota `/exemplo`;
5. Não se esqueça de implementar a versão mobile.

### Regras
- Nosso projeto utiliza Bootstrap 4, Sass, JQuery e Vue. Fique a vontade para utilizar esses recursos. Bootstrap e Sass são obrigatórios. Usar o Vue é desejável, mas não obrigatório;
- Evite reinventar a roda: quando possível utilize componentes disponíveis no Bootstrap ao invés de criar um do zero;
- Não editar o arquivo **prova.json**, a não ser que tenha uma boa justificativa. Nesse caso, informe-a em um comentário no código;
- Para as imagens, pode adicionar algumas imagens fake ao projeto ou usar um [lorem picsum](https://picsum.photos/) da vida;
- Lembre-se: a sua implementação não precisa ser perfeita. Dê o seu melhor e crie o layout da melhor forma que conseguir, mesmo que alguns elementos fiquem faltando. Nós vamos avaliar como você trabalhou.

### Avaliação
Avaliaremos os seguintes pontos no seu trabalho:

- Resultado funcional
- Resultado visual
- Manutenabilidade do código
- Clareza e limpeza do código
- Semântica HTML
- Lógica de programação
