<!DOCTYPE html>
<html lang="en">
<?php
include_once("../inc/head.php");
?>
<?php
include_once("../inc/header.php");
?>
<div class="container-fluid">
<div class="row flex-nowrap">
<?php include_once("../inc/sidebar.php");?>
<div class="col py-3">
    <h2>Category List || </h2>
    <a href="addproduct.php" class="btn btn-success">Add Product</a>
    <div class="card my-4">
        <div class="card-body">
        
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>Discription</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                           <a href="categorydetails.php" class="text-decoration-none">Show</a> ||
                           <a href="update.php" class="text-decoration-none">Update</a> ||
                           <a href="delete.php" class="text-decoration-none">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<?php
include_once("../inc/footer.php");
?>
    
</body>
</html>