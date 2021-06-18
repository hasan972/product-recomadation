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
    <th>User Name</th>
    <th>Add Products</th>

    <?php $result=mysqli_query($con,"select * from users");
    while($row=mysqli_fetch_array($result))
    { 
    ?>
    <tr><td><?php echo $row['username'];?></td>
    <td>
    <form action="add_product.php">
     <input type="submit" name="add_product" class="btn btn-primary" value="Add Product">
     <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    </form>
    </td></tr>
    <?php } ?>
    
    </table>
</div>
</div>


</div>