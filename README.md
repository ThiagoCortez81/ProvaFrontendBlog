
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
