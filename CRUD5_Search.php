<?php
include 'database.php';
$cari =  $_GET['cari'];

//query
$query = "SELECT * FROM data WHERE data1 LIKE '%" . $cari . "%''";
//eksekusi query
$sql = mysqli_query($koneksi, $query);

//hasilkan data array
$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari</title>
</head>

<body>
    <form action="CRUD5_search.php" method="get">

        <input type="text" name="cari" placeholder="cari" value="<?php echo $_GET['cari'] ?>">
        <button type="submit">cari</button>

    </form>

    <table>

        <tr>
            <th>data1</th>
            <th>data2</th>
            <th>data3</th>
        </tr>

        <?php foreach ($data as $d) : ?>

            <tr>
                <td><?php echo $d['data1'] ?></td>
                <td><?php echo $d['data2'] ?></td>
                <td><?php echo $d['data3'] ?></td>
                <td><a href="UpdateUI.php?data1=<?php echo $d['data1'] ?>">edit</a>
                    || <a href="Delete.php?data1=<?php echo $d['data1'] ?>">Hapus</a>"></a></td>
            </tr>

        <?php endforeach; ?>



    </table>
</body>

</html>
