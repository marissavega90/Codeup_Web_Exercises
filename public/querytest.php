<!-- addressbar: http://codeup.dev/query.php?key=value&key2=value2&userid=35&delete=yes -->

<?php

	$url = $_GET['url'];

	header("Location: " . $url);

?>

<p>Some blog post....</p>
<p><a href="?url=http://www.google.com">Delete Blog</a></p>