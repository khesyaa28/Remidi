<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hotel Dell</h1>
    <center><table border="1" width=50%></table></center>
    <tr>
    <th bgcolor="yellow">Nama</th>
    <th bgcolor="yellow">Username</th>
    <th bgcolor="yellow">Password</th>
    </tr>
    
    <?php
    
    include "connect.php";
    $query = "SELECT * FROM user";
    $sql = mysqli_query($connect,$query);
 
    while($data=mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Password']."</td>";
        echo "<td>".$data['Username']."</td>";
        echo "</tr>";
    }
    echo "<a href='logout.php'>Logout</a>";  
?> 
</body>
</html>