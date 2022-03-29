<?php 
session_start();
require("../controls/list-product-control.php");
?>

<div class="container" style="width:500px;">
<fieldset>
 <legend>DISPLAY</legend>
    
<table border="1">
<thead>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Buying Price</th>
        <th>Selling Price</th>
        <th colspan="2">Action</th>
    </tr>
</thead>
<tbody>
    <?php 
    $rows = get_data();
    foreach($rows as $i => $row){
    ?>
    <tr>
        <td><?php echo $row["SL"]; ?></td>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["buying_price"]; ?></td>
        <td><?php echo $row["selling_price"]; ?></td>
        <td><a href="/WTO/lab task 5/views/delete-product-view.php?id=<?php echo $row["SL"]; ?>">Delete</a></td>
        <td><a href="/WTO/lab task 5/views/update-product-view.php?id=<?php echo $row["SL"]; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<p><?php 
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?></p>
<a href="/WTO/lab task 5/index.php">Back</a>
</fieldset>
</div>