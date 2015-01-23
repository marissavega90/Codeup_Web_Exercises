<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require_once ('../db_connect.php');




// Use $_GET to create pages 1-3, with some math stuff
// var_dump($_GET['page']);

if(!isset($_GET['page'])) {
	$page = 1;
	$offset = 0;
} else {
	$page = $_GET['page'];
	$offset = ($page-1) * 4;
};


$query = "SELECT name, location, date_established, area_in_acres 
				FROM national_parks ORDER BY name LIMIT 4 OFFSET " . $offset;

$parks = $dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);

$stmt = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

$next = $page+1;

$previous = $page-1;

?>

<html>
<head>
	<title>National Parks</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/natl_parks_bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    	body { 

    		padding-top: 10px; 
    		background-image: url(img/nationalparksbackground2.jpg);
    		background-size: 110%;

    	}

    	.table tbody td {

    		background-color: #eee;
    	}

    	.panel {

    		background-color: rgba(125, 125, 125, 0.2);
    	}

    	.table th {
    		color: #1F2229;
    	}

    	h6 {

    		color: #F3F3F3;

    	}

    	.pager {

    		color: black;
    	}

    	h1 {

    		color: #1F2229;
    	}
    	
    	


    </style>

</head>
	<body>
		<div class="container">
			<h1 align="center">National Parks</h1>
			<h6 align="center">"The mountains are calling and I must go."
				<p><em>-John Muir</em></p></h6>
			<br>
		</div>

		<div class="container">
			<div class="panel panel-default">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Date Established</th>
						<th>Area (in Acres)</th>
					</tr>

						<? foreach ($parks as $key => $park): ?>

							<tr>
								<? foreach ($park as $value): ?>

									<td> <?= $value; ?> </td>
					
								<? endforeach; ?>

							</tr>

						<? endforeach; ?>
				</table>
			</div>

						<nav>
						  <ul class="pager">

 							<? if ($page > 1 ): ?>
 							
							    <li class="previous"><a href="?page=<?= $previous ?>"><span aria-hidden="true">&larr;</span> Older</a></li>

							<? endif; ?>

							<? if ($page <= $stmt/4): ?>

						    	<li class="next"><a href="?page=<?= $next ?>">Next <span aria-hidden="true">&rarr;</span></a></li>

							<? endif; ?>

						  </ul>
						</nav>
							
							   

							    
					</div>
				</div>
		</div>

	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
