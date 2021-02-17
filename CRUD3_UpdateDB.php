<?php
include 'database.php';

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];

//query
$query = "UPDATE data SET data1 = '$data1',data2 = '$data2',data3 = '$data3' WHERE data1='$data1'";

//eksekusi query
$sql = mysqli_query($koneksi, $query);

if ($sql) {

    Header('Location:index.php');

    else {
        echo "error";
    }
}
