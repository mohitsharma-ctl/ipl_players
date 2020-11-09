<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
   body{
    font-family: Arial, Helvetica, sans-serif;
}

#dash_table,td,tr{
    border: 2px solid black;
    border-collapse: collapse;
    text-align: center;
    
}

#dash_table{
    margin-top: 90px;
    width:30%;
    height: 50%;
}
a{
    text-decoration: none;
}
    </style>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
    
    <div class="dash_head">
        <h1 align='center'>Admin Dashboard</h1>
        <h5 align='right' id="logout" ><hr><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></h5>
        </div>
        <table id=dash_table align="center">
            <tr><td>1.</td><td><a href='insert.php'><i class="fa fa-user fa-1x"></i>Insert Players</a></td></tr>
            <tr><td>2.</td><td><a href='update.php'><i class="fa fa-upload fa-1x"></i>Update Players</a></td></tr>
            <tr><td>3.</td><td><a href='delete.php'><i class="fa fa-trash fa-1x"></i>Delete Players</td></tr>
            
        </table>

</body>
</html>

