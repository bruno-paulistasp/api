# bco_capgemini

Utilizei as seguintes ferramentas para o desenvolvimento da API:
  - PHP (7.3)
  - [Laravel](https://laravel.com/docs/7.x/installation) (7)
  - [JWT](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/)
  - Mysql (10)

Resolvi utilizar Mysql como banco de dados porque ja tinha instalado e funcionando. 

# Instalacao
configurar o `.env`
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=user
DB_PASSWORD=password
```
rodar as migrations
```sh
php artisan migrate
```
rodar os seeds
```sh
php artisan db:seed
```
a conta abaixo sera criada:
`nome: Bruno`
`senha: password`
`agencia: 0001`
`conta: 12345678`
`saldo: 0`

gerar a key do JWT (ira adicionar `JWT_SECRET` no .env)
```sh
php artisan jwt:secret
```
