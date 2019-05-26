<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<?php 
 $page = $_GET['page'];
 echo $page;
 
 $allitems="SELECT name,image FROM item WHERE category='$page' ";

 $result=mysqli_query($conn,$allitems);

 $count=mysqli_num_rows($result); 

 $allitems_name = array();
 $allitems_image = array();
 
 while($row = mysqli_fetch_assoc($result))
 {
  $allitems_name[] = $row['name']; 
  $allitems_image[] = $row['image'];
 }
 
 
 
?>

<div class="main">

<div id=gc class="grid-container">

    <script>

    function append_griditem()
	{
    var maingrid = document.getElementById('gc');
	var iname= "<?php echo $allitems_name[0]  ?>";
	var iimage= "<?php echo $allitems_image[0]  ?>"
	//var rowcount = parseInt("<?php echo $count?>");
	
	//for(int i=1; i<=rowcount; i++)
	
     griditem = document.createElement('div');
	 griditem.classList.add("grid-item");
	 
	 var itemNameHere = document.createTextNode(iname);
	 
	 var aTag = document.createElement('a');
     aTag.setAttribute('href',"product.php");
	 
	 var imgtag = document.createElement('img');
	 imgtag.setAttribute('src',iimage);
	 
	 
     aTag.appendChild(imgTag);	 
	 
	 griditem.appendChild(aTag);
	 
	 maingrid.appendChild(griditem); 
	
	</script>


     <div class="grid-item">

	 <?php echo $allitems_name[0]; ?>    <!-- Product name-->
     <a href="product.php?page=<?php echo $allitems_name[0] ?>">	 <img id=image1 src="<?php echo $allitems_image[0]  ?>" /></a>     <!-- Product image-->
	 
	 </div>    

	 
</div>

</div>


<?php include('footer.php'); ?>
