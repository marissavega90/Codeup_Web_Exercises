<!DOCTYPE html>
<html lang="en">
	<?php 

  include 'includes/header.php';

  ?>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
    <?php
      require_once 'includes/topnavbar.php';
    ?>
      
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <?php

          require_once 'includes/sidebar.php';
          
        ?>
  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
          <h1 id="section1">SERVICES</h1>
    
          <ul>
            <li>Anvil</li>
            <li>TNT</li>
            <li>Flight Suit</li>
            <li>Running Shoes</li>
          </ul>
          
        </div><!-- /.col-xs-12 main -->
    </div><!--/.row-->
  </div><!--/.container-->
</div><!--/.page-container-->


<!--FOOTER-->
<?php
  
  require_once 'includes/footer.php';

?>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>