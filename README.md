
# Implementation of a test task for <img src="https://softhousegroup.com/wp-content/uploads/2022/11/softhouse-logo.svg" alt="Softhouse Logo">

## Installation

### Install via Composer
```
composer create project bulbakh/shg_tt
```

## Notes
### Файли
- Інтерфейси: app/Interfaces
- Моделі, фабрики: app/Logger
- Провайдер фабрик: app/Providers/LoggerServiceProvider.php 
- Контролер: app/Http/Controllers/LoggerController.php
- Конфігураційний файл: app/config/logger.php
- Налаштування змінних оточення: .env
```
LOGGER_TYPE="email"
LOGGER_EMAIL="email@exaple.com"
```
- Тести: tests/Feature/LoggerTest.php, tests/Unit/LoggerTest.php. 

### Додавання нового типу логів
1. Додати новий логер (app/Logger/Loggers)
2. Додати нову фабрику (app/Logger/Factories)

   Існуючий функціонал змінювати не потрібно

### Приклади http-запитів
- /log - застосування типу логів по замовчуванню
- /log/all - застосування усіх типів логів
- /log/email, /log/db, /log/file - застосування опційних типів логів

Сторінка з прикладами: /example.html
