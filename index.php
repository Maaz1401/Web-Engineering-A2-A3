
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="main">

<div id="featured">
<center><strong>FEATURED</strong></center>  
</div>

<div class="grid-container">

     <div class="grid-item">

	 <?php
     $featured1="SELECT name,image FROM item WHERE id=1 ";

     $result=mysqli_query($conn,$featured1);    

     $featured1_name = array();
	 $featured1_image = array();
     while($row = mysqli_fetch_assoc($result))
     {
      $featured1_name[] = $row['name']; 
	  $featured1_image[] = $row['image'];
	 }
     ?>

	 <?php echo $featured1_name[0] ?>    <!-- washing machine Product name-->
     <a href="product.php?page=<?php echo $featured1_name[0] ?>">
	 
     <img id=image1 src="<?php echo $featured1_image[0]  ?>" />    <!-- washing machine Product image-->
	 
	<!--<script>   
	 var url = "" ;
     document.getElementById('image1').src = url;	 
	 </script> -->
	 
	 </a></div>

     <div class="grid-item">

	 <?php
     $featured1="SELECT name,image FROM item WHERE id=3 ";

     $result=mysqli_query($conn,$featured1);    

     $featured2_name = array();
	 $featured2_image = array();
     while($row = mysqli_fetch_assoc($result))
     {
      $featured2_name[] = $row['name']; 
	  $featured2_image[] = $row['image'];
	 }
     ?>

	 <?php echo $featured2_name[0] ?>    <!-- tv Product name-->
     <a href="product.php?page=<?php echo $featured2_name[0] ?>">
	 
     <img id=image2 src="<?php echo $featured2_image[0]  ?>" />    <!-- tv Product image-->
	 
	<!--<script>   
	 var url = "" ;
     document.getElementById('image1').src = url;	 
	 </script> -->
	 
	 </a></div>

</div>

</div>


<?php include('footer.php'); ?>

