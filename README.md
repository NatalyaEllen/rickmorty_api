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

## 1. Clonar repositório

```bash id="5fcjgn"
git clone https://github.com/NatalyaEllen/rickmorty_api.git
```

---

## 2. Entrar na pasta

```bash id="x25n3y"
cd rickmorty_api
```

---

## 3. Instalar dependências PHP

```bash id="jlwm2e"
composer install
```

---

## 4. Instalar dependências frontend

```bash id="phtjag"
npm install
```

---

## 5. Copiar arquivo .env

```bash id="jlwm1k"
copy .env.example .env
```

---

## 6. Gerar chave Laravel

```bash id="c1u7zm"
php artisan key:generate
```

---

# Executar Projeto

## Terminal 1 — Vite

```bash id="z7jjkm"
npm run dev
```

---

## Terminal 2 — Laravel

```bash id="jlwmrm"
php artisan serve
```

---

# Acessar no navegador

## Página Web

```txt id="jlwm1q"
http://127.0.0.1:8000
```

---

## API JSON

```txt id="n4hyk7"
http://127.0.0.1:8000/api/characters
```

---

# Conceitos Aplicados

* API REST
* Consumo de API externa
* JSON
* Laravel MVC
* Rotas Web e API
* Blade
* Vite
* CSS
* Frontend Web
* HTTP Client

---

# API Externa Utilizada

Rick and Morty API:

https://rickandmortyapi.com/
