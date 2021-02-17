<?php
include 'database.php';

//masuk kan data input method GET/POST form kedalam variabel
$data1 = $_GET['data1'];
$data2 = $_GET['data2'];
$data3 = $_GET['data3'];

//query SQL
$query = "INSERT INTO data  (data1,data2,data3) VALUES ('$data1','$data2','$data3')";
//eksekusi query
$sql = mysqli_query($koneksi, $query);

if($sql){
    Header('Location:index.php');
} else{
echo "gagal simpan";
}

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
    <form action="" method="get">
        <input type="text" name="data1" id="">
        <input type="text" name="data2" id="">
        <input type="text" name="data3" id="">
        <input type="submit" value="Input">

    </form>
</body>

</html>
