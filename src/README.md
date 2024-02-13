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
и всё, должно запуститься.

# Разработка
Перед обновлением репозитория следует запустить скрипты PHPStan и PHP CS-Fixer