
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 
 $page = $_GET['page'];
 echo $page;
 
 $get_details="SELECT name,image,description,price,quantity FROM item WHERE name='$page' ";

 $result=mysqli_query($conn,$get_details);

 $item_name = array();
 $item_image = array();
 $item_description = array();
 $item_price = array();
 $item_quantity = array();
 
 while($row = mysqli_fetch_assoc($result))
 {
  $item_name[] = $row['name']; 
  $item_image[] = $row['image'];
  $item_description[] = $row['description'];
  $item_price[] = $row['price'];
  $item_quantity[] = $row['quantity'];
 }

?>



<div class="main">

<div class="grid-container">

     <div class="grid-item">

	 <?php echo $item_name[0] ?>    <!--Product name-->
	 
     <img id=image1 src="<?php echo $item_image[0]  ?>" />    <!--Product image-->
	 
	 <p><?php echo $item_description[0]  ?></p>
	 
	 <p>Price: Rs.<?php echo $item_price[0]?> </p>
	 
	 <p>Quantity Remaining: <?php echo $item_quantity[0]?> </p>
	 
     </div>

</div>

</div>


<?php include('footer.php'); ?>

