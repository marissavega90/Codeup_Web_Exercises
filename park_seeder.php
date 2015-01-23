<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require_once ('db_connect.php');

$nationalParksArray = [

	['name' => 'Arches','location' => 'Utah','date_established' => '1971-11-12','area_in_acres' => '76518.98', 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
	['name' => 'Grand Teton','location' => 'Wyoming','date_established' => '1929-02-26','area_in_acres' => '309994.66', 'description' => 'Grand Teton is the tallest mountain in the Teton Range. The park\'s historic Jackson Hole and reflective piedmont lakes teem with unique wildlife and contrast with the dramatic mountains, which rise abruptly from the sage-covered valley below.'],
	['name' => 'Big Bend','location' => 'Texas','date_established' => '1944-06-12','area_in_acres' => '801163.21', 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
	['name' => 'Bryce Canyon','location' => 'Utah','date_established' => '1928-02-25','area_in_acres' => '35835.08', 'description' => 'Bryce Canyon is a giant geological amphitheater on the Paunsaugunt Plateau. The unique area has hundreds of tall sandstone hoodoos formed by erosion. The region was originally settled by Native Americans and later by Mormon pioneers.'],
	['name' => 'Mesa Verde','location' => 'Colorado','date_established' => '1906-06-29','area_in_acres' => '52121.93', 'description' => 'This area constitutes over 4,000 archaeological sites of the Ancestral Puebloan people, who lived here and elsewhere in the Four Corners region for at least 700 years. Cliff dwellings built in the 12th and 13th centuries include the famous Cliff Palace, which has 150 rooms and 23 kivas, and the Balcony House, with its many passages and tunnels.'],
	['name' => 'Yellowstone','location' => 'Wyoming','date_established' => '1872-03-01','area_in_acres' => '2219790.71', 'description' => 'Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country.'],
	['name' => 'Zion','location' => 'Utah','date_established' => '1919-11-19','area_in_acres' => '146596.60', 'description' => 'Located at the junction of the Colorado Plateau, Great Basin, and Mojave Desert, this geological wonder has colorful sandstone canyons, mountainous mesas, and countless rock towers. Natural arches and exposed plateau formations compose a large wilderness roughly divided into four ecosystems: desert, riparian, woodland, and coniferous forest.'],
	['name' => 'Shenandoah','location' => 'Virginia','date_established' => '1926-05-22','area_in_acres' => '199045.23', 'description' => 'Shenandoah\'s Blue Ridge Mountains are covered by sprawling hardwood forests that teem with tens of thousands of animals. The Skyline Drive and Appalachian Trail run the entire length of this narrow park, along with more than 500 miles (800 km) of hiking trails passing scenic overlooks and cataracts of the Shenandoah River.'],
	['name' => 'Rocky Mountain','location' => 'Colorado','date_established' => '1915-01-26','area_in_acres' => '265828.41', 'description' => 'Bisected north to south by the Continental Divide, this portion of the Rockies has ecosystems varying from over 150 riparian lakes to montane and subalpine forests to treeless alpine tundra. Wildlife including mule deer, bighorn sheep, black bears, and cougars inhabit its igneous mountains and glacier valleys. Longs Peak, a classic Colorado fourteener, and the scenic Bear Lake are popular destinations, as well as the famous Trail Ridge Road, which reaches an elevation of more than 12,000 feet (3,700 m).'],
	['name' => 'Redwood','location' => 'California','date_established' => '1968-10-02','area_in_acres' => '112512.05', 'description' => 'This park and the co-managed state parks protect almost half of all remaining Coastal Redwoods, the tallest trees on Earth. There are three large river systems in this very seismically active area, and 37 miles (60 km) of protected coastline reveal tide pools and seastacks. The prairie, estuary, coast, river, and forest ecosystems contain a huge variety of animal and plant species.']
	
];


foreach ($nationalParksArray as $park) {

	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
		VALUES (:name, :location, :date_established, :area_in_acres, :description)";
		// VALUES (:email, :name)');
	$stmt = $dbc->prepare($query);

	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_STR);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

