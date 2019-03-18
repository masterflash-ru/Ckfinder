модуль для интеграции плагина ckfinder, точнее connection.php  в систему
содержит саму серверную часть плагина

Установка:

1. composer require masterflash-ru/Ckfinder
2. в папку src/Ckfinder скопировать все содержимое коннектора плагина (plugins/ckfinder/core/connector/php) как есть
3. в файле plugins/ckfinder/config.js добавить config.connectorPath="/connector.php" - новый путь к коннетору-обработчику
