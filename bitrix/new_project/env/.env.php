<?php
// for dbconn.php
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "site_DB_login";
$DBPassword = "site_DB_password";
$DBName = "site_DB_name";
$DBDebug = 0;
$DBDebugToFile = 0;

// for .settings.php
$DBClassName = '\\Bitrix\\Main\\DB\\MysqliConnection';
$settingsDebug = 1;

// putenv() преобразует переменную в строку, false = '', true = '1'

putenv("DBType=$DBType");
putenv("DBHost=$DBHost");
putenv("DBLogin=$DBLogin");
putenv("DBPassword=$DBPassword");
putenv("DBName=$DBName");
putenv("DBDebug=$DBDebug");
putenv("DBDebugToFile=$DBDebugToFile");

putenv("DBClassName=$DBClassName");
putenv("settingsDebug=$settingsDebug");