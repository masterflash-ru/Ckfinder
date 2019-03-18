модуль для интеграции плагина ckfinder, точнее connection.php  в систему
содержит саму серверную часть плагина

Установка:

1. composer require masterflash-ru/ckfinder
2. в файле plugins/ckfinder/config.js добавить config.connectorPath="/connector.php" - новый путь к коннетору-обработчику. Если использовалось скелетное стартовое наше приложение, то ничего менять не нужно, все прописано.