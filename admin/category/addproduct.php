<?php

include_once('../../vendor/autoload.php');
// use rudhro\category;
use rudhro\Dbcon\Dbcon;

//  $data = new Dbcon();

// if(isset($_POST["submit"])){
//     $insert = array(
//         "bookname" => mysqli_real_escape_string($data->conn, $_POST["bookname"]);
//     )
// }

//  $inser_array = array(
//     "bookname" => "bookname",
//     "authorname" => "authorname",
//     "discription" => "discription",
//     "price" => "price"
//  );
//  echo $data->insert("table_name", $insert_array);

 
 

@$bookname = $_POST['bookname'];
@$authorname = $_POST['authorname'];
@$discription = $_POST['discription'];
@$price = $_POST['price'];







// database connected
$conn = new mysqli("localhost", "root", "", "books");
if(isset($_SERVER['REQUEST_METHOD'])  == "POST"){
    if($conn->connect_error){
        die("Connection Error :". $conn->connect_error);
    }else{
        $insert = $conn->prepare("INSERT INTO `booklists`(bookname, authorname, discription, price) VALUES (?,?,?,?)");
        $insert->bind_param("sssi", $bookname,$authorname,$discription,$price);
        $insert->execute();
        echo "Book Add Successfully";
        $insert->close();    
    }
}



?>

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
    <h2>Product Add || </h2>
    <div class="card my-4">
        <div class="card-body">
        <form action="" method="post">
            <div>
                <label for="" class="form-label mt-1">Book Name</label>
                <input type="text" name="bookname" id="" class="form-control mt-1">
            </div>
            <div>
                <label for="" class="form-label mt-1">Author Name</label>
                <input type="text" name="authorname" id="" class="form-control mt-1">
            </div>
            <div>
                <label for="" class="form-label mt-1">Discription</label>
                <input type="text" name="discription" id="" class="form-control mt-1">
            </div>
            <div>
                <label for="" class="form-label mt-1">Price</label>
                <input type="number" name="price" id="" class="form-control mt-1">
            </div>
            <div class="mt-3 d-flex justify-content-center">
              <input type="submit" value="Add" class="btn btn-success">
            </div>
        </form>    

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