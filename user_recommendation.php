<?php 

include("db.php");
include("recommend.php");

$products=mysqli_query($con,"select * from products");
$matrix=array();

while($product=mysqli_fetch_array($products))
{
    $users=mysqli_query($con,"select username from users where id=$product[id]");
    $username=mysqli_fetch_array($users);
    $matrix [$username['username']][$product['product_name']]=$product['product_purchash'];
}
// echo "<pre>";
// print_r($matrix);
// echo "<pre>"
var_dump(getRecommendation($matrix,"Rakibul"));
// var_dump(getRecommendation($matrix,"rakibul"))

?>