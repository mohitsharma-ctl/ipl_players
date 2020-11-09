<?php
include('../config.php');
// session_start();  
// if(isset($_SESSION['username'])){
//     //some code here
// }
// else{
//     header('location:../index.php');
// };
?>
<!DOCTYPE html>
<html>

<head>

    <title>Update Stduent</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/admin_update.css">
    <style>
        #back{
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
       #table a{
            text-decoration: none;
            color: black;
        }
       #table a:hover{
            color: red;
        }
    </style>
</head>


<body>

    <?php //include('../template.php'); ?>
    <form action="update.php" method="POST">
        <center>

            Team
            <select name="team">
                <option value="csk">CSK</option>
                <option value='mi'>MI</option>
                <option value='rcb'>RCB</option>
                <option value='kxip'>KXIP</option>
                <option value='rr'>RR</option>
                <option value='dc'>DC</option>
                <option value='kkr'>KKR</option>
                <option value='srh'>SRH</option>

            </select>
            <input type="submit" name="submit" value="confirm">
    </form>


    <div id='table'>

 <?php 

if(isset($_POST['submit'])){


    $team = $_POST['team'];

    $sql = "SELECT * FROM `ipl_players` WHERE team = '$team'";

    $query = mysqli_query($conn,$sql);

    ?> 
        <table>

            <tr>
                <th style="width:200px;"><b>Name</b></th>
                <th style="width:100px;"><b>Roll</b></th>
                <th style="width:100px;"><b>Nationality</b></th>
                <th style="width:100px;" ><b>Team</b></th>
                <th style="width:80px;"><b>Auction Price</b></th>
                <th style="width:80px;"><b>Delete</b></th>
                <th style="width:80px;">Edit</th>
                </tr>
             <?php

    while($row = mysqli_fetch_array($query)){
        
        ?> 

            <tr>

                <td>
                     <?php  echo $row['fullname']?>  

                </td>

                <td>
                     <?php echo $row['roll']; ?>
                </td>

                <td>

                    <?php echo $row['nationality']?> 

                </td>

                <td>

                     <?php echo $row['team'];?>
                <td>

                     <?php echo $row['price'];?>
                    
   


   
                <td><a href="<?php echo "delete.php?id=".$row['id']; ?>"><i class="fa fa-trash"></i></td>
            
                <td><a href="<?php echo "edit.php?id=".$row['id']; ?>"><i class="fa fa-edit"></i></td>
            </tr>
   <?php     }; }; ?> 
        </table>
                </center>
                <div id="back"> <i class="fa fa-arrow-left"></i><a href="dashboard.php">back</a></div>
</body>

</html>

