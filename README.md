# Configuração mínima para novos projetos em PHP

## Instalar o Docker e Docker Compose

- Docker (CE): https://docs.docker.com/install/linux/docker-ce/ubuntu/
- Docker Compose: https://docs.docker.com/compose/install/

## Execução com o docker

**IMPORTANTE**: Ao utilizar esse método, remova as pastas `vendor` e `node_modules`, `public/{img,css,js,pjs,fonts}` e os arquivos `composer.lock` e `package-lock.json` se existirem.

- Iniciar o ambiente de desenvolvimento: `docker-compose up`

**Importante**: Como o BrowserSync é executado dentro de um container, o navegador não abrirá sozinho, é necessário clicar na url indicada (interna ou externa)


### Informações Gerais:

- Os containers **phpstart-node**, **phpstart-webserver**, **phpstart** executam enquanto o comando `docker-compose up` estiver ativo ou indefinidamente caso estejam sendo executados como *daemon*. É possível acessá-los para execução de comandos adicionais. Ex:

```sh
# acessa o container phpstart-node
docker exec -it phpstart-node sh
# rodar comandos dentro do container
npm i vue --save
```

```sh
# atualizar dependências do php
docker exec -it phpstart sh
# instalar uma nova dependência
composer require pimple/pimple
# atualizar as dependências
composer update
```

**Importante**: Para evitar problemas de caching em navegadores, durante o desenvolvimento, recomenda-se desativar o cache na janela de debug (rede) do navegador.
