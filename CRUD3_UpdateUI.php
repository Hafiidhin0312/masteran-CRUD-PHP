<?php
include 'database.php';

//masuk kan data input method GET/POST form edit kedalam variabel
$data1 = $_GET['data1'];


//query SQL
$query = "SELECT*FROM data WHERE data1 = '$data1'";
//eksekusi query
$sql = mysqli_query($koneksi, $query);
//tampilkan data array
$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
</head>

<body>
    <form action="CRUD3_UpdateDB.php" method="post">
        <input type="text" name="data1" value="<?php echo $data[0]['data1'] ?>">
        <input type="text" name="data2" value="<?php echo $data[0]['data2'] ?>">
        <input type="text" name="data3" v2lue="<?php echo $data[0]['data3'] ?>">
        <input type="submit" value="Edit">


    </form>
</body>

</html>
