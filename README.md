<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Teste API Uzer Tecnologia

## Como rodar o projeto?


    1 Clonar o repositorio:
    git clone https://github.com/joaofds/apiuzer.git
    
    2 Na raiz do projeto rodar os comandos abaixo:
    composer install (isso irá instalar o laravel e suas dependencias)
    
    3 Setar suas configurações no arquivo .ENV - API_URL, database, host etc...
    API_URL=seuVHostLocal
    
    4 Rodar migrations
    php artisan migrate
    
    5 Na raiz do projeto rodar a aplicação
    php artisan serve
    
    6 Usar curl ou postman para manipular a API...
    curl --location --request GET 'localhost/api/v1/clientes'
    curl --location --request POST 'localhost/api/v1/clientes' --header 'Content-Type: application/json' --data-raw '{ "nome":"fulano", "email": "fulano@domain.com",   "telefone": 62922222222 }'
    curl --location --request GET 'localhost/api/v1/clientes/1'
    curl --location --request PUT 'localhost/api/v1/clientes/2' --header 'Content-Type: application/json' --data-raw '{ "nome":"User"}'
    curl --location --request DELETE 'localhost/api/v1/clientes/1'
