# Rick and Morty API - Laravel

## Descrição do Projeto

Este projeto foi desenvolvido utilizando Laravel Framework com o objetivo de consumir a API pública Rick and Morty e exibir os personagens tanto em formato JSON quanto em uma interface Web estilizada.

A aplicação demonstra consumo de APIs externas, uso de rotas API e Web, integração frontend com Vite e organização MVC do Laravel.

---

# Tecnologias Utilizadas

* PHP 8
* Laravel
* Composer
* Vite
* CSS
* Laragon
* VS Code

---

# Funcionalidades

* Consumo da API pública Rick and Morty
* Retorno JSON via API REST
* Interface Web estilizada
* Cards com personagens
* Exibição de:

  * imagem
  * nome
  * status
  * espécie

---

# Rotas da API

## Characters API

```txt id="jlwmu8"
GET /api/characters
```

Retorna os personagens em formato JSON.

---

# Rotas Web

## Página principal

```txt id="zjlwmq"
GET /
```

Exibe os personagens em cards estilizados.

---

# Como executar o projeto

Pré-requisitos

Instalar:

PHP 8
Composer
Node.js (pois foi utilizado o vite, uma ferramenta de desenvolvimento frontend que o Laravel moderno usa para carregar e processar arquivos de:
CSS
JavaScript
Tailwind CSS
imagens e outros assets
Laragon
VS Code)

# Como acessar

## Iniciar o Laragon

# Como acessar

## Iniciar o Laragon

Abrir o Laragon e clicar em:

Start All

---

## Executar o projeto

Abrir um terminal na pasta do projeto:

```bash
php artisan serve --port=8001
```

---

## Página Web

Acessar:

http://127.0.0.1:8001

---

## API JSON

Acessar:

http://127.0.0.1:8001/api/characters

---

## Observação

Caso utilize a interface estilizada com Vite:

```bash
npm install
npm run dev
```

O Vite é necessário apenas para carregar o CSS da interface Web.

