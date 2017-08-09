<?php
/** O nome do banco de dados*/
define('DB_NAME', 'sol');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'user');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'use');
/** nome do host do MySQL */
define('DB_HOST', 'localhot');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/crud-bootstrap-php/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database.php');
