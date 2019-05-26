
<?php
$category="SELECT Category from item";

$result=mysqli_query($conn,$category);

$category_array = array();
while($row = mysqli_fetch_assoc($result))
{
    $category_array[] = $row['Category'];
}
?>

<div class="sidenav">
  <button class="dropdown-btn" onclick="myFunction()">Categories
    <i class="fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="products.php?page=<?php echo $category_array[0] ?>"><?php echo $category_array[0] ?></a>
    <a href="products.php?page=<?php echo $category_array[1] ?>"><?php echo $category_array[1] ?></a>
    <a href="products.php?page=<?php echo $category_array[2] ?>"><?php echo $category_array[2] ?></a>
    <a href="products.php?page=<?php echo $category_array[3] ?>"><?php echo $category_array[3] ?></a>
    <a href="products.php?page=<?php echo $category_array[4] ?>"><?php echo $category_array[4] ?></a>
  </div>
</div>
