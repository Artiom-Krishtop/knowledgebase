## Как сменить версию php

Открываем файл для смены версии /fcgi-bin/php5.fcgi 
##### 
     #exec /usr/bin/php5-cgi
     #exec /usr/bin/php-cgi7.0
     exec /usr/bin/php-cgi7.1
     #exec /usr/bin/php-cgi7.3
     #exec /usr/bin/php-cgi7.4
     #exec /usr/bin/php-cgi8.0
##### 
Комментируем текущую версию, и устанавливаем необходимую.

[назад](/test_server)
