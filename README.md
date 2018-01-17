<h1 align="center">Laravel Locators</h1>

<div align="center">
  <strong>Estrutura de requisições para desacoplar Controllers e Rotas para Laravel 5.5.*</strong>
</div>
<div align="center">
  
</div>

<br />

<div align="center">
  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

</div>



## Pré-requisitos
- [PHP >= 7.0.0](#)
- [Laravel >= 5.5.0](#)


## Instalação

1 - Instalação via composer:
```js
composer require daniel2mind/laravel-locators
```
<br />


2 - Execute:
```js
composer dump-autoload
```
<br />

3 - Realize o comando abaixo, utilizando "--force" para que o arquivo RouteServiceProvider seja atualizado e os demais sejam publicados:
```js
php artisan vendor:publish --force
```
<br />




## Pronto! 
Para testar, basta inserir as rotas de teste em routes/web.php e routes/api.php, conforme segue abaixo:
```js
Route::get('locator', 'WebLocator@example'); //inserir em web.php
Route::get('locator', 'ApiLocator@example'); //inserir em api.php
```

Dessa forma, ao acessar a rota da web (ex: localhost:8000/locator), será exibido "The locator called with success!".
<br />
E ao acessar a rota da api (ex: localhost:8000/api/locator), será retornado um JSON com Status Code 200 e a mensagem "The locator called with success!" também será exibida.
