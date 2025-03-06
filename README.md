# Delivery System

Este projeto é um sistema de delivery desenvolvido com Laravel, utilizando padrões de design, Livewire para o frontend, Docker para contêinerização, SQLite como banco de dados, WebSockets para notificações em tempo real e filas para processamento em segundo plano.

## Requisitos

- PHP 8.2
- Composer
- Docker
- Node.js e NPM

## Configuração

### Clonar o Repositório

```bash
git clone https://github.com/calditostech/delivery-services.git
cd delivery-services
```

### Instalar Dependências
```
composer install
npm install
```

### Configurar o Ambiente
Renomeie o arquivo .env.example para .env e configure as variáveis de ambiente conforme necessário. Aqui está um exemplo de configuração:

ambiente
APP_NAME=DeliverySystem
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE=/caminho/para/seu/banco-de-dados/database.sqlite

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

WEBSOCKETS_SSL_LOCAL_CERT=
WEBSOCKETS_SSL_LOCAL_PK=

### Criar o Banco de Dados

### Crie o arquivo de banco de dados SQLite:
```
touch /caminho/para/seu/banco-de-dados/database.sqlite
php artisan migrate
```

### Construir e Iniciar os Contêineres Docker
```
docker-compose up -d
```

### Compilar Recursos Frontend
```
npm run dev
```
Uso
### Iniciar o Servidor de Desenvolvimento
bater
```
php artisan serve
```