
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

## Rotas


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
O sistema utiliza o sass para gerar as folhas de estilo. Os arquivos podem ser encontrados na pasta `assets/sass`. Dentro dessa pasta, a pasta `theme` contém os arquivos que compõe o tema global do sistema. 

## JS
Na pasta `assets/js` encontram-se os arquivos javascript utilizados no sistema. A pasta `lib` contém bibliotecas reutilizáveis que devem ser incluídas nos locais onde forem necessárias.