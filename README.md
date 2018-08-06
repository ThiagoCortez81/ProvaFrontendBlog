
# Introdução

### Requisitos:

- Docker (CE): https://docs.docker.com/install/linux/docker-ce/ubuntu/
- Docker Compose: https://docs.docker.com/compose/install/
- git
- Um bom editor de código


Após clonar o repositório, execute o comando: `docker-compose up`

Observações:
- Quando o **docker-composer** terminar de inicializar os containers, a aplicação estará disponível em: http://localhost:3000.
- Utilizamos o grunt para auxiliar nas *tasks* de desenvolvimento. As tasks existentes são:
    - Browserify:
    - Uglify:
    - Sass -> Css:
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

### Rotas
### Middlewares

## Html

### Layout
### Templates
### Partials

## CSS

## JS