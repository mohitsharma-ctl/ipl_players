<?php
include('../config.php');

// session_start();  
// if(isset($_SESSION['username'])){
//     //some code here
//     echo "";
// }
// else{
//     header('location:../login.php');
// };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Player</title>
</head>
<body>

<?php


if($_SERVER['REQUEST_METHOD']=='GET'){

    $id = $_GET['id'];

    $sql = "DELETE FROM `ipl_players` WHERE id = $id";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo  "query exec succesfully";

    };

   header("Location:update.php"); 


    
}


?>
    
</body>
</html>