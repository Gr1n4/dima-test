# Dima test

Первоначально необходимо установить npm модули для корректной работы frontend `npm i`

Далее создать базу в mysql и вставить дамп базы из корня проекта `dima_test.sql` (Кодировка utf-8_general_ci)

После настроить конфиги. В файле `config/db_params.php` Необходимо поменять название базы на созданную, а так же учетные данные.
И для ajax запросов с фронта нужно поменять домен в файле `views/assets/js/main.js` на тот на котором будет запущен backend.


* php - 5.6+ (current: 7.1.6)
* apache - 2.2+ (current: 2.4.25)
* mysql - 10.1.24-MariaDB (Может быть и меньше)