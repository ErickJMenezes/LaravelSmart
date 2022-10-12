# LaravelSmart

Compilação de 1000+ models para o banco de dados Smart.

## Instalação
```sh
composer require erickjmenezes/laravel-smart
```

No momento, compatível apenas com bancos oracle.

## Como usar
Importar models do namespace `ErickJMenezes\LaravelSmart\Models`.

Os models possuem o mesmo nome das suas respectivas tabelas. (Smk, Agd, Agm, Osm...)

## Configuração
Para customizar os parâmetros de conexão, publique o arquivo de configuração utilizando o comando abaixo.
```sh
php artisan vendor:publish --tag=oracle-smart
```
