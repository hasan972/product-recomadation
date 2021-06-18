<?php 
// session_start();
//  if(isset($_GET['id']))
//  {
//      $_SESSION['id']=$_GET['id'];
//  }

include("header.php");
include("db.php");

$flag=0;

if (isset($_POST['submit']))
{
   $result= mysqli_query($con,"insert into products(product_name,product_purchash) values('$_POST[products_name]','$_POST[previous_purchases]')");
   if($result)
   {
      $flag=1;
   }

}

?>


<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
        <a class="btn btn-success" href="add_products.php">Add Products</a>
        <a class="btn btn-info pull-right" href="index.php"> Back</a>
        </h2>
    </div>
<?php if($flag){ ?>
<div class="alert alert-success">Products successfully inserted in the database</div>

<?php } ?>
    

<div class="panel-body">
<form action="add_product.php" method="post">
    <div class="form-group">
        <label for="username" >Products Name</label>
        <input type="text" name="products_name" id="products_name" class="form-control" required>
    </div>
     <div class="form-group">
        <label for="username" >Previous Purchases / Product Looked</label>
        <input type="number" name="previous_purchases" id="previous_purchases" class="form-control" required>
    </div>
    <div class="form-group">
        <input  type="submit" name="submit" value="submit" class="btn btn-primary">
    </div>
</form>
</div>
</div>
</div>