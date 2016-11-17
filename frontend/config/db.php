<?php
/**
 * Created by PhpStorm.
 * User: zeopean
 * Date: 2016-11-08
 * Time: 11:32
 */
return [
    'class'     => 'yii\db\Connection',
    'dsn'       => 'mysql:host=127.0.0.1;dbname=yii2', // MySQL, MariaDB
    'username'  => 'admin', //数据库用户名
    'password'  => 'admin', //数据库密码
    'charset'   => 'utf8',
];
//'dsn' => 'sqlite:/path/to/database/file', // SQLite
//'dsn' => 'pgsql:host=localhost;port=5432;dbname=mydatabase', // PostgreSQL
//'dsn' => 'cubrid:dbname=demodb;host=localhost;port=33000', // CUBRID
//'dsn' => 'sqlsrv:Server=localhost;Database=mydatabase', // MS SQL Server, sqlsrv driver
//'dsn' => 'dblib:host=localhost;dbname=mydatabase', // MS SQL Server, dblib driver
//'dsn' => 'mssql:host=localhost;dbname=mydatabase', // MS SQL Server, mssql driver
//'dsn' => 'oci:dbname=//localhost:1521/mydatabase', // Oracle