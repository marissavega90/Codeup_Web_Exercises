<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require_once ('db_connect.php');

$nationalParksArray = [

	['name' => 'Arches','location' => 'Utah','date_established' => '1971-11-12','area_in_acres' => '76518.98'],
	['name' => 'Grand Teton','location' => 'Wyoming','date_established' => '1929-02-26','area_in_acres' => '309994.66'],
	['name' => 'Big Bend','location' => 'Texas','date_established' => '1944-06-12','area_in_acres' => '801163.21'],
	['name' => 'Bryce Canyon','location' => 'Utah','date_established' => '1928-02-25','area_in_acres' => '35835.08'],
	['name' => 'Mesa Verde','location' => 'Colorado','date_established' => '1906-06-29','area_in_acres' => '52121.93 '],
	['name' => 'Yellowstone','location' => 'Wyoming','date_established' => '1872-03-01','area_in_acres' => '2219790.71'],
	['name' => 'Zion','location' => 'Utah','date_established' => '1919-11-19','area_in_acres' => '146596.60'],
	['name' => 'Shenandoah','location' => 'Virginia','date_established' => '1926-05-22','area_in_acres' => '199045.23'],
	['name' => 'Rocky Mountain','location' => 'Colorado','date_established' => '1915-01-26','area_in_acres' => '265828.41'],
	['name' => 'Redwood','location' => 'California','date_established' => '1968-10-02','area_in_acres' => '112512.05']
	
];


foreach ($nationalParksArray as $park) {

	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres)
		VALUES ( '{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

	$dbc->exec($query);

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

