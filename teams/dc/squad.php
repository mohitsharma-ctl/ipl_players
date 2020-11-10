<?php

include('../../config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        table{
            margin-left: auto;
            margin-right: auto;
            margin-top: 8%;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
        }
        thead th{
          border-top: 0px;
        }
    </style>

</head>
<body>
<table class="table table-dark table-hover" style="width:550px;">
<?php

$sql = "SELECT * FROM `ipl_players` WHERE team = 'dc'";
$query = mysqli_query($conn,$sql);
$counter = 1;

?>
<thead style="height: 30px;">
        
        <th style="width: 60px;">No</th>
        <th style="width: 150px;">Player Name</th>
        <th style="width: 60px;">Roll</th>
        <th style="width: 60px;" >Price</th>

    </thead>

    <?php

while($row = mysqli_fetch_array($query)){
    
    ?> 

        <tr>

            <td><?php echo $counter++; ?></td>
            <td>
                 <?php  echo $row['fullname']?>  

            </td>

            <td>
                 <?php echo $row['roll']; ?>
            </td>
            <td>

                 <?php echo $row['price'];?>
            </td>                    

        </tr>
<?php  } ?>
    <!-- <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody> -->
  </table>
    
</body>
</html>