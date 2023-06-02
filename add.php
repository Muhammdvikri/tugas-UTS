<html>
<head>
    <title>Tambah Pengguna</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Kode Matakuliah</td>
                <td><input type="text" name="KodeMatakuliah"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Kumpul nak"></td>
            </tr>
        </table>
    </form>

    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $ID = $_POST['ID'];
        $Nama = $_POST['Nama'];
        $Kode_Matakuliah = $_POST['KodeMatakuliah'];
        $Deskripsi = $_POST['Deskripsi'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO matakuliah(ID,Nama,KodeMatakuliah,Deskripsi) VALUES('$ID','$Nama','$Kode_Matakuliah','$Deskripsi')");
        
        // Show message when user added
        echo "Berhasil menambahkan. <a href='index.php'>Lihat Pengguna</a>";
    }
    ?>
</body>
</html>