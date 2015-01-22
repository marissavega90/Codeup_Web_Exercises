
<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require_once ('db_connect.php');

$dbc->exec('CREATE TABLE national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id),
	name VARCHAR(255) NOT NULL,
	location VARCHAR(255) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT NOT NULL
)');