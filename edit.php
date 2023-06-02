<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $ID=$_POST['ID'];
    $Name=$_POST['Name'];
    $Mata_Kuliah=$_POST['Kode Matakuliah'];
    $Deskripsi=$_POST['Deskripsi'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE siakad SET ID='$ID',Nama='$Nama',Kode Matakuliah='$Kode_Matakuliah', Deskripsi='$Deskripsi' WHERE alamat=$alamat");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM siakad WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $ID = $user_data['ID'];
    $Nama = $user_data['Nama'];
    $Kode_Matakuliah = $user_data['Kode Matakuliah']
    $Deskripsi = $user_data['Deskripsi'];
}
?>
<html>
<head>	
    <title>Edit Data Pengguna</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="text" ID="ID" value=<?php echo $ID;?>></td>
            </tr>
            <tr> 
                <td>$Nama</td>
                <td><input type="text" Nama="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Kode Mata Kuliah</td>
                <td><input type="text" Kode_Matakuliah="Kode Matakuliah" value=<?php echo $Kode_Matakuliah;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" Deskripsi="Deskripsi" value=<?php echo $Deskripsi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>