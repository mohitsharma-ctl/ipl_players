<?php
include('../../config.php');

// session_start();  
// if(isset($_SESSION['username'])){
//     //some code here
//     echo "";
// }
// else{
//     header('location:../login.php');
// };
// 
$csk = "SELECT COUNT(*) from ipl_players WHERE team = 'csk'";
$rr = "SELECT COUNT(*) from ipl_players WHERE team = 'rr'";
$mi = "SELECT COUNT(*) from ipl_players WHERE team = 'mi'";
$rcb = "SELECT COUNT(*) from ipl_players WHERE team = 'rcb'";
$kxip = "SELECT COUNT(*) from ipl_players WHERE team = 'kxip'";
$kkr = "SELECT COUNT(*) from ipl_players WHERE team = 'kkr'";
$srh = "SELECT COUNT(*) from ipl_players WHERE team = 'srh'";
$dc = "SELECT COUNT(*) from ipl_players WHERE team = 'dc'";

?>


<!doctype html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/site.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            margin-top: 1px;
        }
        #back{
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
        
        #table table{
            border: 2px;
            padding: 15px;
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        }
        #team_details {
            position: absolute;
            left: 600px;
            /* right: auto; */
        }
    </style>
</head>

<body>
    <div class="dash_head">
        <h1 align='center'>Admin Dashboard</h1>
        <h5 align='right' id="logout"><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></h5>
    </div>
    <div id="table">
        <form action="insert.php" method="POST">
                    <table align="center">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td>
                        <select name="roll">
                            <option value="bat">Batsman</option>
                            <option value="ball">Bowler</option>
                            <option value="both">All Rounder</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>
                        <select name="nationality">
                            <option value="ind">Indian</option>
                            <option value="out">Foreigner</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Team</td>
                    <td><select name="team" >
                        <option value="csk">Chennai Super Kings</option>
                        <option value="mi">Mumbai Indians</option>
                        <option value="rcb">Royal Challengers</option>
                        <option value="dc">Delhi Capitals</option>
                        <option value="kxip">Kings XI Punjab</option>
                        <option value="kkr">Kolkata Knight Riders</option>
                        <option value="srh">Sunriser Hyderabad</option>
                        <option value="rr">Rajasthan Royals</option>
                      </select></td>
                </tr>
                <tr>
                    <td>Auction Price</td>
                    <td><input type='text' name='auction' placeholder='Enter Autction Price' required></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><input type="submit" name='submit' value='submit' style="margin-right:80px" ;></td>
                </tr>
            </table>
        </form>
    </div>
<div id="team_details">
<table>
    <tr>
        <td>CSK</td>
        <td><? 
        
        $result = mysqli_query($conn,$csk);
        $row = mysqli_fetch_row($result);
        
        echo $row[0];
?></td>
    </tr>
    <tr>
        <td>MI</td>
        <td><?$result = mysqli_query($conn,$mi);
        $row = mysqli_fetch_row($result);
       
        echo $row[0];
        
        ?>

        </td>
    </tr>
    <tr>
        <td>SRH</td>
        <td><?$result = mysqli_query($conn,$srh);
         $row = mysqli_fetch_row($result);
        
        echo $row[0];
        
        ?></td>
    </tr>
    <tr>
        <td>RCB</td>
        <td><?$result = mysqli_query($conn,$rcb);
         $row = mysqli_fetch_row($result);
        
        echo $row[0];
        
        ?></td>
    </tr>
    <tr>
        <td>DC</td>
        <td><?$result = mysqli_query($conn,$dc);
         $row = mysqli_fetch_row($result);
        
        echo $row[0];
        
        ?></td>
    </tr>
    <tr>
        <td>RR</td>
        <td><?$result = mysqli_query($conn,$rr);
        $row = mysqli_fetch_row($result);
        
        echo $row[0];
        
        ?></td>
    </tr>
    <tr>
        <td>KXIP</td>
        <td><?
        
        $result = mysqli_query($conn,$kxip);
        $row = mysqli_fetch_row($result);
        
        echo $row[0];  ?>
    </td>
    </tr>
    <tr>
        <td>KKR</td>
        <td><?$result = mysqli_query($conn,$kkr);
         $row = mysqli_fetch_row($result);
        
        echo $row[0];
        
        ?></td>
    </tr>
    
</table>
</div>
<div id="back"> <i class="fa fa-arrow-left"></i><a href="dashboard.php">back</a></div>
</body>

</html>


 <?php 

if(isset($_POST['submit'])){

    $name = $_POST['name'];   //name
    $roll = $_POST['roll'];   //roll
    $nationality = $_POST['nationality']; //nationaltiy
    $team = $_POST['team'];       //team
    $auction = $_POST['auction'];  //auction   
    $sql = "INSERT INTO `ipl_players` (`id`, `fullname`, `team`, `roll`, `nationality`, `price`) VALUES (NULL, '$name', '$team', '$roll', '$nationality', '$auction');";


    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('Data Added Succesfully')</script>";
     ?> 
<?
    }
    if($query==false){
        echo "<script>alert('data not uploaded')</script>";
       ?>
<?php

    };
};  

?> 