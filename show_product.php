<?php 
include("header.php");
include("db.php");
?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
        <h2>
        <a class="btn btn-success" href="add_users.php">Add User</a>
        <a class="btn btn-info pull-right" href="index.php"> Back</a>
        </h2>
    </div>

<div class="panel-body">
    <table class="table table-striped">
    <th>Product Name</th>
    <th>Products Purchash Quantity</th>
    

    <?php $result=mysqli_query($con,"select * from products");
    while($row=mysqli_fetch_array($result))
    { 
    ?>
    <tr>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['product_purchash'];?></td>
    </tr>
    <?php } ?>
    
    </table>
</div>
</div>


</div>