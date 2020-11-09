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
// // 
// $csk = "SELECT COUNT(*) from ipl_players WHERE team = 'csk'";
// $rr = "SELECT COUNT(*) from ipl_players WHERE team = 'rr'";
// $mi = "SELECT COUNT(*) from ipl_players WHERE team = 'mi'";
// $rcb = "SELECT COUNT(*) from ipl_players WHERE team = 'rcb'";
// $kxip = "SELECT COUNT(*) from ipl_players WHERE team = 'kxip'";
// $kkr = "SELECT COUNT(*) from ipl_players WHERE team = 'kkr'";
// $srh = "SELECT COUNT(*) from ipl_players WHERE team = 'srh'";
// $dc = "SELECT COUNT(*) from ipl_players WHERE team = 'dc'";
$id = "";
?>


<!doctype html>
<html>

<head>
    <title>Edit</title>
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
        }
    </style>
</head>

<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

$id = $_GET['id'];

}
$fetch_id = "SELECT * FROM `ipl_players` WHERE `id` = '$id'";
$result = mysqli_query($conn,$fetch_id);
$row = mysqli_fetch_assoc($result);
$name = $row['fullname'];
print_r($row);
// }
?>






<body>
    <div class="dash_head">
        <h1 align='center'>Admin Dashboard</h1>
        <h5 align='right' id="logout"><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></h5>
    </div>
    <div id="table">
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">        
            <table align="center">
                <tr>
                    
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php print_r($row['fullname']);?>" placeholder="Enter Full Name" required></td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td>
                        <select name="roll">
                            <option value="bat" <?php if($row['roll']=='bat'){echo 'selected=""';}?>>Batsman</option>
                            <option value="ball" <?php if($row['roll']=='ball'){echo 'selected=""';}?>>Bowler</option>
                            <option value="both" <?php if($row['roll']=='both'){echo 'selected=""';}?>>All Rounder</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>
                        <select name="nationality">
                            <option value="ind" <?php if($row['nationality']=='ind'){echo 'selected=""';}?>>Indian</option>
                            <option value="out" <?php if($row['nationality']=='out  '){echo 'selected=""';}?>>Foreigner</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Team</td>
                    <td><select name="team" value="mi">
                        <option value="csk" <?php if($row['team']=='csk'){echo 'selected=""';}?>>Chennai Super Kings</option>
                        <option value="mi" <?php if($row['team']=='mi'){echo 'selected=""';}?>>Mumbai Indians</option>
                        <option value="rcb" <?php if($row['team']=='rcb'){echo 'selected=""';}?>>Royal Challengers</option>
                        <option value="dc" <?php if($row['team']=='dc'){echo 'selected=""';}?>>Delhi Capitals</option>
                        <option value="kxip" <?php if($row['team']=='kxip'){echo 'selected=""';}?>>Kings XI Punjab</option>
                        <option value="kkr" <?php if($row['team']=='kkr'){echo 'selected=""';}?>>Kolkata Knight Riders</option>
                        <option value="srh" <?php if($row['team']=='srh'){echo 'selected=""';}?>>Sunriser Hyderabad</option>
                        <option value="rr" <?php if($row['team']=='rr'){echo 'selected=""';}?>>Rajasthan Royals</option>
                      </select></td>
                </tr>
                <tr>
                    <td>Auction Price</td>
                    <td><input type='text' value="<? echo $row['price'];?>" name='auction' placeholder='Enter Autction Price' required></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><input type="submit" name='submit' value='Update' style="margin-right:80px" ;></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="back"> <i class="fa fa-arrow-left"></i><a href="update.php">back</a></div>
</body>

</html>


<?php 

// }

?>

 <?php 

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];   //name
    $roll = $_POST['roll'];   //roll
    $nationality = $_POST['nationality']; //nationaltiy
    $team = $_POST['team'];       //team
    $auction = $_POST['auction'];  //auction   
    $sql = "UPDATE `ipl_players` SET `fullname`='$name',`team`='$team',`roll`='$roll',`nationality`='$nationality',`price`='$auction' WHERE id = '$id'";
    // echo $sql;

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('Data Added Succesfully')</script>";
        
     ?> 
<?
    }
    if($query==false){
        echo "<script>alert('data not uploaded')</script>";
        // echo $sql;
       ?>
<?php

    };
};  

?> 

