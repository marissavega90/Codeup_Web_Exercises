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
          <h1 id="section1">LOCATION</h1>
    
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3475.0115273603064!2d-98.49243299999998!3d29.428459500000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5f5253d2c6af%3A0xac8f14e3e6e4333d!2s112+E+Pecan+St+%231000%2C+San+Antonio%2C+TX+78205!5e0!3m2!1sen!2sus!4v1420667421622" width="600" height="450" frameborder="0" style="border:0"></iframe>
          
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