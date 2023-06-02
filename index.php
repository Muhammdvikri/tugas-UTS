<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM matakuliah ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Beranda</title>
</head>
 
<body>
<a href="add.php">Tambahkan Pengguna Baru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th> <th>Nama</th> <th>Kode Matakuliah</th> <th>Deskripsi</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)){         
        echo "<tr>";
        echo "<td>".$user_data['ID']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['KodeMatakuliah']."</td>";    
        echo "<td>".$user_data['Deskripsi']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>