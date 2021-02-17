<?php
include 'database.php';
$data1 =  $_GET['data1'];

//query
$query = "DELETE FROM data WHERE data1 = '$data1'";
$sql = mysqli_query($koneksi, $query);



if ($sql) {
    Header('Location: index.php');
} else {
    echo "gagal update";
}
