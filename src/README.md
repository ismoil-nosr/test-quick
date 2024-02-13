# О проекте
Пример абстрактного проекта 

# Установка

### Зависимости
* Docker & docker-compose
* PHP 8.2
* Composer

Запускаем команды:
```bash
git clone

cd test-quick

composer i

php key:generate
php artisan migrate
```

### Запуск в докере
```bash
make init
```

### Проверка работы

1. Отправка OTP
```bash
curl --location 'http://localhost:10800/api/user/settings/request' \
--header 'Content-Type: application/json' \
--data '{
    "method": "sms"
}'
```

2. Подтверждение OTP (вместе с измененными настройками)
```bash
curl --location 'http://localhost:10800/api/user/settings/confirm' \
--header 'Content-Type: application/json' \
--data '{
    "method": "sms",
    "code": "123123",
    "settings": {
        "optioon": 123
    }
}'
```